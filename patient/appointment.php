<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
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
                        include("sidenav.php");
                    ?>
                </div>
                <div class="col-md-10">
                    <h5 class="text-center my-2">Book Appointment</h5>

                    <?php
                        //vid 17 12:12
                    ?>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6" style="padding: 2rem 1rem; margin-bottom: 2rem; background-color: #e9ecef; border-radius: .3rem;">
                                <form method="post">
                                    <label>Appointment Date</label>
                                    <input type="date" name="date" class="form-control">

                                    <label class="my-2">Sypmtoms</label>
                                    <input type="text" name="sym" class="form-control" autocomplete="off" placeholder="Enter Symptoms">
                                    <input type="submit" name="book" class="btn btn-info my-2" value="Book Appointment">

                                </form>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>