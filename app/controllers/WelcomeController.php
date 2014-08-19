<?php
/**
 * Created by PhpStorm.
 * User: bcc
 * Date: 8/19/14
 * Time: 12:14 PM
 */

class WelcomeController extends BaseController {
    public function sayhello(){
        return View::make('welcome.sayhello')
            ->with(array('hi'=>'hello how are you?...',
                        'anExampleArraykey'=>'example value...',
                        'hell'=>'Hello Bangladesh'));
    }
} 