<?php
/**
 * Created by PhpStorm.
 * User: menzies
 * Date: 12/27/2016
 * Time: 3:56 PM
 */

class Auth
{
    public static function handleLogin()
    {
            @session_start();
            $logged = $_SESSION['loggedIn'];
            if ($logged == false) {
                session_destroy();
                header('location: ../login');
                exit;
            }
    }
}