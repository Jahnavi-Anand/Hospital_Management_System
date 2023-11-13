<?php 
//timestamp: 1:00:55 in vid 8
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!--<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <title>Doctor Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-image: url(img/pxfuel.jpg);background-size: cover; background-repeat:no-repeat;">

    <div class="container-fluid">
        <div class="row">
        <div class="col-md-3"></div>
                <div class="col-md-6 mt-5">
                    <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="text-center">Doctors Login</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/doctor.png" class="img-fluid rounded mx-auto d-block" width="100" alt="Doctor Logo">
                        <form method="=post" class="mt-4">
                            <div class="form-group">
                                <label for="uname">Username</label>
                                <input type="text" id="uname" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label for="pass">Password</label>
                                <input type="password" id="pass" name="pass" class="form-control" placeholder="Enter Password">
                            </div>
                            <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                            <br>
                            <p>I don't have an account<a href="apply.php"> Apply Here</a></p>
                        </form>
                    </div>
                    <div class="col-md-3"></div>

                </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
