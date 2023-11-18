<?php
session_start();

if (!isset($_SESSION["patient"]) && $_SESSION["patient"] == false) {
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
    ?>

    <div class="container-fliud">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margin-left: -30px;">
                    <?php
                    include("./sidenav.php");
                    ?>
                </div>
                <div class="col-md-10">

                    <div class="container-fluid">
                        <h5>
                            Patient Dashboard
                        </h5>
                        <div class="col-md-12">
                            <div class="row">
                                <div classes="col-md-3 my-2 bg-info" style="height: 150px;">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="text-white my-4">
                                                    My Profile
                                                </h5>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>