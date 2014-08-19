<?php
/**
 * Created by PhpStorm.
 * User: bcc
 * Date: 8/19/14
 * Time: 5:11 PM
 */

class GreetingController extends BaseController{
    public function sayhi(){
        $message = "Hello, sayhi";
        return View::make('greeting.sayhi')
            ->with('aNameOfTheVariable',$message);
    }
} 