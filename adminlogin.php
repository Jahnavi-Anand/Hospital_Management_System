<!-- PHP-14:39 Admin Login 3 -->

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login Page</title>
</head>
<body style="background-image:url(img/pxfuel.jpg);">

    <!-- PHP Admin login 03 Stamp- 1:24 -->

    <div style="margin-top:60px;"></div>
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 jumbotron">
                    <img src="img/admin.png" class="col-md-5">
                    <form method="post" class="my-2">

                        <div class="alert alert-danger">
                            <!-- PHP Admin Login 3 25:50 -->
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" class="form-control">
                        </div>

                        <input type="submit" name="login" class="btn btn-success">

                    </form>
                </div>
                <div class="col-md-3"></div>    
            </div>
        </div>
    </div>
</body>
</html>