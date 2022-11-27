<?php
    function validate_first_name($POST){
        if(!isset($POST['fn'])){
            return false;
        }else if(strlen(trim($POST['fn']))<1){
            return false;
        }
        return true;
    }

    function validate_last_name($POST){
        if(!isset($POST['ln'])){
            return false;
        }else if(strlen(trim($POST['ln']))<1){
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
        if(!validate_first_name($POST) || !validate_last_name($POST) || !validate_server($POST)){
            return false;
         }
        return true;
    }
?>

