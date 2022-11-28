<?php
    function validate_first_name($POST){
        if(!isset($POST['firstname'])){
            return false;
        }else if(strlen(trim($POST['firstname']))<1){
            return false;
        }
        return true;
    }

    function validate_last_name($POST){
        if(!isset($POST['lastname'])){
            return false;
        }else if(strlen(trim($POST['lastname']))<1){
            return false;
        }
        return true;
    }
    function validate_username($POST){
        if(!isset($POST['username'])){
            return false;
        }else if(strlen(trim($POST['username']))<1){
            return false;
        }
        return true;
    }

    function validate_server($POST){
        if(!isset($POST['server'])){
            return false;
        }
        return true;
    }
    function validate_reservation($POST){
        if(!validate_server($POST)){
            return false;
         }
        return true;
    }
    function validate_add_account($POST){
        if(!validate_first_name($POST) || validate_last_name($POST) || validate_username($POST)){
            return false;
         }
        return true;
    }
    
?>

