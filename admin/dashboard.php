<?php 
  session_start();
  require_once '../includes/autochecker.php';
  require_once '../includes_admin/header.php';
  require_once '../includes_admin/sidebar.php';
?>


    <div class="home-content">
    <div class="table-container">
        <div class="table-heading">
            <h3 class="table-title">Dashboard</h3>
        </div>
        <div class="overview-boxes">
            <div class="box">
                <div class="right-side">
                    <div class="box-topic">Total Accounts</div>
                    <div class="number">358</div>
                    <div class="indicator">
                        
                        <span class="text">As of <?php echo ' ' . date("m-d-Y h:i:s A"); ?></span>
                    </div>
                </div>
                <i class='bx bx-send cart'></i>
            </div>

            <div class="box">
                <div class="right-side">
                    <div class="box-topic">Total Reservations</div>
                    <div class="number">209</div>
                    <div class="indicator">
                        
                        <span class="text">As of <?php echo ' ' . date("m-d-Y h:i:s A"); ?></span>
                    </div>
                </div>
                <i class='bx bx-edit-alt cart two'></i>
            </div>
        </div>
    </div>



    </div>
            
                
    

  </section>
  <?php
    require_once '../includes_admin/script.php'
  
  ?>
</body>
</html>

