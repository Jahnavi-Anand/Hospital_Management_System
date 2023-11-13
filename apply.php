<?php
//timestamp: 32:30 in vid 8
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <!--<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <title>Apply Here</title>
</head>
<body style="background-image: url(img/pxfuel.jpg); background-size: cover; background-repeat: no-repeat;">
    <?php
    include("include/header.php");
    ?>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 my-3 jumbotron">
                    <h5 class="text-center">Apply Here</h5>
                    <div>
                    <? php 
                    //imestamp: 43:55 in vid 8
                    ?>
                    </div>
                    <form method="post">
                        <div class="form-group">
                            <label>Firstname</label>
                            <input type="text" name="fname" class="form-control" autocomplete="off" placeholder="Enter Firstname">
                        </div>
                        <div class="form-group">
                            <label>Surname</label>
                            <input type="text" name="sname" class="form-control" autocomplete="off" placeholder="Enter Surname">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" autocomplete="off" placeholder="Enter Email Address">
                        </div>
                        <div class="form-group">
                            <label>Select Gender</label>
                            <select name="gender" class="form-control">
                                <option value="male">Male</option>
                                <option value="male">Female</option>
                                <option value="male">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Contact info</label>
                            <input type="number" name="phone" class="form-control" autocomplete="off" placeholder="Enter Contact Info">
                        </div>
                        <div class="form-group">
                            <label>Select Country</label>
                            <select name="country" class="form-control">
                                <option value="male">India</option>
                                <option value="male">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" class="form-content" autocomplete="off" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label>ConfirmPassword</label>
                            <input type="password" name="con_pass" class="form-content" autocomplete="off" placeholder="Enter Confirm Password">
                        </div>
                        <input type="submit" name="apply" value="Apply Now" class="btn btn-success">
                        <p>I already have an account <a href="doctorlogin.php">Click Here</a></p>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</body>
</html>