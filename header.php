<?php
session_start();
include('connect.php');
if (isset($_SESSION['user_id'])) {
    $uid = $_SESSION['user_id'];
    $sql = "SELECT fname FROM users WHERE user_id= $uid ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
} else {
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Brands.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/Testimonials.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container">Welcome To Our Site!><span><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto text-uppercase">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Find_job.php">Find a JOB</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Register.php">create account</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="team.php">Team</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="contact.php">Contact us</a></li>
                        <?php
                        if (isset($_SESSION['user_id'])) {
                            ?>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="logout.php">Logout</a></li>
                        <?php 
                        } ?> 
                    </ul>
                </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('assets/img/header-bg.jpg');">
        <div class="container">


            <section class="testimonials-clean">
                <div class="container"></div>
            </section><span>Welcome To Our Site!></span>
        </div>
        <div class="intro-heading text-uppercase"></div>
        </div>
        </div>
    </header>



</body>

</html>