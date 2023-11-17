<?php

session_start();
if (!isset($_SESSION["admin"]) && $_SESSION["admin"] == false) {
    header("Location:../adminlogin.php");
    exit();
}

include("../include/connection.php");

$id = $_POST['id'];

$query = "UPDATE doctors SET status='APPROVED' WHERE id='$id'";

mysqli_query($connect, $query);

?>