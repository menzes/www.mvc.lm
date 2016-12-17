<?php
/**
 * Created by PhpStorm.
 * User: menzies
 * Date: 12/17/2016
 * Time: 1:12 PM
 */

class Help extends Controller{

    function __construct(){
        parent::__construct();
        echo 'we are inside help<br />';
    }
    public function other($arg = false) {
        echo 'we are in other<br />';
        echo 'Optional: ' . $arg . '<br />';
    }
}