<?php
/**
 * Created by PhpStorm.
 * User: menzies
 * Date: 12/17/2016
 * Time: 7:30 PM
 */

class Database extends PDO{
    public function __construct(){
        parent::__construct('mysql:host=localhost;dbname=mvc' , 'root', '');
    }

}