<?php
/**
 * Created by PhpStorm.
 * User: Lachlan
 * Date: 12/28/2016
 * Time: 12:05 PM
 */
class Blog extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $this->view->title = 'note';
        $this->view->noteList = $this->model->noteList();
        $this->view->render('blog/index');
    }

    public function create()
    {
        $data = array(
            'title' => $_POST['title'],
            'content' => $_POST['content']
        );
        $this->model->create($data);
        header('location: ' . URL . 'note');
    }
}