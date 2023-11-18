<!DOCTYPE html>
<html>

<head>
    <title></title>

    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Include Font Awesome CSS and JavaScript -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-info bg-info">
        <div class="d-flex justify-content-between align-items-center w-100">
            <h5 class="text-white">Hospital Management System</h5>

            <div class="mr-auto"></div>

            <ul class="navbar-nav">
                <?php
                if (isset($_SESSION['admin'])) {
                    $user = $_SESSION['admin'];
                    echo '
                    <li class="nav-item"><a href="#" class="nav-link text-white">' . $user . '</a></li>
                    <li class="nav-item"><a href="logout.php" class="nav-link text-white">logout</a></li>
                    ';
                } else if (isset($_SESSION['doctor'])) {
                    $user = $_SESSION['doctor'];
                    echo '
                    <li class="nav-item"><a href="#" class="nav-link text-white">' . $user . '</a></li>
                    <li class="nav-item"><a href="logout.php" class="nav-link text-white">logout</a></li>
                    ';
                } else if (isset($_SESSION['patient'])) {
                    $user = $_SESSION['patient'];
                    echo '
                    <li class="nav-item"><a href="#" class="nav-link text-white">' . $user . '</a></li>
                    <li class="nav-item"><a href="logout.php" class="nav-link text-white">logout</a></li>
                    ';
                } else {
                    echo '
                    <li class="nav-item"><a href="index.php" class="nav-link text-white">Home</a></li> 
                    <li class="nav-item"><a href="adminlogin.php" class="nav-link text-white">Admin</a></li> 
                    <li class="nav-item"><a href="doctorlogin.php" class="nav-link text-white">Doctor</a></li>
                    <li class="nav-item"><a href="patientlogin.php" class="nav-link text-white">Patient</a></li>
                    ';
                }
                ?>
            </ul>
        </div>
    </nav>
</body>

</html>