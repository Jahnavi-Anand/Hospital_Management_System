<?php
include("../include/connection.php");
// Vid 10 34:30

$id = $_POST['id'];

$query = "UPDATE doctors SET status='APPROVED' WHERE id='$id'";

mysqli_query($connect,$query);

?>