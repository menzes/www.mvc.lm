<?php
/**
 * Created by PhpStorm.
 * User: menzies
 * Date: 12/27/2016
 * Time: 3:52 PM
 */
class Blog_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function noteList()
    {
        return $this->db->select('SELECT * FROM note',
            array());
    }

    public function noteSingleList($noteid)
    {
        return $this->db->select('SELECT * FROM note WHERE userid = :userid AND noteid = :noteid',
            array('userid' => $_SESSION['userid'], 'noteid' => $noteid));
    }

}