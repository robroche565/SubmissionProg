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
        $reservation->res_date = htmlentities($_POST['res_date']);
        if(isset($_POST['server'])){
            $reservation->server = $_POST['server'];
        }
        $reservation->user_id = htmlentities($_POST['accounts']);
        if(validate_reservation($_POST)){
            if($reservation->add()){  
                header('location: ../admin/reserve.php');
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
                <div>
                    <label for="accounts">Account to be used</label>
                    <select name="accounts">
                            <?php
                                require_once("../classes/account.class.php");
                                $accounts = new Accounts();
                                foreach($accounts->show_drop() as $value){?>
                                   <option value="<?php echo $value['id'];?>"><?php
                                   echo $value['lastname'].', '.$value['firstname'];
                                   ?></option>
                            <?php
                                }

                            ?>
                    </select>
                </div>
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
