<?php
/**
 * Tests for KeyGrid
 */

use PHPUnit\Framework\TestCase;
use Keygrid\Keygrid;

class KeygridTest extends TestCase {
    private Keygrid $instance;

    protected function setUp(): void {
        $this->instance = new Keygrid(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Keygrid::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
