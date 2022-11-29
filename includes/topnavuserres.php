<header>
    <div> 
        <a href="../user/userpage.php"> <img class="logo" src="../images/Spy_×_Family_logo.png"> </a>
    </div>
    <nav>
        <ul class="nav_links">
            <li><a href="../user/userpage.php">Home</a></li>
            <li><a href="../user/userpage.php">Service</a></li>
            <li><a href="../user/userpage.php">Waiter/Waitress</a></li>
            <li><a href="../user/userpage.php">About Us</a></li>
            <li><a href="../reserve_user/reserve.php">Reserve</a></li>
        </ul> 
    </nav>
    <div class="profile" onclick="toggleMenu()">
        <i class='bx bx-user-circle'></i>
        <span class="admin-name"><?php echo $_SESSION['fullname']; ?></span>
    </div>

    <div class="sub-menu-wrap" id="subMenu">
        <div class="sub-menu">
            <a href="../login/logout.php" class="sub-menu-link">
                <img src="../images/logout.png">
                <span>Logout</span>
            </a>
        </div>
    </div>

    <script>
        let subMenu = document.getElementById('subMenu');

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>
</header>