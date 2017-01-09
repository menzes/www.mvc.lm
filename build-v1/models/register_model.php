<?php
/**
 * Created by PhpStorm.
 * User: menzies
 * Date: 12/27/2016
 * Time: 8:07 PM
 */
class Register_Model extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function userList()
    {
        return $this->db->select('SELECT userid, login, role, subscribed FROM user');
    }

    public function userSingleList($userid)
    {
        return $this->db->select('SELECT userid, login, role, subscribed FROM user WHERE userid = :userid', array(':userid' => $userid));
    }

    public function create($data)
    {
        $this->db->insert('user', array(
            'login' => $data['login'],
            'password' => Hash::create('md5', $data['password'], HASH_PASSWORD_KEY),
            'role' => $data['role'],
            'subscribed' => $data['subscribed']
        ));
    }


}