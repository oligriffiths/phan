<?php

namespace Tests\Autoload\Simple;

/**
 * Test
 */
function foo(): A {
    return new A(true);
}

$a = 'a' . foo()->getC(false);
