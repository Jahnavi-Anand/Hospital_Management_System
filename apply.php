<?php
//timestamp: 32:30 in vid 8
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <!--<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <title>Apply Here</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-image: url(img/pxfuel.jpg); background-size: cover; background-repeat: no-repeat;">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mt-5">
                <div class="card">
                <div class="card-header bg-primary text-white">
                        <h4 class="text-center">Apply Here</h4>
                    </div>
                    <div>
                    <div class="card-body">
                        <img src="img/doctor.png" class="img-fluid rounded mx-auto d-block" width="100" alt="Doctor Logo">
                        <form method="post" class="mt-4">
                    <div>        
                    <?php 
                    //imestamp: 43:55 in vid 8
                    ?>
                    </div>
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
                        <button type="submit" name="login" class="btn btn-primary btn-block">Apply</button>
                        <p><br>I already have an account <a href="doctorlogin.php">Click Here</a></p>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</body>
</html>
