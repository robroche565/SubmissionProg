<?php

    require_once '../classes/account.class.php';

    
    session_start();
    
    if (!isset($_SESSION['logged-in'])){
        header('location: ../login/login.php');
    }
    
    $account = new Accounts;
    if(isset($_GET['id'])){
        if($account->delete($_GET['id'])){

            header('location: ../admin/accounts.php');
        }
    }
?>