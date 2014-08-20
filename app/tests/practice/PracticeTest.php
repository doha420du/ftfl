<?php
/**
 * Created by PhpStorm.
 * User: bcc
 * Date: 8/20/14
 * Time: 9:14 AM
 */

class PracticeTest extends TestCase {

    public function testAssertTrue()
    {
        $greeting = 'Hello, World.';

        $this->assertTrue($greeting === 'Hello, World.', $greeting);
    }

    public function testAssertFalse()
    {
        $greeting = 'Hello, World.';

        $this->assertFalse($greeting === 'Hello, World', $greeting);
    }

    public function testAssertEquals()
    {
        $val = 0;
        $this->assertEquals(0, $val);
    }

    public function testAssertNotEquals()
    {
        $val = 0;
        $this->assertNotEquals(1, $val);
    }

    public function testAssertContains()
    {
        $names = ['Taylor', 'Shawn', 'Dayle'];
        $this->assertContains('Dayle', $names);
    }

    public function testAssertSame()
    {
        $val = null;
        $this->assertSame(null, $val);
    }

    public function testAssertArrayHasKey ()
    {
        $family = [
                    'parents' => 'Joe',
                    'children' => ['Timmy', 'Suzy']
        ];

        $this->assertArrayHasKey('parents', $family); // true
    }

    public function testAssertInternalType()
    {
        $age = 25;
        $this->assertInternalType('integer', $age); // true
    }
}