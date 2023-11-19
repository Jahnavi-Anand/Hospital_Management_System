<?php
session_start();

if (!isset($_SESSION["patient"]) || $_SESSION["patient"] == false) {
    header("Location:../patientlogin.php");
    exit();
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
                    <h5>Patient Dashboard</h5>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3 my-2 bg-info" style="height: 150px;">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 class="text-white my-4">My Profile</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#">
                                                <i class="fa fa-user-circle fa-3x my-4" style="color: white;"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 my-2 bg-info" style="height: 150px;">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 class="text-white my-4">Book Appointment</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#">
                                                <i class="fa fa-calendar fa-3x my-4" style="color: white;"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 my-2 bg-info" style="height: 150px;">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 class="text-white my-4">My Invoice</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#">
                                                <i class="fas fa-file-invoice-rupee fa-3x my-4" style="color: white;">&#8377;</i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    
                        // 11:58 Vid 14

                    ?>

    <div class="col-md-12">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card bg-info my-5">
                <div class="card-body">
                    <h5 class="card-title text-center my-2">Send a Report</h5>
                    <form method="post">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Enter Report Title" required>

                        <label for="message">Message</label>
                        <input type="text" name="message" id="message" class="form-control" placeholder="Enter Message" required>

                        <input type="submit" name="send" value="Send Report" class="btn btn-success my-2">
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
