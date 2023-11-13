<!DOCTYPE>
<html>
    <head>
        <title>Admin Profile</title>
    </head>
    <body>
        <?php
            include("../include/header.php");
            include("../include/connection.php")
            //vid 7 8:22
        ?>

        <div class = container-fluid>
            <div class = col-mid-12>
                <div class = row>
                    <div class = col-md-2 style = "margin-left: -30px">
                    <?php
                    include("sidenave.php");
                    ?>
                    </div>
                    <div class = col-md-10>
                        <div class = col-mid-12>
                            <div class = row>
                                <div class = col-mid-6>
                                    <h4><?php echo $username; ?> Profile</h4>
                                        <?php
                                            //vid 7 16:39
                                        ?>
                                    <form method = post ecntype = "mulitpart/formdata">
                                        <?php
                                            echo "<img src = 'img/$profiles' class = 'col-md-12' style = 'height: 200px;'>"
                                        ?>

                                        <br><bt>
                                        <div class = form-group>
                                            <label>UPDATE PROFILE</label>
                                            <input type = file name = profile class = from-control>
                                        </div>
                                        <br>
                                        <input type = submit name = update value = UPDATE class = "btn btn-success">
                                    </form>
                                </div>
                                <div class = col-mid-6>
                                    <?php
                                        //vid 7 26:07
                                    ?>
                                    <form method = post >
                                        <label>Change Username</label>
                                        <input type = text name = uname class = form-control autocomplete = off><br>
                                        <input type = submit name = change class = "btn btn-success">
                                    </form>

                                    <br>
                                    <?php
                                        //vid 7 35:22
                                    ?>

                                    <form method = post >
                                        <h5 class = "text-center my-4">Change Password</h5>
                                        <div>
                                            <?php
                                                echo $show;
                                            ?>
                                        </div>
                                        <div class = form-group>
                                            <label>Old Password</label>
                                            <input type="password" name = old_pass class = form-control>
                                        </div>
                                        <div class = form-group>
                                            <label>New Password</label>
                                            <input type = password name = new_pass class = form-control>
                                        </div>
                                        <div class = form-control>
                                            <label>Confirm</label>
                                            <input type="password" name = con-pass class = form-control>
                                        </div>
                                        <input type="submit" name = update_pass value = "Update Password" class = "btn btn-info">
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