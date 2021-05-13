<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="assets/css/Brands.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/Testimonials.css">
</head>

<body>
    <section class="register-photo" style="height:70%">
        <div class="form-container" >
            
            <form method="post" enctype="multipart/form-data">
                <h2 class="text-center"><strong>Upload</strong>Job</h2>
                <div class="form-group"><input class="form-control" type="text" name="job" placeholder="Job Title"></div>
				 <div class="form-group"><input class="form-control" type="text" name="jobdescription" placeholder="Job description"></div>
				  <div class="form-group"><input class="form-control" type="number" name="vacancy" placeholder="Vacancy number"></div>
                <div class="form-group"><input class="form-control" type="number" name="basicpay" placeholder="Basic Pay"></div>
				 <div class="form-group"><input class="form-control" type="text" name="location" placeholder="Location"></div>
				 <div class="form-group"><input class="form-control" type="text" name="address" placeholder="Address"></div>
				 <div class="form-group"><input class="form-control" type="text" name="postcode" placeholder="Postcode"></div>
				 <div class="form-group"><input class="form-control" type="number" name="experience" placeholder="Experience"></div>
				 <div class="form-group"><input class="form-control" type="text" name="min_graduation" placeholder="Minimum Graduation"></div>
                 <div class="form-group"><button class="btn btn-primary btn-block" name="submit" type="submit">Post Job</button></div>
	
            </form>
		</div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html>

<?php 
include 'connect.php'; 

if(isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST")
{

    $job = $_POST['job'];
    $jobdescription= $_POST['jobdescription'];
    $vacancy = $_POST['vacancy'];
    $experience = $_POST['experience'];
    $basicpay = ($_POST['basicpay']);
    $location = $_POST['location'];
    $address = $_POST['address'];
    $min_graduation = $_POST["min_graduation"];
    $postcode = $_POST['postcode'];
    
    


    $query = "INSERT INTO `job_info`(`job_title`, `job_description`, `vacancy_no`, `experience`, `basic_pay`, `location`, `last_graduation`, `postcode`) 
                    VALUES ('$job','$jobdescription','$vacancy','$experience','$basicpay','$location','$min_graduation','$postcode')";

    if (mysqli_query($conn, $query))
    {
        header('Location: application.php');
    } 
    else 
    {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

}


?>