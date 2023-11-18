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
                                ?>

                                <h4>My Profile</h4>
                                <form method="post" enctype="multipart/form-data">
                                    <?php
                                        echo "<img src='img/".$row['profile']."' class='col-md-12' style='height: 300px;'>";
                                    ?>

                                    <input type="file" name="img" class="form-control my-2">
                                    <input type="submit" name="upload" class="btn btn-info" value="Update Profile">
                                </form>

                                <table class="table table-bordered my-2">
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
                            <div class="col-md-6">
                                <h5 class="text-center">Change Username</h5>
                                <?php
                                    //vid 15 20:57
                                ?>
                                <form method="post">
                                    <label>Enter Username</label>
                                    <input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
                                    <input type="submit" name="update" class="btn btn-info my-2" value="Update Username">
                                </form>

                                <?php
                                    //vid 15 26:05
                                ?>
                                <h5>Change Password</h5>
                                <form method="post">
                                    <label>Old Password</label>
                                    <input type="password" name="old_pass" class="form-control" autocomplete="off" placeholder="Enter Old Password">
                                    <label>New Password</label>
                                    <input type="password" name="new_pass" class="form-control" autocomplete="off" placeholder="Enter New Password">
                                    <label>Confirm Password</label>
                                    <input type="password" name="con_pass" class="form-control" autocomplete="off" placeholder="Confirm Password">
                                    <input type="submit" name="change" class="btn btn-info my-2" value="Change Password">
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