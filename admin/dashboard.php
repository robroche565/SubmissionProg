<?php 
  session_start();
  require_once '../includes/autochecker.php';
  require_once '../includes_admin/header.php';
  require_once '../includes_admin/sidebar.php';
?>


    <div class="home-content">
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
  </section>
  <script>
   let sidebar = document.querySelector(".sidebar");
   let sidebarBtn = document.querySelector(".sidebarBtn");
  sidebarBtn.onclick = function() {
    sidebar.classList.toggle("active");
    if(sidebar.classList.contains("active")){
    sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
  }else
    sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
  }
 </script>
</body>
</html>

