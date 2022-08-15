<?php
declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    private array $test;

    protected function setUp(): void
    {
        $this->test = [1,2,3,4,5];
    }

    protected function tearDown(): void
    {
        $this->test = [];
    }

    public function testMe()
    {
        $this->assertCount(5, $this->test);
    }
}