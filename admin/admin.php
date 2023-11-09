<?php
session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin </title>
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
            include("../include/connection.php");
             ?>
        </div>
        <div class="col-md-10">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="text-center">All Admin</h5>


                        <?php

                            // kavya video 6 15:32

                         ?>      


                        <table class="table table-bordered">
                            <th>ID</th>
                            <th>Username</th>
                            <th style="width: 10%">Action</th>

                            <tr>
                                <td>1</td>
                                <td>Admin</td>
                                <td>
                                    <button id="remove" class="btn btn-danger">
                                    Remove</button>
                                </td>
                            </tr>
                        </table>

                </div>
                <div class="col-md-6">
                    <?php

                        // Kavya video 6 28:45, 46:14


                        // Kavya video 6 39:35, 43:46
                     ?>
                    <h5 class="text-center">Add Admin</h5>
                    <form method="post" enctype="multipart/form-data">
                        <div>
                            <?php echo $show; ?>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="uname" class="form-control" autocomplete="off">                                                       
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Add Admin Picture</label>
                            <input type="file" name="img" class="form-control">
                        </div><br>
                        <input type="submit" name="add" value="Add New Admin" class="btn btn-success">
                    </form>

        </div>
    </div>
    </div>
</div>
</body>
</html>
