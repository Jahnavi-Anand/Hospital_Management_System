<!--php part 10:28 video 11-->
<?php
    session_start();

    if (isset($_SESSION["doctor"])){
        unset($_SESSION["doctor"]);
        header("Location: ../index.php");
    }
?>