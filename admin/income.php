<?php
session_start();
if (!isset($_SESSION["admin"]) && $_SESSION["admin"] == false) {
    header("Location:../adminlogin.php");
    exit();
}
?>
<html>

<head>
    <title>Total Income</title>
</head>

<body>

    <?php
    include("../include/header.php");
    include("../include/connection.php");
    ?>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margin-left:-30px;">
                    <?php

                    include("./sidenave.php");

                    ?>
                </div>
                <div class="col-md-10">
                    <h5 class="text-center my-2">Total Income</h5>

                    <?php

                    $query = "SELECT * FROM income";

                    $res = mysqli_query($connect, $query);

                    $output = "";
                    $output .= "
                            <table class='table table-bordered'>
                            <td>ID</td>
                            <td>Doctor</td>
                            <td>Patient</td>
                            <td>Discharge Date</td>
                            <td>Bill</td>
                        ";

                    if (mysqli_fetch_array($res) < 1) {
                        $output .= "
                                <tr>
                                <td class='test-center' colspan='4'>No Patient Discharge Yet</td>
                                </tr>
                            ";
                    }

                    while ($row = mysqli_fetch_array($res)) {
                        $output .= "
                                <tr>
                                <td>" . $row['id'] . "</td>
                                <td>" . $row['doctor'] . "</td>
                                <td>" . $row['patient'] . "</td>
                                <td>" . $row['date_discharge'] . "</td>
                                <td>" . $row['amount_paid'] . "</td>
                            ";
                    }

                    $output .= "</tr></table>";
                    echo $output;
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>