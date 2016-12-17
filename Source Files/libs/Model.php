<?php
/**
 * Created by PhpStorm.
 * User: menzies
 * Date: 12/17/2016
 * Time: 4:49 PM
 */

class Model {
    function __construct(){
        $this->db = new Database();
    }
}