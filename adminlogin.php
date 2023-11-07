<?php
session_start();    

include("include/connection.php");

if (isset($_POST["login"])) {
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    $error = array();

    if (empty($username)) {
        $error['admin'] = 'Enter Username';
    } elseif (empty($password)) {
        $error['admin'] = 'Enter Password';
    }

    if (count($error) == 0) {
        $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $result = mysqli_query($connect, $query);

        if (mysqli_num_rows($result) == 1) {
            echo "<script>alert('You have Login as an Admin')</script>";
            $_SESSION['admin'] = $username;
            header('Location:admin/index.php');
            exit();
        } else {
            echo "<script>alert('Invalid Username or Password')</script>";
        }
    }
}



?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background-image: url('img/pxfuel.jpg'); background-size: cover;">

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="text-center">Admin Login</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/admin.png" class="img-fluid rounded mx-auto d-block" width="100" alt="Admin Logo">
                        <form method="post" class="mt-4">
                            <div>
                            <?php
                            if (isset($error['admin'])) {
                                $sh = $error['admin'];
                                $show = '<h4 class="alert alert-danger">'.$sh.'</h4>';

                            } else {
                                $show = "";
                            }

                            echo $show;
                            ?>
                            </div>
                            <div class="form-group">

                                <label for="uname">Username</label>
                                <input type="text" id="uname" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label for="pass">Password</label>
                                <input type="password" id="pass" name="pass" class="form-control">
                            </div>
                            <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>

</html>

