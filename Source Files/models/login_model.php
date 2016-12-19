<?php
/**
 * Created by PhpStorm.
 * User: menzies
 * Date: 12/17/2016
 * Time: 7:36 PM
 */

class Login_Model extends Model {
    public function __construct(){
        parent:: __construct();
    }
    public function run(){

        $sth = $this->db->prepare("SELECT id FROM users WHERE login = :login AND password = MD5(:password)");
        $sth->execute(array(
            ':login' => $_POST['login'],
            ':password' => $_POST['password']
        ));

        //$data = $sth->fetchAll();
        //print_r($data);
        $count = $sth->rowCount();
        if ($count > 0) {
            //login
            Session::init();
            Session::set('loggedIn' , true);
            header('location: ../dashboard');
        } else {
            //show an error
            header('location: ../login');
        }
    }
}