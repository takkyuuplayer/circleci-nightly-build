<?php
declare(strict_types=1);

namespace Tests\Excercise;

use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    public function setUp()
    {
        $this->instance = new \Exercise\Hello();
    }

    public function test_one()
    {
        $this->assertSame(1, $this->instance->one());
    }
}
