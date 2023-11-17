<!-- Database setup at 30:10 in vid 13-->
<?php

include("./include/connection.php");

if (isset($_POST["create"])) {
    $fname = $_POST["fname"];
    $sname = $_POST["sname"];
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];
    $country = $_POST["country"];
    $password = $_POST["pass"];
    $con_password = $_POST["con_pass"];

    $error = array();

    if (empty($fname)) {
        $error['ac'] = "Enter Firstname";
    } else if (empty($sname)) {
        $error["ac"] = "Enter Surname";
    } else if (empty($uname)) {
        $error["ac"] = "Enter Username";
    } else if (empty($email)) {
        $error["ac"] = "Enter Email";
    } else if ($gender == "") {
        $error["ac"] = "Select Gender";
    } else if (empty($phone)) {
        $error["ac"] = "Enter Phone Number";
    } else if ($country == "") {
        $error["ac"] = "Select Country";
    } else if (empty($password)) {
        $error["ac"] = "Enter Password";
    } else if ($con_password != $password) {
        $error["ac"] = "Confirm Password doesn't match";
    }

    if (count($error) == 0) {

        $query = "INSERT INTO patient(firstname,surname,username,email,phone,gender,country,password,date_reg,profile) VALUES('$fname','$sname','$uname','$email','$phone','$gender','$country','$password',NOW(),'patient.jpeg')";

        $res = mysqli_query($connect, $query);

        if ($res) {
            echo "<script>alert('You have Successfully SignUp')</script>";

            header("Location: ./patientlogin.php");
        } else {
            echo "<script>alert('Failed to SignUp')</script>";

        }
    }
}

if (isset($error["ac"])) {
    $s = $error["ac"];

    $show = "<h5 class='text-center alet alert-danger'>$s</h5>";
} else {
    $show = "";
}
//timestamp: 22:35 in vid 13
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
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
                        <h4 class="text-center">Create Account</h4>
                    </div>
                    <div>
                        <div class="card-body">
                            <img src="img/patient.png" class="img-fluid rounded mx-auto d-block" width="100"
                                alt="Patient Logo">
                            <form method="post" class="mt-4">
                                <div>
                                    <?php
                                    echo $show;
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label>Firstname</label>
                                    <input type="text" name="fname" class="form-control" autocomplete="off"
                                        placeholder="Enter Firstname" value="">
                                </div>
                                <div class="form-group">
                                    <label>Surname</label>
                                    <input type="text" name="sname" class="form-control" autocomplete="off"
                                        placeholder="Enter Surname" value="">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="uname" class="form-control" autocomplete="off"
                                        placeholder="Enter Username" value="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" autocomplete="off"
                                        placeholder="Enter Email Address" value="">
                                </div>
                                <div class="form-group">
                                    <label>Select Gender</label>
                                    <select name="gender" class="form-control">
                                        <option value="" selected disabled>--Select Gender--</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="number" name="phone" class="form-control" autocomplete="off"
                                        placeholder="Enter Phone Number" value="">
                                </div>
                                <div class="form-group">
                                    <label>Select Country</label>
                                    <select name="country" class="form-control">
                                        <option value="" selected disabled>--Select Country--</option>
                                        <option value="india">India</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="pass" class="form-content" autocomplete="off"
                                        placeholder="Enter Password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" name="con_pass" class="form-content" autocomplete="off"
                                        placeholder="Enter Confirm Password">
                                </div>
                                <input type="submit" name="create" class="btn btn-primary btn-block" value="Create Account">
                                <p><br>I already have an account <a href="./patientlogin.php">Click Here</a></p>
                            </form>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    </div>
</body>
</html>