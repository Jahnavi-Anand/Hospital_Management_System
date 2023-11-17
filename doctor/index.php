 <?php
session_start();
if (!isset($_SESSION["doctor"]) && $_SESSION["doctor"] == false) {
    header("Location:../doctorlogin.php");
    exit();
}
//php part 48:18
?>

<!DOCTYPE html>

<html>

<head>

    <title>Doctor's Dashboard</title>

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
                    //<!--4:48 php part (video 11)-->
                    ?>
                </div>
                <div class="col-md-10">

                    <div class="container-fluid">
                        <h5>
                           Doctor's Dashboard 
                        </h5>
                        <div class="col-md-12">
                            <div class="row">
                                <div classes="col-md-3 my-2 bg-info" style="height: 150px; background-color:cyan">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="text-white my-4">
                                                    My Profile
                                                </h5>

                                            </div>
                                            <div class="col-md-4">
                                                <a href="./profile.php"><i class="fa fa-user-circle fa-3x my-4"
                                                style="color:white;"></i></a>

                                            </div>

                                        </div>

                                    </div>  

                                </div>


                                <div classes="col-md-3 my-2 bg-waring mx-2" style="height: 150px; background-color:red">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                            <h5 class="text-white ">
                                                    0
                                                </h5>
                                            <h5 class="text-white my-2 " style="font-size:30px;">
                                                    
                                                </h5>
                                                <h5 class="text-white ">
                                                    Patient
                                                </h5>
                                                <h5 class="text-white ">
                                                    My Profile
                                                </h5>

                                            </div>
                                            <div class="col-md-4">
                                                <a href="#"><i class="fa fa-procedures fa-3x my-4"
                                                style="color:white;">

                                                </i></a>

                                            </div>

                                        </div>

                                    </div>  

                                </div>

                                <div classes="col-md-3 my-2 bg-success mx-2" style="height: 150px; background-color:green">
                                    <div class="col-md-12">
                                        <div class="row">
                                        <div class="col-md-8">
                                            <h5 class="text-white ">
                                                    0
                                                </h5>
                                            <h5 class="text-white my-2 " style="font-size:30px;">
                                                    
                                                </h5>
                                                <h5 class="text-white ">
                                                    Total
                                                </h5>
                                                <h5 class="text-white ">
                                                    Appointment
                                                </h5>

                                            </div>
                                            <div class="col-md-4">
                                                <a href="#"><i class="fa fa-calender fa-3x my-4"
                                                style="color:white;">

                                                </i></a>

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