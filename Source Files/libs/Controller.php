<?php
/**
 * Created by PhpStorm.
 * User: menzies
 * Date: 12/17/2016
 * Time: 2:05 PM
 */

class Controller {
    function __construct(){
        //echo 'Main controller<br />';
        $this->view = new View();
    }
    public function loadModel($name){

        $path = 'models/'.$name.'_model.php';

        if (file_exists($path)) {
            require 'models/'.$name.'_model.php';

            $modelName = $name . '_Model';
            $this->model = new $modelName();
        }
    }
}