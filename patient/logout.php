<!--php part 50:25 video 13-->
<?php
    session_start();

    if (isset($_SESSION["patient"])){
        unset($_SESSION["patient"]);
        header("Location: ../index.php");
    }
?>