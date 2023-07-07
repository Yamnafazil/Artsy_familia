<?php
require("common.php");
// Redirects the user to products page if logged in.
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login | Artsy Familia</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    
    <body >
    <?php include 'header.php'; ?>  
        <div id="content">
           
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-3 col-md-4">
                        <div class="panel panel-dark" >
                            <div class="panel-heading">
                                <h4>LOGIN</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Login to make a purchase</i><p>
                                <form action="login_submit.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" autofocus="on" name="e-mail" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-light" style="background-color:#FF0066;color:white;">Login</button><br><br>
                                    <?php if(isset($_GET['error'])) echo $_GET['error']; ?>
                                </form><br/>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php"style=" color:#FF0066;">Register</a></p></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <?php include 'footer.php'; ?>
    </body>
    
</html>