<?php

    require_once '../classes/reservation.class.php';

    
    session_start();
    
    if (!isset($_SESSION['logged-in'])){
        header('location: ../homepage/homepage.php');
    }
    
    $reservation = new Reservation;
    if(isset($_GET['id'])){
        if($reservation ->delete($_GET['id'])){

            header('location: reserve.php');
        }
    }
?>