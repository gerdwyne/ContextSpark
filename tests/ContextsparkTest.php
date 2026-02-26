<?php
/**
 * Tests for ContextSpark
 */

use PHPUnit\Framework\TestCase;
use Contextspark\Contextspark;

class ContextsparkTest extends TestCase {
    private Contextspark $instance;

    protected function setUp(): void {
        $this->instance = new Contextspark(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Contextspark::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
