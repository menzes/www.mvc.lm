<?php
/**
 * Created by PhpStorm.
 * User: Lachlan
 * Date: 12/28/2016
 * Time: 12:05 PM
 */
class Grats extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $this->view->title = 'grats';
        $this->view->render('grats/index');
    }

}