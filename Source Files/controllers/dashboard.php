<?php
/**
 * Created by PhpStorm.
 * User: menzies
 * Date: 12/19/2016
 * Time: 9:35 PM
 */
class dashboard extends Controller {

    function __construct() {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if ($logged == false) {
            Session::destroy();
            header('location: ../login');
            exit;
        }
    }

    function index(){
        $this->view->render('dashboard/index');
    }

    function logOut(){
        Session::destroy();
        header('location: ../login');
        exit;
    }

}