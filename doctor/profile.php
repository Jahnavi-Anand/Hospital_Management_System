<?php
session_start();
if (!isset($_SESSION["doctor"]) && $_SESSION["doctor"] == false) {
    header("Location:../doctorlogin.php");
    exit();
}
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
                    include("./sidenav.php");
                    include("../include/connection.php");
                    ?>
                </div>
                <div class="col-md-10">

                    <div class="container-fluid">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">

                                <?php
                                $doc = $_SESSION['doctor'];
                                $query = "SELECT * FROM doctors WHERE username='$doc'";

                                $res = mysqli_query($connect, $query);

                                $row = mysqli_fetch_array($res);

                                if(isset($_POST["upload"])){

                                    $img = $_FILES['img']['name'];

                                    if(empty($img)){

                                    }else{
                                        $query = "UPDATE doctors SET profile='$img' WHERE username='$doc'";

                                        $res = mysqli_query($connect, $query);

                                        if($res){
                                            move_uploaded_file($_FILES['img']['tmp_name'],"img/$img");
                                            header("Location:./profile.php");
                                            exit();
                                        }
                                    }
                                }
                                ?>

                                    <form method="post" enctype="multipart/form-data">

                                    <?php

                                        echo "<img src='img/". $row['profile']."' style='height: 250px;' class='col-md-12 my-3'>";
                                    ?>

                                          
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
                                                <td><?php echo $row['firstname']; ?></td>

                                            </tr>
                                            <tr>
                                                <td>Surname</td>
                                                <td><?php echo $row['surname']; ?></td>
                                                

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
                                                <td><?php echo  "Rs ".$row['salary'].""; ?></td>

                                            </tr>


                                            
                                            
                                              





                                       </table> 

                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <h5 class="text-center my-2">Change username

                                    </h5>

                                    <?php
                                    if(isset($_POST["change_uname"])){
                                        $uname = $_POST['uname'];

                                        if(empty($uname)){
                                            echo "<h5 class= 'text-center alert alert-danger'>Enter Username</h5>";
                                        }else{
                                            $query = "UPDATE doctors SET username='$uname' WHERE username='$doc'";

                                            $res = mysqli_query($connect, $query);  

                                            if($res){
                                                $_SESSION["doctor"] = $uname;
                                                header("Location:./profile.php");
                                            }
                                        }
                                    }
                                    ?>
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
                                    <h5 class="text-center my-2">Change Password

                                    </h5>

                                    <?php

                                    if(isset($_POST['change_pass'])){
                                        $old = $_POST['old_pass'];
                                        $new = $_POST['new_pass'];

                                        $con = $_POST['con_pass'];

                                        $ol= "SELECT * FROM doctors WHERE username='$doc'";
                                        $ols = mysqli_query($connect, $ol);
                                        $row = mysqli_fetch_array($ols);

                                        if(empty($new)){
                                            echo "<h5 class= 'text-center alert alert-danger'>Enter Password</h5>";
                                        }else if($old != $row['password']){
                                            echo "<h5 class= 'text-center alert alert-danger'>Old Password doesn't match</h5>";
                                        }elseif($con != $new){
                                            echo "<h5 class= 'text-center alert alert-danger'>Confirm Password doesn't match</h5>";
                                        }else{
                                            $query = "UPDATE doctors SET password='$new' WHERE username='$doc'";

                                            mysqli_query($connect, $query);
                                            header("Location:./profile.php");
                                        }
                                    }

                                    ?>
                                    <form method="post">
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <input type="password" name="old_pass" class="form-control"
                                                autocomplete="off" placeholder="Enter Old Password">

                                        </div>
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" name="new_pass" class="form-control"
                                                autocomplete="off" placeholder="Enter New Password">

                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" name="con_pass" class="form-control"
                                                autocomplete="off" placeholder="Enter Confirm Password">

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
