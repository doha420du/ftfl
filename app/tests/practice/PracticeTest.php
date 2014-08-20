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

    public function testAssertEquals()
    {
        $val = 0;
        $this->assertEquals(0, $val);
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

}