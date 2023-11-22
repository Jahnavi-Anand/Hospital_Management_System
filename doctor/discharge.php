<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Patient Appointment</title>
</head>
<body>
    <?php
        include("../include/header.php");
        include("../include/connection.php");
    ?>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margin-left: -30px;">
                    <?php
                        include("sidenav.php");
                    ?>
                </div>
                <!-- vid17 39:25 check line 105 to 108 in file index.php -->
                <div class="col-md-10">
                    <h5 class="text-center my-2">Total Appointment</h5>

                    <?php
                        //check below php vid17 44:40

                        if(isset($_GET['id'])){
                            $id = $_GET['id'];
                            $query = "SELECT * FROM appointment WHERE id='$id'";
                            $res = mysqli_query($connect,$query);
                            $row = mysqli_fetch_array($res);
                        }

                    ?>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table table-bordered">
                                    <tr>
                                        <td colspan="2" class="text-center">Appointment Details</td>
                                    </tr>
                                    <tr>
                                        <td>Firstname</td>
                                        <td><?php echo $row['firstname']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Surname</td>
                                        <td><?php echo $row['surname']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td><?php echo $row['gender']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Phone Number</td>
                                        <td><?php echo $row['phone']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Appointment Date</td>
                                        <td><?php echo $row['appointment_date']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Symptoms</td>
                                        <td><?php echo $row['symptoms']; ?></td>
                                    </tr>

                                </table>
                            </div>
                            <div class="col-md-6">
                                <h5 class="text-center my-1">Invoice</h5>
                                <?php
                                    //vid17 54:26
                                ?>
                                <form method="post">
                                    <label>Fee</label>
                                    <input type="number" name="fee" class="form-control" autocomplete="off" placeholder="Enter Patient Fee">

                                    <label>Description</label>
                                    <input type="text" name="des" class="form-control" autocomplete="off" placeholder="Enter Description">
                                    <input type="submit" name="send" class="btn btn-info my-2" value="Send">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>