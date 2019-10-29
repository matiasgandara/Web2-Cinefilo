<?php

class AuthHelper{

    public function __construct() {}


    public function checkLogIn(){
        session_start();
    
        if(!isset($_SESSION['userId'])){
            return false;
            die();
        }

        if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 5000)) { 
            header("Location: " . URL_LOGOUT);
            return false;
            die(); 
        } else {
            return true;
        }
        $_SESSION['LAST_ACTIVITY'] = time();
    
    }

    public function getLoggedUserName() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
        return $_SESSION['USERNAME'];
    }

}