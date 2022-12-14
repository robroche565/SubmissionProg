<?php

    //resume session here to fetch session values
    
    require_once '../classes/reservation.class.php';
    require_once '../tools/functions.php';
    session_start();

    if(isset($_POST['res'])){

        $reservation = new Reservation();
        $reservation->res_date = htmlentities($_POST['res_date']);
        if(isset($_POST['server'])){
            $reservation->server = $_POST['server'];
        }
        $reservation->user_id = htmlentities($_POST['account']);
        if(validate_reservation($_POST)){
            if($reservation->add()){  
                header('location: ../user/userpage.php');
            }
        }
    }
    
    require_once '../includes/autochecker.php';
    require_once '../includes/header.php';
    require_once '../includes/topnavuserres.php';
    
    
?>
    

    <div class="add-form-container">
        <div class="add-form-box">
            <h3>Reservation</h3>
            <form class="add-form" method="POST" action="reserve.php" >
                <label for="date">Date of Reservation</label>
                <input type="datetime-local" id='res_date'name="res_date" placeholder="Date" required>
                <input type="hidden" id="account" name="account" value="<?php echo $_SESSION['acc_id'] ?>">
                <div>
                    <label for="server">Choose Your Waiter/Waitress</label><br>
                    <label class="container" for="anya">Anya Forger
                        <input type="radio" name="server" id="anya" value="Anya Forger" >
                        <span class="checkmark"></span>
                    </label>
                    <label class="container" for="yor">Yor Forger
                        <input type="radio" name="server" id="yor" value="Yor Forger" >
                        <span class="checkmark"></span>
                    </label>
                    <label class="container" for="loid">Loid Forger
                        <input type="radio" name="server" id="loid" value="Loid Forger" >
                        <span class="checkmark"></span>
                    </label>        
                </div>
                <?php
                    if(isset($_POST['res']) && !validate_server($_POST)){
                ?>
                    <p class="error">Please select Waiter/Waitress.</p>
                <?php
                    }
                ?>
                
                
                <input type="submit" class="button_res" value="Reserve" name="res" id="res"> 
                </div>
                
        </form>

    </div>
    

<?php 
    
    require_once '../includes/footer.php';

?>