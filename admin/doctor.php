<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
    <title>
        Total Doctors
    </title>
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
                        include("sidenave.php");
                    ?>

                </div>
                <div class="col-md-10">
                        <h5 class="text-center">Total Doctors</h5>
                    <?php
                    
                        // VID 10 47:43
                        $query = "SELECT * FROM doctors WHERE  status ='APPROVED' ORDER BY data_reg ASC";
                        $res= mysqli_query($connect,$query);

                        //ajax_job_request.php part to be copy pasted here and swap the underlying with the last portion inside <td></td>
                        // <td>
                        //     <a href ="">
                        //         <button class="btn btn-info">Edit</button>
                        //     </a>
                        // </td>
                        //Add a salary field 52:05 Vid 10
                        //You need to watch the video from 47:43 comments wont help much

                    ?>

                </div>
            </div>
        </div>
    </div>

</body>

</html>