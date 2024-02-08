<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\Attributes\RequiresPhpExtension;
use PHPUnit\Framework\TestCase;

final class DatabaseTest extends TestCase
{

    protected function setUp(): void
    {
        if (!extension_loaded('pgsql')) {
            $this->markTestSkipped(
                'The PostgreSQL extension is not available'
            );
        }
    }

    public function testConnection(): void
    {
        // ...
    }
}