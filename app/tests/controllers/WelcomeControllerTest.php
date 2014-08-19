<?php

class WelcomeControllerTest extends TestCase{

    public function testLoadingWelcomeSayHello(){
        $this->call('GET','welcome/sayhello');
        $this->assertResponseOk();
    }

    public function testHello(){
        $this->call('GET','welcome/sayhello');
        $this->assertViewHas('anExampleArraykey');
    }

    public function testMessage(){
        $response = $this->call('GET', 'welcome/sayhello');
        $this->assertEquals('Hello Bangladesh', $response->getContent());
    }
}