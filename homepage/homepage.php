<?php
    require_once '../includes/header.php';
?>
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
                </ul> 
            </nav>
                <div class="container">
                    <a href="#" class="button" id="button">Login</a>
                </div>
        </header>

        <form action="login.php" method="post"> 
            <div class="popup">
                <div class="popup-container">
                    <img src="../images/close-icon-29.png" alt="close" class="close">
                    <div class="color_logo">
                        <img src="../images/Spy_×_Family_logo.png" alt="user" class="logopop">
                    </div>
                    
                    <br /><br />
                    <label>Username</label>
                    <input type="text" placeholder="Username">
                    <label>Password</label>
                    <input type="password" placeholder="Password">
                    <a href="#" class="button_create" id="button_create">Create Account</a> 
                    <button type="submit" class="button">Login</button>
                </div>
            </div>
        </form>
        
        <script>
            document.getElementById("button").addEventListener("click", function(){
                document.querySelector(".popup").style.display="flex";
            })
            document.querySelector(".close").addEventListener("click", function(){
                document.querySelector(".popup").style.display="none";
            })
        </script>

        <form action="signup.php" method="post"> 
            <div class="popup_signup">
                <div class="popup-container-signup">
                    <img src="../images/close-icon-29.png" alt="close" class="close-signup">
                    <div class="color_logo">
                        <img src="../images/Spy_×_Family_logo.png" alt="user" class="logopop">
                    </div>
                    <br />
                    <label>Username</label>
                    <input type="text" placeholder="Username">
                    <label>First Name</label>
                    <input type="text" placeholder="First name">
                    <label>Last Name</label>
                    <input type="text" placeholder="Last name">
                    <label>Password</label>
                    <input type="password" placeholder="Password">
                    <button type="submit" class="button_create">Create Account</button>
                </div>
            </div>
        </form>

        <script>
            document.getElementById("button_create").addEventListener("click", function(){
                document.querySelector(".popup_signup").style.display="flex";
            })
            document.querySelector(".close-signup").addEventListener("click", function(){
                document.querySelector(".popup_signup").style.display="none";
            })
        </script>





        
        
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