<?php
include("include/header.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>HMS Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body
    style="background-image: url(img/pxfuel.jpg); background-size: cover; background-repeat: no-repeat; opacity: 0.9;">

    <div class="container" style="margin-top: 150px;">
        <div class="row justify-content-center">
            <div class="col-md-3 mb-4 mx-2 shadow"
                style="background-color: white; padding: 20px; border-radius: 10px; text-align: center;">
                <img src="img/info.png" style="width: 100%; height: 190px;">
                <h5 class="text-center"><br>Click on the button for more information</h5>
                <a href="#" class="d-flex justify-content-center">
                    <button class="btn btn-success my-3" style="width: 80%;">More Information</button>
                </a>
            </div>

            <div class="col-md-1"></div>

            <div class="col-md-3 mb-4 mx-2 shadow"
                style="background-color: white; padding: 20px; border-radius: 10px; text-align: center;">
                <img src="img/patient.jpeg" style="width: 100%;">
                <h5 class="text-center"><br>Create Account so that we can take good care of YOU.</h5>
                <a href="account.php" class="d-flex justify-content-center">
                    <button class="btn btn-success my-3" style="width: 80%;">Create Account</button>
                </a>
            </div>

            <div class="col-md-1"></div>

            <div class="col-md-3 mb-4 mx-2 shadow"
                style="background-color: white; padding: 20px; border-radius: 10px; text-align: center;">
                <img src="img/doctor.jpeg" style="width: 100%;">
                <h5 class="text-center"><br><br>Employment Applications OPEN</h5>
                <a href="./apply.php" class="d-flex justify-content-center">
                    <button class="btn btn-success my-3" style="width: 80%;">Apply Now</button>
                </a>
            </div>
        </div>
    </div>

</body>

</html>