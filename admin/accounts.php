<?php 
  session_start();
  require_once '../includes/autochecker.php';
  require_once '../includes_admin/header.php';
  require_once '../includes_admin/sidebar.php';
  
    
?>
<div class="home-content">
        <div class="table-container">
            <div class="table-heading">
                <h3 class="table-title">Accounts</h3>
                <?php
                    if($_SESSION['user_type'] == 'admin'){ 
                ?>
                    <a href="../add/addacc.php" class="button">Add New Account</a>
                <?php
                    }
                ?>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Full Name of Account</th>
                        <th>Account Created</th>
                        <?php
                            if($_SESSION['user_type'] == 'admin'){ 
                        ?>
                            <th class="action">Action</th>
                        <?php
                            }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once '../classes/account.class.php';

                        $account = new Accounts();
                        //We will now fetch all the records in the array using loop
                        //use as a counter, not required but suggested for the table
                        $i = 1;
                        //loop for each record found in the array
                        foreach ($account->show() as $value){ //start of loop
                    ?>
                        <tr>
                            <!-- always use echo to output PHP values -->
                            <td><?php echo $i ?></td>
                            <td><?php echo $value['username'] ?></td>
                            <td><?php echo $value['lastname'] . ', ' . $value['firstname'] ?></td>
                            <td><?php echo $value['acc_created'] ?></td>
                            <?php
                                if($_SESSION['user_type'] == 'admin'){ 
                            ?>
                                <td>
                                    <div class="action">
                                        <a class="action-edit" href="#">Edit</a>
                                        <a href="../delete/deleteacc.php?id=<?php echo $value['id'] ?>" class="action-delete">Delete</a>
                                    </div>
                                </td>
                            <?php
                                }
                            ?>
                        </tr>
                    <?php
                        $i++;
                    //end of loop
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php
    require_once '../includes_admin/script.php'
  
  ?>