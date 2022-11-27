<body>
  <div class="sidebar">
    <div class="logo-details">
      <img class="logo_icon"src="../images/icon.png">
      
      <img class="logo_img"src="../images/Spy_×_Family_logo.png">
    </div>
      <ul class="nav-links">
        <li>
          <a href="../admin/dashboard.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="../admin/reserve.php">
            <i class='bx bx-list-ul'></i>
            <span class="links_name">Reserve</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-user' ></i>
            <span class="links_name">Accounts</span>
          </a>
        </li>
        <li class="log_out">
          <a href="../login/logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        
      </div>
      <!--<div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>-->
      <div class="profile-details">
        <i class='bx bx-user-circle'></i>
        <span class="admin-name"><?php echo $_SESSION['fullname']; ?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>