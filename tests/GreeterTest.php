<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class GreeterTest extends TestCase
{
    public function testGreetsWithName(): void
    {
        $greeter = new \App\Greeter();
        $greeting = $greeter->greet('Alice');
        $this->assertSame('Hello, Alice!', $greeting);
    }
}