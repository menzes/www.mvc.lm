<?php
/**
 * Created by PhpStorm.
 * User: menzies
 * Date: 12/17/2016
 * Time: 12:38 PM
 */

    //use and auto loader!
    require 'libs/Bootstrap.php';
    require 'libs/Controller.php';
    require 'libs/View.php';
    require 'libs/Model.php';

    // Library
    require 'libs/Database.php';

    require 'config/database.php';
    require 'config/paths.php';


$app = new Boostrap();
