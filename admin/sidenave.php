<?php
if (!isset($_SESSION["admin"]) && $_SESSION["admin"] == false) {
    header("Location:../adminlogin.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Your Title Here</title>
</head>

<body>

    <div class="list-group list-group-item-action bg-info" style="height: 90vh;">

        <a href="index.php" class="list-group-item list-group-item-action 
        bg-info text-center text-white">Dashboard</a>
        <a href="profile.php" class="list-group-item list-group-item-action 
        bg-info text-center text-white">Profile</a>
        <a href="admin.php" class="list-group-item list-group-item-action 
        bg-info text-center text-white">Administrator</a>
        <a href="doctor.php" class="list-group-item list-group-item-action 
        bg-info text-center text-white">Doctors</a>
        <a href="./patient.php" class="list-group-item list-group-item-action 
        bg-info text-center text-white">Patients</a>

    </div>

</body>

</html>