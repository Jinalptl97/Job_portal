<?php
session_start();
include_once('connect.php');



if(isset($_POST['login']))
{
    
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql= "SELECT role, user_id, email, password FROM users WHERE email = '$email' AND password = '$password' ";
    echo $sql;
    $sql= "SELECT role, user_id, email, password FROM users WHERE Email = '$email' AND password = '$password' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    $uid=$row['user_id'];
    $_SESSION['user_id']=$uid;
	
    
    if($row)
    {
        if($row['role']=="Job Recruiter")
            {
                header("location: application.php");
            }
            else if($row['role']=="Job Seeker")
            {
                header("location: jobs.php");
            }
            else
            {
                echo "Error";
            }
    }
    else
    {
    
        echo 'please enter valid credentials';

    }
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
        <div class="container"><a class="navbar-brand" href="#page-top">Easy jobs</a><span><strong>It's Nice To Meet You</strong></span><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto text-uppercase">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Find_job.php">Find a JOB</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Register.php">create account</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="team.php">Team</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="contact.php">Contact us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('assets/img/header-bg.jpg');">
        <div class="container">
            <div class="intro-text">
                <section class="login-clean">
                    <form method="post">
                        <h2 class="sr-only">Login Form</h2>
                        <div class="illustration"></div>
                        <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                        <div class="form-group"><button class="btn btn-primary btn-block" Name="login" type="submit">Log In</button></div><a class="forgot" href="forgotpassword.php">Forgot your email or password?</a>
                    </form>
                </section>
				

                <div class="intro-lead-in">
                    <section class="map-clean"><img src="assets/img/conceptual-hand-writing-showing-make-easy-business-photo-text-offering-solutions-alternatives-easier-job-ideas-mega-123891828.jpg">
                        <div class="container"></div>
                    </section>
                    <section class="testimonials-clean">
                        <div class="container"></div>
                    </section><span>Welcome To Our Site!</span>
                </div>
                <div class="intro-heading text-uppercase"></div><a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" role="button" href="#services">Tell me more</a>
            </div>
        </div>
    </header>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Jobs</h2>
                    <h3 class="text-muted section-subheading">I believe that working with good people matters because then the work environment is good</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">Home Careers</h4>
                    <p class="text-muted">Typical care assistant duties are wide ranging. The job revolves around helping clients with their immediate needs such as washing, dressing and maintaining their hygiene, as well as helping them with basic day-to-day or administrative tasks like paying bills.</p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-laptop fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">Cleaning</h4>
                    <p class="text-muted">A Cleaners role can vary depending on their working environment but in general their duties will include: Clean, stock and supply designated facility areas. Dusting, sweeping, vacuuming, mopping. Carry out deep cleaning and detailed cleaning tasks. Notify management of deficiencies or repairs required.</p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-lock fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">security</h4>
                    <p class="text-muted">Secures premises and personnel by patrolling property; monitoring surveillance equipment; inspecting buildings, equipment, and access points; permitting entry. Obtains help by sounding alarms. Prevents losses and damage by reporting irregularities; informing violators of policy and procedures; restraining trespassers.</p>
                </div>
            </div>
        </div>
    
    
  </section>
  
    
</body>

</html>

