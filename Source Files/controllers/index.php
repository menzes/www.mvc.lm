<?php
/**
 * Created by PhpStorm.
 * User: menzies
 * Date: 12/17/2016
 * Time: 1:02 PM
 */

class index extends Controller {

    function __construct() {
     parent::__construct();

    }

    function index(){
        $this->view->render('index/index');
    }
}