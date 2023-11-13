<?php 
//timestamp: 1:00:55 in vid 8
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!--<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <title>Doctor Login Page</title>
</head>
<body style="background-image: url(img/pxfuel.jpg);background-size: cover; background-repeat:no-repeat;">
    <?php
    include("include/header.php");
    ?>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <div class="col-md-6 jumbotron my-3">
                        <h5 class="text-center my-2">Doctors Login</h5>
                        <form method="=post">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="pass" class="form-control" autocomplete="off">
                            </div>

                            <input type="submit" name="login" class="btn btn-success" value="Login">
                            <p>I don't have an account<a href="apply.php"> Apply Here</a></p>
                        </form>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>