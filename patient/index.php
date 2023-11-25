<?php
session_start();

if (!isset($_SESSION["patient"]) || $_SESSION["patient"] == false) {
    header("Location:../patientlogin.php");
}
?>

<!DOCTYPE html>

<html>

<head>

    <title>Patient Dashboard</title>

</head>

<body>
    <?php
    include("../include/header.php");
    include("../include/connection.php");
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2" style="margin-left: -30px;">
                <?php
                include("./sidenav.php");
                ?>
            </div>
            <div class="col-md-10">
                <div class="container-fluid">
                    <br>
                    <h5>Patient Dashboard</h5>
                    <br>
                    <div class="col-md-12 my-1">
                        <div class="row">
                            <div class="col-md-3 bg-info mx-2" style="height: 150px;">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 class="text-white my-4">My Profile</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="./profile.php">
                                                <i class="fa fa-user-circle fa-3x my-4" style="color: white;"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 bg-warning mx-2" style="height: 150px;">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 class="text-white my-4">Book Appointment</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="appointment.php">
                                                <i class="fa fa-calendar fa-3x my-4" style="color: white;"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 bg-success mx-2" style="height: 150px;">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <?php
                                            $pat = $_SESSION['patient'];

                                            $query = "SELECT * FROM patient WHERE username='$pat'";
                                            $res = mysqli_query($connect, $query);
                        
                                            $row = mysqli_fetch_array($res);
                                            $fname = $row['firstname'];

                                            $app = mysqli_query($connect, "SELECT * FROM income WHERE patient='$fname'");
                                            $appoint = mysqli_num_rows($app);
                                            ?>
                                            <h5 class="text-white my-2 " style="font-size:30px;">
                                                <?php
                                                echo $appoint; 
                                                ?>
                                            </h5>
                                            <h5 class="text-white my-4">My Invoice</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="./invoice.php">
                                                <i class="fas fa-file-invoice-rupee fa-3x my-4"
                                                    style="color: white;">&#8377;</i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php

                    if (isset($_POST["send"])) {

                        $title = $_POST['title'];
                        $message = $_POST['message'];

                        if (empty($title)) {
                            echo "<script>alert('Title empty')</script>";
                        } else if (empty($message)) {
                            echo "<script>alert('msg empty')</script>";
                        } else {

                            $user = $_SESSION['patient'];

                            $query = "INSERT INTO report(title, message, username, data_send) VALUES ('$title', '$message', '$user', NOW())";
                            $res = mysqli_query($connect, $query);

                            if ($res) {
                                echo "<script>alert('Report Submitted Successfully')</script>";
                            } else {
                                echo "<script>alert('Can't Submit')</script>";
                            }
                        }
                    }
                    
                    ?>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="card bg-info my-5">
                                    <div class="card-body">
                                        <h5 class="card-title text-center my-2">Send a Report</h5>
                                        <br>
                                        <form method="post">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" id="title" class="form-control"
                                                placeholder="Enter Report Title" required>
                                            <br>
                                            <label for="message">Message</label>
                                            <input type="text" name="message" id="message" class="form-control"
                                                placeholder="Enter Message" required>
                                            <br>

                                            <input type="submit" name="send" value="Send Report"
                                                class="btn btn-success my-2">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>


                </div>

            </div>

        </div>

    </div>

</body>

</html>