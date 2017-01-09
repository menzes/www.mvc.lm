<?php
/**
 * Created by PhpStorm.
 * User: Lachlan
 * Date: 12/21/2016
 * Time: 2:03 PM
 */

class User_Model extends Model{

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

    public function editSave($data)
    {
        $postData = array(
            'login' => $data['login'],
            'password' => Hash::create('md5', $data['password'], HASH_PASSWORD_KEY),
            'role' => $data['role'],
            'subscribed' => $data['subscribed']
        );

        $this->db->update('user', $postData, "`userid` = {$data['userid']}");
    }

    public function delete($userid)
    {
        $result = $this->db->select('SELECT role FROM user WHERE userid = :userid', array(':userid' => $userid));

        if ($result[0]['role'] == 'owner')
            return false;

        $this->db->delete('user', "userid = '$userid'");
    }
}