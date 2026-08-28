<?php
/**
 * Tests for ZephyrRift
 */

use PHPUnit\Framework\TestCase;
use Zephyrrift\Zephyrrift;

class ZephyrriftTest extends TestCase {
    private Zephyrrift $instance;

    protected function setUp(): void {
        $this->instance = new Zephyrrift(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Zephyrrift::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
