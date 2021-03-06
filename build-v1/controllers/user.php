<?php
/**
 * Created by PhpStorm.
 * User: menzies
 * Date: 12/19/2016
 * Time: 9:35 PM
 */
class User extends Controller {

    public function __construct() {
        parent::__construct();
        //Auth::handleLogin();
    }

    public function index()
    {
        $this->view->title = 'Users';
        $this->view->userList = $this->model->userList();
        $this->view->render('user/index');
    }

    public function create()
    {
        $data = array();
        $data['login'] = $_POST['login'];
        $data['password'] = $_POST['password'];
        $data['role'] = $_POST['role'];
        $data['subscribed'] = $_POST['subscribed'];
        $logged = $_SESSION['loggedIn'];

        // @TODO: Do your error checking!

        $this->model->create($data);
        if ($logged == false){
            header('location: ' . URL . 'grats');
        }
        else {
            header('location: ' . URL . 'user');
        }

    }

    public function edit($id)
    {
        $this->view->user = $this->model->userSingleList($id);
        $this->view->title = 'Edit User';
        $this->view->render('user/edit');
    }

    public function editSave($id)
    {
        $data = array();
        $data['userid'] = $id;
        $data['login'] = $_POST['login'];
        $data['password'] = $_POST['password'];
        $data['role'] = $_POST['role'];
        $data['subscribed'] = $_POST['subscribed'];


        // @TODO: Do your error checking!

        $this->model->editSave($data);
        header('location: ' . URL . 'user');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('location: ' . URL . 'user');
    }

}