
<?php
include 'connect.php';

if (isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST") {

   

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['address'];
    $postcode = $_POST['postcode'];
    $role = $_POST['role'];

    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "images/" . $filename;



    $query = "INSERT INTO `users`(`fname`, `lname`, `email`, `password`, `address`, `postcode`, `role`, `contact_no`, `photo`) 
                    VALUES ('$firstName','$lastName','$email','$password','$address','$postcode','$role','$phoneNumber','$folder')";

    if (mysqli_query($conn, $query)) {
        echo "New record created successfully";
        move_uploaded_file($tempname, $folder);
      //  header('Location: login.php');
    } else {
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
    <link rel="stylesheet" href="assets/css/Brands.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/Testimonials.css">
    <script type="text/javascript" src="validation.js"></script>
</head>

<body>

    <section class="register-photo" style="height:70%">
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post" name="contactForm" enctype="multipart/form-data" onsubmit="return(validateForm());">
                <h2 class="text-center"><strong>Create An Account	</strong></h2>
                <div class="form-group"><input class="form-control" type="text" name="firstName" placeholder="First name"></div>
                <div class="form-group"><input class="form-control" type="text" name="lastName" placeholder="last name"></div>
                <div class="form-group"><input class="form-control" type="Email" name="email" placeholder="Email"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="form-group"><input class="form-control" type="password" name="Confirm password" placeholder="Confirm Password"></div>
                <div class="form-group"><input class="form-control" type="text" name="address" placeholder="Address"></div>
                <div class="form-group"><input class="form-control" type="text" name="postcode" placeholder="Postcode"></div>
                <div class="form-group"><input class="form-control" type="text" name="phoneNumber" placeholder="phone number"></div>
                <div class="form-group">
                    <label>Choose Role : </label>
                    <select name="role">
                        <option>Job Seeker</option>
                        <option>Job Recruiter</option>
                    </select>
                </div>

                <div class="custom-file">
                    <input type="file" name="image" id="customFile">

                </div>
                <br><br>


                <div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label>
                    </div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" onclick="validationForm()" name="submit" type="submit">Sign Up</button>
                </div>
                <a class="already" href="index.php">You already have an account? Login here.</a>
            </form>
        </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
    
</body>

</html>

