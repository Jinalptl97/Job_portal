<?php

include('connect.php');


if(isset($_POST['submit']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $cno = $_POST['cno'];
    $position = $_POST['position'];
    $startdate = $_POST['sdate'];
    $email = $_POST['email'];

    $query = "INSERT INTO `users`(`fname`, `lname`, `email`, `password`, `address`, `postcode`, `role`, `contact_no`, `photo`) 
                    VALUES ('$firstName','$lastName','$email','$password','$address','$postcode','$role','$phoneNumber','$folder')";

    if (mysqli_query($conn, $query))
    {
        echo "New record created successfully";
        move_uploaded_file($tempname, $folder);
        header('Location: login.php');
        
    } 
    else 
    {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <section class="contact-clean">
        <form method="post">
            <h2 class="text-center">Contact us</h2>
            <div class="form-group">
                <input class="form-control" type="text" name="fname" placeholder="First Name">
                <input class="form-control" type="text" name="lname" placeholder="Last Name">
                <input class="form-control" type="text" name="cno" placeholder="Contact Number">
                <input class="form-control" type="text" name="position" placeholder="Apply For Position">
                <input class="form-control" type="text" name="sdate" placeholder="Start Date">
            </div>
            <div class="form-group"><input class="form-control is-invalid" type="email" name="email" placeholder="Email">
                <small class="form-text text-danger">Please enter a correct email address.</small>
            </div>
            <div class="form-group"><center><button class="btn btn-primary" name="submit" type="submit">Apply </button></center></div>
        </form>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>