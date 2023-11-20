<?php
    session_start();
    if (!isset($_SESSION["patient"]) || $_SESSION["patient"] == false) {
        header("Location:../patientlogin.php");
    }
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
                        include("./sidenav.php");

                        $patient = $_SESSION['patient'];
                        $query = "SELECT * FROM patient WHERE username='$patient'";

                        $res = mysqli_query($connect, $query);

                        $row = mysqli_fetch_array($res);


                        //vid 15 8:12
                    ?>
                    <!-- Add a change in ../patient/index file at 4:30 -->
                    <!-- The tag doesnt exist in the current repo, maybe in vid 14 -->
                </div>
                <div class="col-md-10">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <?php

                                    if(isset($_POST["upload"])){

                                        $img = $_FILES['img']['name'];

                                        if(empty($img)){

                                        }else{
                                            $query = "UPDATE patient SET profile='$img' WHERE username='$patient'";

                                            $res = mysqli_query($connect, $query);

                                            if($res){
                                                move_uploaded_file($_FILES['img']['tmp_name'],"img/$img");
                                                header("Location:./profile.php");
                                                exit();
                                            }
                                        }
}
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
                                if(isset($_POST["uname_update"])){
                                    $uname = $_POST['uname'];

                                    if(empty($uname)){
                                        echo "<h5 class= 'text-center alert alert-danger'>Enter Username</h5>";
                                    }else{
                                        $query = "UPDATE patient SET username='$uname' WHERE username='$patient'";

                                        $res = mysqli_query($connect, $query);  

                                        if($res){
                                            $_SESSION["patient"] = $uname;
                                            // header("Location:./profile.php");
                                        }
                                    }
                                }
                                    //vid 15 20:57
                                ?>
                                <form method="post">
                                    <label>Enter Username</label>
                                    <input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
                                    <input type="submit" name="uname_update" class="btn btn-info my-2" value="Update Username">
                                </form>

                                <?php
                                if(isset($_POST['change'])){
                                    $old = $_POST['old_pass'];
                                    $new = $_POST['new_pass'];

                                    $con = $_POST['con_pass'];

                                    $ol= "SELECT * FROM patient WHERE username='$patient'";
                                    $ols = mysqli_query($connect, $ol);
                                    $row = mysqli_fetch_array($ols);

                                    if(empty($new)){
                                        echo "<h5 class= 'text-center alert alert-danger'>Enter Password</h5>";
                                    }else if($old != $row['password']){
                                        echo "<h5 class= 'text-center alert alert-danger'>Old Password doesn't match</h5>";
                                    }elseif($con != $new){
                                        echo "<h5 class= 'text-center alert alert-danger'>Confirm Password doesn't match</h5>";
                                    }else{
                                        $query = "UPDATE patient SET password='$new' WHERE username='$patient'";

                                        mysqli_query($connect, $query);
                                        echo "<script>alert('password updated successfully');</script>";
                                        // header("Location:./profile.php");
                                    }
                                }
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