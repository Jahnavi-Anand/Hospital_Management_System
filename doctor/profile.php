<?php
// <!--1:22 php part (video 12)-->
?>
<!DOCTYPE html>

<html>

<head>

<title>Doctor's Profile</title>

</head>

<body>
    <?php
    include("../include/header.php");
    ?>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margin-left: -30px;">
                    <?php
                    include("sidenav.php");
                    // include("../include/connection.php");
                    ?>
                </div>
                <div class="col-md-10">

                    <!--3:10 php -->
                    <div class="container-fluid">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">

                                    <!--11:40 php part (video 12)-->
                                      <!-- 25:19 php part (video 12)-->
                                    <form method="post" enctype="multipart/form-data">

                                        <!--// 15:50 php part (video 12)-->
                                        <!--echo "<img src='img/" . $row['docto.jpg'] . "' style='height: 250px;'>";-->
                                        <!-- 17:44 php part (video 12)-->
                                          
                                        <input type="file" name="img" class="form-control my-1">
                                        <input type="submit" name="upload" class="
                                        btn btn-success" style="background-color: green;color:white;"
                                         value ="Update profile">
                                    </form>
                                    <div class="my-3">
                                       <table class="table table-bordered">
                                            <tr>
                                                 <th colspan="2" class="text-cenetr">Details</th>
                                            </tr>

                                            <tr>
                                                <td>Firstname</td>
                                                <td><?php echo $row['Firstname']; ?></td>
                                                <!--php part 21:13 (video12)-->

                                            </tr>
                                            <tr>
                                                <td>Surname</td>
                                                <td><?php echo $row[' surname']; ?></td>
                                                

                                            </tr>
                                            <tr>
                                                <td>Username</td>
                                                <td><?php echo $row['username']; ?></td>
                                            

                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td><?php echo $row['email']; ?></td>
                                                

                                            </tr>
                                            <tr>
                                                <td>Phone No.</td>
                                                <td><?php echo $row['phone']; ?></td>
                                                

                                            </tr>
                                            <tr>
                                                <td>Gender</td>
                                                <td><?php echo $row['gender']; ?></td>
                                                

                                            </tr>
                                            <tr>
                                                <td>Country</td>
                                                <td><?php echo $row['country']; ?></td>
                                                

                                            </tr>
                                            <tr>
                                                <td>Salary</td>
                                                <td><?php echo   $row['salary']; ?></td>
                                                <!--php part 24:08 (video12)-->

                                            </tr>


                                            
                                            
                                              





                                       </table> 

                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <h5 class="text-center my-2">Change username

                                    </h5>
                                    <!--php part 29:12 (video12)-->
                                    <form method="post">
                                        <label>
                                            Change username
                                        </label>
                                        <input type="text" name="uname" class="form-control" autocomplete="off"
                                            placeholder="Enter username">
                                        <br>
                                        <input type="submit" name="change_uname" class=" btn btn-success"
                                            style="background-color: green; color:white;" value="Change username">

                                    </form>
                                    <br><br>
                                    <h5 class="text-center my-2">Change Pasword

                                    </h5>
                                    <!--php part 31:37 (video11)-->
                                    <form method="post">
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <input type="password" name="old_pass" class="form-control"
                                                autocomplete="off" placeholder="Enter Old Pawword">

                                        </div>
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" name="new_pass" class="form-control"
                                                autocomplete="off" placeholder="Enter New Pawword">

                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" name="con_pass" class="form-control"
                                                autocomplete="off" placeholder="Enter Confirm Pawword">

                                        </div>
                                        <input type="submit" name="change_pass" class="
                                        btn btn-info" style="background-color: green; color: white;"
                                            value="Change Password">


                                    </form>

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
