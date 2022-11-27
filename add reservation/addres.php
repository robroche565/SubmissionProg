<?php 
  session_start();
  require_once '../includes/autochecker.php';
  require_once '../includes_admin/header.php';
  require_once '../includes_admin/sidebar.php';
  require_once '../includes_admin/script.php';
  require_once '../classes/reservation.class.php';
  require_once '../tools/functions.php';
    

    if(isset($_POST['res'])){

        $reservation = new Reservation();
        $reservation->firstname = htmlentities($_POST['fn']);
        $reservation->lastname = htmlentities($_POST['ln']);
        $reservation->res_date = htmlentities($_POST['res_date']);
        if(isset($_POST['server'])){
            $reservation->server = $_POST['server'];
        }
        if(validate_reservation($_POST)){
            if($reservation->add()){  
                header('location: ../admin/dashboard.php');
            }
        }
    }
?>
<div class="home-content">
    <div class="table-container">
        <div class="table-heading form-size">
            <h3 class="table-title">Add New Reservation</h3>
            <a class="back" href="../admin/reserve.php"><i class='bx bx-caret-left'></i>Back</a>  
        </div>
        <div class="add-form-container">
        <div class="add-form-box">
            <form class="add-form" method="POST" action="addres.php" >
                <label for="fn">First Name</label>
                <input type="text" id='fn'name="fn" required placeholder="Enter First Name" value="<?php if(isset($_POST['fn'])) { echo $_POST['fn']; } ?>" >
                <?php
                    if(isset($_POST['res']) && !validate_first_name($_POST)){
                ?>
                    <p class="error">First name is invalid. Trailing spaces will be ignored.</p>
                <?php
                    }
                ?>
                <label for="ln">Last Name</label>
                <input type="text" id='ln'name="ln" required placeholder="Enter Last Name" value="<?php if(isset($_POST['ln'])) { echo $_POST['ln']; } ?>" >
                <?php
                    if(isset($_POST['res']) && !validate_last_name($_POST)){
                ?>
                    <p class="error">Last name is invalid. Trailing spaces will be ignored.</p>
                <?php
                    }
                ?>
                <label for="date">Date of Reservation</label>
                <input type="datetime-local" id='res_date'name="res_date" placeholder="Date" required>
          
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
                <input type="submit" class="button" value="Reserve" name="res" id="res"> 
        </div>
        </form>

    </div>


    </div>

</div>
