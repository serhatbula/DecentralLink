<?php
/**
 * Tests for DecentralLink
 */

use PHPUnit\Framework\TestCase;
use Decentrallink\Decentrallink;

class DecentrallinkTest extends TestCase {
    private Decentrallink $instance;

    protected function setUp(): void {
        $this->instance = new Decentrallink(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Decentrallink::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
