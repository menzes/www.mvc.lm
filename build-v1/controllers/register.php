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
