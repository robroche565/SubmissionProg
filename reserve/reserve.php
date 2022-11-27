<?php

    //resume session here to fetch session values
    session_start();
    
    require_once '../includes/autochecker.php';
    require_once '../includes/header.php';
    require_once '../includes/topnavuserres.php';
    
    
?>
    

    <div class="add-form-container">
        <div class="add-form-box">
        <h3>Reservation</h3>
        </br> 
            <form class="add-form" method="post" action="reserve.php">
                <label for="date">Date of Reservation</label>
                <input type="datetime-local" name="date" placeholder="Date" required>
            </br> </br> </br>
                <div>
                    <label for="role">Choose Your Waiter/Waitress</label><br>
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
                    <input type="submit" class="button" value="Reserve" name="res" id="res">
                            
                </div>
        </div>
        </form>

    </div>
    

<?php 
    
    require_once '../includes/footer.php';

?>