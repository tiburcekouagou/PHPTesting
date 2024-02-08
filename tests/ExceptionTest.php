<?php declare(strict_types=1);
namespace Tests;

use PHPUnit\Framework\TestCase;

final class ExceptionTest extends TestCase
{
    public function testException(): void
    {
        $this->expectException(\InvalidArgumentException::class); // assert that an InvalidArgumentException was thrown
        $this->expectExceptionMessage("There is an error"); // assert the exception message
        $this->expectExceptionCode(0);

        # throw imediately the exception
        throw (new \InvalidArgumentException("There is an error"));
    }
}