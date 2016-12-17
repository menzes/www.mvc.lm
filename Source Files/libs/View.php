<?php
/**
 * Created by PhpStorm.
 * User: menzies
 * Date: 12/17/2016
 * Time: 2:15 PM
 */

class View {
    function __construct(){
        //echo 'This is the view';
    }

    public function render($name){
        require 'views/' . $name . '.php';
    }
}