<?php
/**
 * Created by PhpStorm.
 * User: bcc
 * Date: 8/20/14
 * Time: 9:14 AM
 */

class AssertTrueTest extends TestCase {
     public function testHelloWorld()
     {
        $greeting = 'Hello, World.';

        $this->assertTrue($greeting === 'Hello, World.');
     }
}
