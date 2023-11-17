<!-- Database setup at 30:10 in vid 13-->
<?php
//timestamp: 41:50 vid 13
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Login Page</title>
</head>
<body style="background-image: url(img/pxfuel.jpg);background-size: cover; background-repeat:no-repeat;">
<?php
    include("./include/header.php");
?>

<div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="text-center">Patient Login</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/patient.png" class="img-fluid rounded mx-auto d-block" width="100"
                            alt="Patient Logo">
                        <form method="post" class="mt-4">
                            <div class="form-group">
                                <label for="uname">Username</label>
                                <input type="text" id="uname" name="uname" class="form-control" autocomplete="off"
                                    placeholder="Enter Username" value="">
                            </div><br>
                            <div class="form-group">
                                <label for="pass">Password</label>
                                <input type="password" id="pass" name="pass" class="form-control"
                                    placeholder="Enter Password" value="">
                            </div><br>
                            <input type="submit" name="login" class="btn btn-primary btn-block" value="Login">
                            <br><br>
                            <p>I don't have an account<a href="./account.php"> Apply Here</a></p>
                        </form>
                    </div>
                    <div class="col-md-3"></div>

                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    </div>

</body>
</html>