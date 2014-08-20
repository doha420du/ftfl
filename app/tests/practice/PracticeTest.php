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



}