<?php
/**
 * Created by PhpStorm.
 * User: menzies
 * Date: 12/22/2016
 * Time: 9:56 PM
 */

class Register extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $this->view->title = 'Register';
        $this->view->userList = $this->model->userList();
        $this->view->render('register/index');
    }

    public function create()
    {
        $data = array();
        $data['login'] = $_POST['login'];
        $data['password'] = $_POST['password'];
        $data['role'] = $_POST['role'];

        // @TODO: Do your error checking!

        $this->model->create($data);
        header('location: ' . URL . 'user');
    }



}
