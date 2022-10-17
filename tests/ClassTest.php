<?php

namespace AlegraApi\AlegraPhp\Tests;

use AlegraApi\AlegraPhp\TestClass;
use PHPUnit\Framework\TestCase;

class ClassTest extends TestCase
{
    /**
     * @test
     */
    public function itSums()
    {
        $test = new TestClass();
        $sum = $test->sum(7, 3);
        $this->assertSame(10, $sum);
    }
}