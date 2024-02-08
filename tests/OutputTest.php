<?php declare(strict_types=1);
namespace Tests;

use PHPUnit\Framework\TestCase;

final class OutputTest extends TestCase
{
    public function testExpectFooActualFoo(): void
    {
        $this->expectOutputString("bar");

        print "bar";
    }
}