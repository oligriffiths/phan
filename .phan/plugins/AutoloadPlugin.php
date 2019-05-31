<?php declare(strict_types=1);

use Phan\PluginV3;
use Phan\PluginV3\BeforeAnalyzeCapability;

class AutoloadPlugin extends PluginV3 implements BeforeAnalyzeCapability
{
    /** @var \Composer\Autoload\ClassLoader */
    private $classloader;

    public function beforeAnalyze(\Phan\CodeBase $code_base): void
    {
        $root = \Phan\Config::getProjectRootDirectory();
        $path = $root . '/vendor/autoload.php';
        $this->classloader = require $path;

        $file_list = \Phan\Library\FileCache::getCachedFileList();

        $classes = $this->parseFunctions($code_base->getFunctionMap(), $code_base);
        $classes += $this->parseClasses($code_base);

        $classes_files = [];

        /** @var \Phan\Language\Element\Parameter $param */
        foreach ($classes as $class) {
            if (!$code_base->hasClassWithFQSEN($class)) {
                $class = ltrim((string)$class, '\\');
                $path = $this->classloader->findFile($class);

                if ($path) {
                    $classes_files[$class] = realpath($path);
                }
            }
        }

        foreach ($classes_files as $class => $file) {
            $file = str_replace($root . '/', '', $file);
            \Phan\Analysis::parseFile($code_base, $file);
        }

        $include = \Phan\Config::getValue('include_analysis_file_list');
        foreach ($file_list as $file) {
            $file = str_replace($root . '/', '', $file);
            $include[] = $file;
        }

//        \Phan\Config::setValue('include_analysis_file_list', $include);
    }

    private function parseClasses(\Phan\CodeBase $code_base): array
    {
        $classes = [];

        /**
         * @var \Phan\Language\Element\Func $func
         */
        foreach ($code_base->getUserDefinedClassMap() as $fqsen => $class) {
            $classes += $this->parseClass($class, $code_base);
        }

        return $classes;
    }

    private function parseClass(\Phan\Language\Element\Clazz $class, \Phan\CodeBase $code_base)
    {
        $list = $class->getAncestorFQSENList();
        $list = array_merge($list, $class->getInterfaceFQSENList());
        $list = array_merge($list, $class->getTraitFQSENList());
        $list = array_merge($list, $this->parseFunctions($class->getMethodMap($code_base), $code_base));

        return $list;
    }

    /**
     * @param \Phan\Library\Map|array $functions
     * @return array
     */
    private function parseFunctions($functions, \Phan\CodeBase $code_base): array
    {
        $classes = [];

        /**
         * @var \Phan\Language\Element\Func $func
         */
        foreach ($functions as $func) {
            $classes = array_merge($classes, $this->parseFunction($func, $code_base));
        }

        return $classes;
    }

    private function parseFunction(\Phan\Language\Element\FunctionInterface $function, \Phan\CodeBase $code_base)
    {
        $function->ensureScopeInitialized($code_base);
        $params = $function->getParameterList();

        $return = $function->getRealReturnType();
        $return_doc = $function->getPHPDocReturnType();

        if (empty($params) && !$return_doc && $return->isEmpty()) {
            [];
        }

        // Add function parameters
        $types = [];
        foreach ($params as $parameter) {
            /** @var \Phan\Language\Type $type */
            foreach ($parameter->getUnionType()->getReferencedClasses() as $type) {
                $types[] = $type->asFQSEN();
            }
        }

        // Add real return type
        /** @var \Phan\Language\Type $type */
        foreach ($return->getReferencedClasses() as $type) {
            $types[] = $type->asFQSEN();
        }

        // Add docblock return type
        if ($return_doc) {
            /** @var \Phan\Language\Type $type */
            foreach ($return_doc->getReferencedClasses() as $type) {
                $types[] = $type->asFQSEN();
            }
        }

        return $types;
    }
}

return new AutoloadPlugin();
