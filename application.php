<?php
session_start();
$_SESSION['user_id'];

include('connect.php');
include('header.php');
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
<body id='page-top'>
<section class="register-photo" style="height:100%">
        <div class="form-container">
<?php

    $sql= "SELECT fname, lname, email, password, address, postcode, contact_no, photo FROM users where role='Job seeker'";
    if($result = mysqli_query($conn, $sql))
    {
       
        if(mysqli_num_rows($result) > 0)
        {
            
            echo "<table border = 1>";
                echo "<tr>";
                    echo "<th>First Name </th>";
                    echo "<th>Last Name</th>";
                    echo "<th>Email</th>";
                    echo "<th>Password</th>";
                    echo "<th>Address</th>";
                    echo "<th>Postcode</th>";
                    echo "<th>Contact Number</th>";
                    echo "<th>Photo</th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result))
            {
                echo "<tr>";
                    echo "<td>" . $row['fname'] . "</td>";
                    echo "<td>" . $row['lname'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['password'] . "</td>";

                    echo "<td>" . $row['address'] . "</td>";
                    echo "<td>" . $row['postcode'] . "</td>";
                    echo "<td>" . $row['contact_no'] . "</td>";
                    echo "<td>" . $row['photo'] . "</td>";
                   
                echo "</tr>";
            }
            echo "<td colspan='8'><center> <a href='post_job.php'>Post New Job</a></center></td>";
            echo "</table>";
            // Free result set
            mysqli_free_result($result);
        } 
        else
        {
            echo "No records matching your query were found.";
        }
    }
    else
    {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    ?>
    </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
    <?php
        include('footer.php');
    ?>
</body>
</html>