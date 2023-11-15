<?php 

include("./include/connection.php");

if (isset($_POST["login"])) {

    $uname = $_POST["uname"];
    $password = $_POST["pass"];

    $error = array();

    // $q= "SELECT * FROM doctors WHERE username='$uname' AND password='$password'";
    // $qq=mysqli_query($connect, $q);

    // $row = mysqli_fetch_array($qq);

    if(empty($uname)){
        $error['login'] = "Enter Username";
    }else if (empty($password)){
        $error["login"] = "Enter Password";
    }
    // else if($row['status'] == "Pending"){
    //     $error["login"] = "Please Wait for the Admin to Confirm";
    // }else if($row["status"] == "Rejected"){
    //     $error["login"] = "Your Application has been Rejected";
    // }

    if(count($error) == 0){

        $query = "SELECT * FROM doctors WHERE username='$uname' AND password='$password'";

        $res= mysqli_query($connect, $query);

        $q= "SELECT * FROM doctors WHERE username='$uname' AND password='$password'";
        $qq=mysqli_query($connect, $q);

        $row = mysqli_fetch_array($qq);

        // $err = array();

        // if(count($err) == 0){
        if(mysqli_num_rows($res)){


            if($row['status'] == "Pending"){
                $error["login"] = "Please Wait for the Admin to Confirm";
            }else if($row["status"] == "Rejected"){
                $error["login"] = "Your Application has been Rejected";
            }


            if(count($error) == 0){

            echo "<script> alert('Done')</script>";
            $_SESSION["doctors"] = "$uname";
            // header("Location: ");

        }
        
    }
    else{
        echo "<script> alert('Invalid Username/Password')</script>";
    }
    }
}

if(isset($error['login'])){
    $l = $error['login'];

    $show = "<h5 class= 'text-center alert alert-danger'>$l</h5>";
}else{
    $show = "";
}
//timestamp: 1:00:55 in vid 8
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-image: url(img/pxfuel.jpg);background-size: cover; background-repeat:no-repeat;">

    <div class="container-fluid">
        <div class="row">
        <div class="col-md-3"></div>
                <div class="col-md-6 mt-5">
                    <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="text-center">Doctors Login</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/doctor.png" class="img-fluid rounded mx-auto d-block" width="100" alt="Doctor Logo">
                        <form method="post" class="mt-4">
                            <div>
                                <?php 
                                echo $show;
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="uname">Username</label>
                                <input type="text" id="uname" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username" value="<?php if(isset($_POST['uname'])) echo $_POST['uname']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="pass">Password</label>
                                <input type="password" id="pass" name="pass" class="form-control" placeholder="Enter Password" value="<?php if(isset($_POST['pass'])) echo $_POST['pass']; ?>">
                            </div>
                            <input type="submit" name="login" class="btn btn-primary btn-block" value="Login">
                            <br>
                            <p>I don't have an account<a href="./apply.php"> Apply Here</a></p>
                        </form>
                    </div>
                    <div class="col-md-3"></div>

                </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
