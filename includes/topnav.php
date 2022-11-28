<div>
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

    <form action="homepage.php" method="post"> 
            <div class="popup">
                <div class="popup-container">
                    <img src="../images/close-icon-29.png" alt="close" class="close">
                    <div class="color_logo">
                        <img src="../images/Spy_×_Family_logo.png" alt="user" class="logopop">
                    </div>
                    
                    <br /><br />
                    <label>Username</label>
                    <input type="text" name="username"  id="username" placeholder="Username" required>
                    <label>Password</label>
                    <input type="password" name="password"  id="password" placeholder="Password" required>
                    <a href="#" class="button_create" id="button_create">Create Account</a>  
                    <button type="submit" class="button" name="login">Login</button>
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


        <form action="homepage.php" method="post" name="createform"> 
            <div class="popup_signup">
                <div class="popup-container-signup">
                    <img src="../images/close-icon-29.png" alt="close" class="close-signup">
                    <div class="color_logo">
                        <img src="../images/Spy_×_Family_logo.png" alt="user" class="logopop">
                    </div>
                    <br />
                    <label>First name</label>
                    <input type="text" name="firstname" placeholder="First name" required>
                    <label>Last Name</label>
                    <input type="text" name="lastname" placeholder="Last name" required>
                    <input type="hidden" id="type" name="type" value="user">
                    <label>User Name</label>
                    <input type="text" name="username" placeholder="Username" required>
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit" class="button_create" value="create account" name="save" id="save" onclick="openPopup()">Create Account</button>
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

</div>
