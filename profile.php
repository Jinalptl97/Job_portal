<?php
session_start();
include('connect.php');
$_SESSION['user_id'];

$uid=$_SESSION['user_id'];
echo $uid;

if (isset($_POST['send']))
{
    $education = $_POST['education'];
    $skills = $_POST['skills'];
    $filename = $_FILES["resume"]["name"];
    $tempname = $_FILES["resume"]["tmp_name"];
    $folder1 = "images/" . $filename;
   
    $query = "INSERT INTO `job_seeker_details` (`user_id`, `resume_upload`, `education`, `skills`) VALUES ('$uid','$folder1','$education','$skills')";
    if (mysqli_query($conn, $query)) 
    {
        echo $query;
        echo "New record created successfully";
        move_uploaded_file($tempname, $folder1);
        header("Location:jobs.php");
    }
    else 
    {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
                            
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
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

<body>
<div class="form-container">
<div class="image-holder"></div>
            <form method="post" name="contactForm" enctype="multipart/form-data" onsubmit="return(validateForm());">
                
                <div class="form-group"><input class="form-control" type="text" name="education" placeholder="Education"></div>
                <div class="form-group"><input class="form-control" type="text" name="skills" placeholder="Skills"></div>
                <div class="custom-file">
                <label>Upload Resume</label>
                    <input type="file" name="resume" id="customFile">

                </div>
                <br><br>

                <div class="form-group"><button class="btn btn-primary btn-block" onclick="validationForm()" name="Send" type="submit">Send</button>
                </div>
            </form>	
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html>