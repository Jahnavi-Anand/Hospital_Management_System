<?php

include("include/connection.php");

if (isset($_POST["apply"])) {

    $firstname = $_POST["fname"];
    $surname = $_POST["sname"];
    $username = $_POST["uname"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $country = $_POST["country"];
    $password = $_POST["pass"];
    $confirm_password = $_POST["con_pass"];

    $error = array();

    if (empty($firstname)) {
        $error['apply'] = "Enter Firstname";
    } else if (empty($surname)) {
        $error["apply"] = "Enter Surname";
    } else if (empty($username)) {
        $error["apply"] = "Enter Username";
    } else if (empty($email)) {
        $error["apply"] = "Enter Email";
    } else if ($gender == "") {
        $error["apply"] = "Select Gender";
    } else if (empty($phone)) {
        $error["apply"] = "Enter Phone Number";
    } else if (empty($country)) {
        $error["apply"] = "Select Country";
    } else if (empty($password)) {
        $error["apply"] = "Enter Password";
    } else if ($confirm_password != $password) {
        $error["apply"] = "Confirm Password";
    }

    if (count($error) == 0) {

        $query = "INSERT INTO doctors(firstname,surname,username,email,gender,phone,country,password,salary,data_reg,status,profile) VALUES('$firstname','$surname','$username','$email','$gender','$phone','$country','$password','0',NOW(),'Pending','doctor.jpeg')";

        $result = mysqli_query($connect, $query);

        if ($result) {
            echo "<script>alert('You have Successfully Applied')</script>";

            header("Location: ./doctorlogin.php");
        } else {
            echo "<script>alert('Failed to Apply')</script>";

        }
    }
}

if (isset($error["apply"])) {
    $s = $error["apply"];

    $show = "<h5 class='text-center alet alert-danger'>$s</h5>";
} else {
    $show = "";
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Here</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<body style="background-image: url(img/pxfuel.jpg); background-size: cover; background-repeat: no-repeat;">
    <?php
    include("./include/header.php");
    ?>
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
                            <img src="img/doctor.png" class="img-fluid rounded mx-auto d-block" width="100"
                                alt="Doctor Logo">
                            <form method="post" class="mt-4">
                                <div>
                                    <?php
                                    echo $show;
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label>Firstname</label>
                                    <input type="text" name="fname" class="form-control" autocomplete="off"
                                        placeholder="Enter Firstname" value="<?php if (isset($_POST['fname']))
                                            echo $_POST['fname']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Surname</label>
                                    <input type="text" name="sname" class="form-control" autocomplete="off"
                                        placeholder="Enter Surname" value="<?php if (isset($_POST['sname']))
                                            echo $_POST['sname']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="uname" class="form-control" autocomplete="off"
                                        placeholder="Enter Username" value="<?php if (isset($_POST['uname']))
                                            echo $_POST['uname']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" autocomplete="off"
                                        placeholder="Enter Email Address" value="<?php if (isset($_POST['email']))
                                            echo $_POST['email']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Select Gender</label>
                                    <select name="gender" class="form-control">
                                        <option value="" selected disabled>--Select Gender--</option>
                                        <option value="male">Male</option>
                                        <option value="male">Female</option>
                                        <option value="male">Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="number" name="phone" class="form-control" autocomplete="off"
                                        placeholder="Enter Phone Number" value="<?php if (isset($_POST['phone']))
                                            echo $_POST['phone']; ?>">
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
                                <input type="submit" name="apply" class="btn btn-primary btn-block" value="Apply">
                                <p><br>I already have an account <a href="./doctorlogin.php">Click Here</a></p>
                            </form>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
