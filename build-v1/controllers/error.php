<?php
/**
 * Created by PhpStorm.
 * User: menzies
 * Date: 12/17/2016
 * Time: 2:00 PM
 */

class Error extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->title = '404 Error';
        $this->view->msg = 'This page doesnt exist';
        $this->view->render('error/index');
    }

}