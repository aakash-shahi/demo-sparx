<?php

namespace Deemo\Sparx\Tests;

use PHPUnit\Framework\TestCase;
use Demo\Sparx\FirstClass;

class FirstClassTest extends TestCase
{
    /** @test */
    public function function_should_return_true()
    {
        $bool = FirstClass::returnTrue();
        $this->assertTrue($bool);
    }
}
