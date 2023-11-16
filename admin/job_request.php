<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Job Request</title>
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
                        include("sidenave.php");
                    ?>
                </div>
                <div class="col-md-10">
                    <h5 class="text-center my">Job Request</h5>

                    <div id="show"></div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            alert("DONE");

            function show(){
                $.ajax({
                    url:"show_job_request.php",
                    method:"POST",
                    success:function(data){
                        $("#show").html(data);
                    }
                })
            }
        });

    </script>

</body>

</html>