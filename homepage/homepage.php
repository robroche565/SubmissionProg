<?php
    require_once '../includes/header.php';

    require_once '../classes/account.class.php';
    //we start session since we need to use session values
    session_start();
    //creating an array for list of users can login to the system

    if(isset($_POST['username']) && isset($_POST['password'])){
        //Sanitizing the inputs of the users. Mandatory to prevent injections!
        $users = new Accounts;
        $users->username = htmlentities($_POST['username']);
        $users->password = htmlentities($_POST['password']);
        $res = $users->validate();
        if($res){
            $_SESSION['logged-in'] = $res['username'];
            $_SESSION['fullname'] = $res['firstname'].' '.$res['lastname'];
            $_SESSION['user_type'] = $res['type'];
            if($res['type'] == 'admin'){
                header('location: ../admin/dashboard.php');
            }else{
                header('location: ../user/userpage.php');
            }
        }
        //set the error message if account is invalid
        $error = 'Invalid username/password. Try again.';
    }
    
    if(isset($_POST['save'])){

        $account = new Accounts();
        //sanitize user inputs
        $account->firstname = htmlentities($_POST['firstname']);
        $account->lastname = htmlentities($_POST['lastname']);
        $account->type = htmlentities($_POST['type']);
        $account->username = $_POST['username'];
        $account->password = $_POST['password'];
        if($account->add()){  
                //redirect user to faculty page after saving
            header('location: homepage.php');
        }
        
    }

    
    require_once '../includes/topnav.php';


?>
        

        
        <section id="section1">
            <div class="container_sec1">
                <h1>Welcome to </h1>
                <img class="left"src="../images/Spy_×_Family_logo.png">
                <h2>Cafe Restaurant</h2>
            </div>
            <div> 
                <img class="other" src="../images/069.jpg"> 
            </div>
             
        </section>  

        <section id="section2">
            <div class="services">
                <img src="../images/25g7d94guat81.png"> 
                <div class="service-text">
                    <h1>Service</h1>
                    <h5>What do we do here?</h5>
                    <p>Lorem ipsum dolor sit amet. A assumenda nesciunt eum quis enim qui dolorem 
                        sunt 33 quaerat minima ut accusantium laborum quo iure voluptatem. Qui sint 
                        reprehenderit qui suscipit voluptatem qui fugiat dolore. Hic voluptas neque
                        est voluptatibus quia qui dolorem eius nam modi possimus et necessitatibus 
                        ducimus non reiciendis voluptas. Sit earum tempore ut dolores nihil aut illum 
                        doloribus ea unde suscipit rem tempora sunt ut impedit ipsam.</p>
                </div> 
                
            </div>        
        </section>

        <div id="section3">
            <div class="title">
                <h2>Waiter/Waitress</h2>
            </div>
            <img src="../images/to be enhanced.png" style="width: 60%; display:block; margin-left:auto; margin-right:auto">
            <div class="box">
                <div class="card">
                    <h5>Loid Forger</h5>
                    <div class="pra">
                        <p>Lorem ipsum dolor sit amet. A assumenda nesciunt eum quis enim qui dolorem 
                        sunt 33 quaerat minima ut accusantium laborum quo iure voluptatem.</p>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="card">
                    <h5>Anya Forger</h5>
                    <div class="pra">
                        <p>Lorem ipsum dolor sit amet. A assumenda nesciunt eum quis enim qui dolorem 
                        sunt 33 quaerat minima ut accusantium laborum quo iure voluptatem.</p>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="card">
                    <h5>Yor Forger</h5>
                    <div class="pra">
                        <p>Lorem ipsum dolor sit amet. A assumenda nesciunt eum quis enim qui dolorem 
                        sunt 33 quaerat minima ut accusantium laborum quo iure voluptatem.</p>
                    </div>
                </div>
            </div>
            
        </div>

        <section id="section4">
            <div class="about-us">
                    
                    <div class="about-text">
                        <h1>About Us</h1>
                        <p>Lorem ipsum dolor sit amet. A assumenda nesciunt eum quis enim qui dolorem 
                            sunt 33 quaerat minima ut accusantium laborum quo iure voluptatem. Qui sint 
                            reprehenderit qui suscipit voluptatem qui fugiat dolore. Hic voluptas neque
                            est voluptatibus quia qui dolorem eius nam modi possimus et necessitatibus 
                            ducimus non reiciendis voluptas. Sit earum tempore ut dolores nihil aut illum 
                            doloribus ea unde suscipit rem tempora sunt ut impedit ipsam.</p>
                    </div> 
                    <img src="../images\BK-1.png" >  
                </div>
        </section>

        <footer>
            <img src="../images/Spy_×_Family_logo.png" style="width: 20%;">
            <p>For more inquiries contact us in the following social platform:</p>
            <div class="social">
                <a ><i class="fab fa-facebook-f"></i></a>
                <a ><i class="fab fa-instagram"></i></a>
                <a ><i class="fab fa-dribbble"></i></a>
            </div>
            <p class="end">CopyRight By Rob Villanueva and Eljen Augusto</p>

        </footer>
   
        
    </body>
</html>