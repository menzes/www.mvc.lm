<?php
/**
 * Created by PhpStorm.
 * User: menzies
 * Date: 12/27/2016
 * Time: 3:52 PM
 */
class Note_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function noteList()
    {
        return $this->db->select('SELECT * FROM note WHERE userid = :userid',
            array('userid' => $_SESSION['userid']));
    }

    public function noteSingleList($noteid)
    {
        return $this->db->select('SELECT * FROM note WHERE userid = :userid AND noteid = :noteid',
            array('userid' => $_SESSION['userid'], 'noteid' => $noteid));
    }

    public function create($data)
    {
        $this->db->insert('note', array(
            'title' => $data['title'],
            'userid' => $_SESSION['userid'],
            'content' => $data['content'],
            'date_added' => date('Y-m-d') // use GMT aka UTC 0:00
        ));
    }

    public function editSave($data)
    {
        $postData = array(
            'title' => $data['title'],
            'content' => $data['content'],
        );

        $this->db->update('note', $postData,
            "`noteid` = '{$data['noteid']}' AND userid = '{$_SESSION['userid']}'");
    }

    public function delete($id)
    {
        $this->db->delete('note', "`noteid` = {$id['noteid']}");
    }
}