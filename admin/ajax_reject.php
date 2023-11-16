<?php
include("../include/connection.php");
// Vid 10 37:44

$id = $_POST['id'];

$query = "UPDATE doctors SET status='REJECTED' WHERE id='$id'";

mysqli_query($connect,$query);

?>