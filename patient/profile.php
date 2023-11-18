<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Profile</title>
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
                        include("sidenave.php");

                        //vid 15 8:12
                    ?>
                    <!-- Add a change in ../patient/index file at 4:30 -->
                    <!-- The tag doesnt exist in the current repo, maybe in vid 14 -->
                </div>
                <div class="col-md-10">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-5">
                                <?php
                                    //vid 15 11:15

                                    //Delete before push merge
                                    $row['profile'] = "patient.jpg";
                                    $row['firstname'] = "patient.jpg";
                                    $row['surname'] = "patient.jpg";
                                    $row['username'] = "patient.jpg";
                                    $row['email'] = "patient.jpg";
                                    $row['phone'] = "patient.jpg";
                                    $row['gender'] = "patient.jpg";
                                    $row['country'] = "patient.jpg";
                                    //
                                ?>

                                <h4>My Profile</h4>
                                <form method="post" enctype="multipart/form-data">
                                    <?php
                                        echo "<img src='img/".$row['profile']."' class='col-md-12' style='height: 300px;'>";
                                    ?>

                                    <input type="file" name="img" class="form-control my-2">
                                    <input type="submit" name="upload" class="btn btn-info" value="Update Profile">
                                </form>

                                <table class="table table-bordered">
                                    <tr>
                                        <th colspan="2" class="text-center">My Details</th>
                                    </tr>
                                    <tr>
                                        <td>Firstname</td>
                                        <td><?php echo $row['firstname']?></td>
                                    </tr>
                                    <tr>
                                        <td>Surname</td>
                                        <td><?php echo $row['surname']?></td>
                                    </tr>
                                    <tr>
                                        <td>Username</td>
                                        <td><?php echo $row['username']?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><?php echo $row['email']?></td>
                                    </tr>
                                    <tr>
                                        <td>Phone Number</td>
                                        <td><?php echo $row['phone']?></td>
                                    </tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td><?php echo $row['gender']?></td>
                                    </tr>
                                    <tr>
                                        <td>Country</td>
                                        <td><?php echo $row['country']?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>