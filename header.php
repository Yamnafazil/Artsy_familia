<!-- this code is header navigation bar in website -->
<div class="navbar navbar-inverse navbar-fixed-top" style="background-color:#FF0066;">
    <div class="container">
        <!--To add menu option when screen width is reduced-->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            
            <img src="img/logo.jpg" alt=""     Style="margin-top: 2%; float:left; ">
            <a class="navbar-brand" href="index.php" style="color:white; margin-left:2px;">Artsy Familia</a>
            
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right" style="color:white;">
                <!--If user is logged in, then header will contain these-->
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "products.php" style="color:white;"><span class = "glyphicon glyphicon-home"></span> Home</a></li>
                    <li ><a href = "cart.php" style="color:white;"><span class = "glyphicon glyphicon-shopping-cart" ></span> Cart </a></li>
                    <li><a href = "settings.php" style="color:white;"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href = "orderhistory.php" style="color:white;"><span class = "glyphicon glyphicon-file"></span> Order History</a></li>
                    <li><a href = "logout_script.php" style="color:white;"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                     
                    <?php
                } else {
                    ?>
                    <li><a href="signup.php" style="color:white;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php" style="color:white;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="aboutus.php" style="color:white;"><span class="glyphicon glyphicon-tasks"></span> About us</a></li>
                    <li><a href="contact.php" style="color:white;"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>
                        <?php
                    }
                    ?>  
            </ul>
            
        </div>
    </div>
</div>