<?php

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