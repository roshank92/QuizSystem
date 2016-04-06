<?php
/**
 * Created by PhpStorm.
 * User: karwalkar
 * Date: 3/19/2016
 * Time: 10:21 PM
 */

class SessionManagement {
    static function setSession(){

    }
    function loginUser() {
        if (!isset ($_SESSION['uid']) || !$_SESSION['uid']) {
            /* If no UID is in the cookie, we redirect to the login page */
    }
        header('Location: http://kossu/session/login.php'); }

    static function logout(){


    }
}