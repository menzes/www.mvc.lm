<?php
/**
 * Created by PhpStorm.
 * User: menzies
 * Date: 12/17/2016
 * Time: 4:46 PM
 */

class Help_Model extends Model{
    function __construct(){
        echo 'Help model';
    }
    function blah(){
        return 10 + 10;
    }
}