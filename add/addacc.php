<?php 
  session_start();
  require_once '../includes/autochecker.php';
  require_once '../includes_admin/header.php';
  require_once '../includes_admin/sidebar.php';
  require_once '../includes_admin/script.php';
  require_once '../classes/account.class.php';
  require_once '../tools/functions.php';
    

    if(isset($_POST['save'])){

        $account = new Accounts();
        //sanitize user inputs
        $account->firstname = htmlentities($_POST['firstname']);
        $account->lastname = htmlentities($_POST['lastname']);
        $account->type = htmlentities($_POST['type']);
        $account->username = $_POST['username'];
        $account->password = $_POST['password'];
    
        if($account->add()){  
            header('location: ../admin/accounts.php');
            }
        }
    
    
?>
<div class="home-content">
    <div class="table-container">
        <div class="table-heading form-size">
            <h3 class="table-title">Add New Account</h3>
            <a class="back" href="../admin/accounts.php"><i class='bx bx-caret-left'></i>Back</a>  
        </div>
        <div class="add-form-container">
        <div class="add-form-box">
            <form class="add-form" method="POST" action="addacc.php" >
                <label for="firstname">First name</label>
                <input type="text" id="firstname" name="firstname" required placeholder="Enter First name">
                <label for="lasttname">Last Name</label>
                <input type="text" id="lastname" name="lastname" required placeholder="Enter Last name" >
                <input type="hidden" id="type" name="type" value="user">
                <label for="username">User Name</label>
                <input type="text" id="username" name="username" required placeholder="Enter User name" >
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" class="button" value="create account" name="save" id="save" >Add Account</button>
            </form>
        </div> 

    </div>


    </div>

</div>
