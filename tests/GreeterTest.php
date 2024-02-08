<?php
use PHPUnit\Framework\TestCase;

class GreeterTest extends TestCase
{
    public function testGreetsWithName(): void
    {
        $greeter = new Greeter();
        $greeting = $greeter->greet('Alice');
        $this->assertSame('Hello, Alice!', $greeting);
    }
}