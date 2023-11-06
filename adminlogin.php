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
    <!-- Include Bootstrap CSS and JavaScript -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>

<body style="background-image:url(img/pxfuel.jpg);">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="jumbotron">
                    <img src="img/admin.png" class="img-fluid mb-3" alt="Admin Logo" width="30%">
                    <form method="post">

                        <div>
                            <?php
                            if (isset($error['admin'])) {
                                $sh = $error['admin'];
                                echo '<h4 class="alert alert-danger">' . $sh . '</h4>';
                            }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label for="uname" class="form-label">Username</label>
                            <input type="text" name="uname" id="uname" class="form-control" autocomplete="off"
                                placeholder="Enter Username">
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" name="pass" id="pass" class="form-control">
                        </div>

                        <input type="submit" name="login" class="btn btn-success" value="Login">

                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>
