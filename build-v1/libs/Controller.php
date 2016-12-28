<?php
/**
 * Created by PhpStorm.
 * User: menzies
 * Date: 12/17/2016
 * Time: 2:05 PM
 */

class Controller {

    function __construct() {
        //echo 'Main controller<br />';
        $this->view = new View();
    }

    /**
     *
     * @param string $name Name of the model
     * @param string $path Location of the models
     */
    public function loadModel($name, $modelPath = 'models/') {

        $path = $modelPath . $name.'_model.php';

        if (file_exists($path)) {
            require $modelPath .$name.'_model.php';

            $modelName = $name . '_Model';
            $this->model = new $modelName();
        }
    }

}