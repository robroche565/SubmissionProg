<header>
    <div> 
        <a href="#"> <img class="logo" src="../images/Spy_×_Family_logo.png"> </a>
    </div>
    <nav>
        <ul class="nav_links">
            <li><a href="#section1">Home</a></li>
            <li><a href="#section2">Service</a></li>
            <li><a href="#section3">Waiter/Waitress</a></li>
            <li><a href="#section4">About Us</a></li>
            <li><a href="#">Reserve</a></li>
        </ul> 
    </nav>
    <div class="profile" onclick="toggleMenu()">
        <span class="admin-name"><?php echo $_SESSION['fullname']; ?></span>
        <i class='bx bx-user-circle'></i>
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