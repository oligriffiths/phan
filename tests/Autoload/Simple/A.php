<?php

namespace Tests\Autoload\Simple;

/**
 * Class A
 */
class A extends B
{
    /** @var string */
    private $a;

    /**
     * A constructor.
     *
     * @param bool $a The A
     */
    public function __construct(bool $a)
    {
        if ($a) {
            echo 'A';
        }
    }

    /**
     * Gets B
     *
     * @param B $b Test
     */
    public function getB(B $b): B
    {
        return $b;
    }

    /**
     * Gets C
     *
     * @param C|mixed $c Test
     * @return C|mixed
     */
    public function getC($c)
    {
        return $c;
    }
}
