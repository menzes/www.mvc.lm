<?php
/**
 * Created by PhpStorm.
 * User: menzies
 * Date: 12/19/2016
 * Time: 9:35 PM
 */
class Dashboard extends Controller {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
        $this->view->js = array('dashboard/js/default.js');
    }

    function index()
    {
        $this->view->title = 'Dashboard';
        $this->view->render('dashboard/index');
    }

    function logout()
    {
        Session::destroy();
        header('location: ' . URL .  'login');
        exit;
    }

    function xhrInsert()
    {
        $this->model->xhrInsert();
    }

    function xhrGetListings()
    {
        $this->model->xhrGetListings();
    }

    function xhrDeleteListing()
    {
        $this->model->xhrDeleteListing();
    }

}