<?php
session_start();
include('connect.php');
$_SESSION['user_id'];
$uid=$_SESSION['user_id'];
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

    <section class="register-photo" style="height:100%">
    <?php
    
    $sql= "SELECT * FROM job_info";
    if($result = mysqli_query($conn, $sql))
    {
        if(mysqli_num_rows($result) > 0)
        {
            echo "<table border = 1 align='center'>";
                echo "<tr>";
                    echo "<th>Job </th>";
                    echo "<th>About Job</th>";
                    echo "<th>Vacancy Available</th>";
                    echo "<th>Experience</th>";
                    echo "<th>Salary</th>";
                    echo "<th>Location</th>";
                    echo "<th>Education</th>";
                    echo "<th>Postcode</th>";
                echo "</tr>";
                while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                        echo "<td>" . $row['job_title'] . "</td>";
                        echo "<td>" . $row['job_description'] . "</td>";
                        echo "<td>" . $row['vacancy_no'] . "</td>";
                        echo "<td>" . $row['experience'] . "</td>";

                        echo "<td>" . $row['basic_pay'] . "</td>";
                        echo "<td>" . $row['location'] . "</td>";
                        echo "<td>" . $row['last_graduation'] . "</td>";
                        echo "<td>" . $row['postcode'] . "</td>";
                        $jobid=$row['job_id'];

    ?>
                        <form><td><div class="form-group"><a href="jobs.php?job_id=<?php echo $row['job_id'];?>"><button class="btn btn-primary btn-block" Name="apply" type="submit">Apply</button></a></div></td></form>
    <?php
                    echo "</tr>";
                }
                    

                        $sql= "SELECT * FROM job_seeker_details WHERE user_id= $uid ";
                        $result = mysqli_query($conn,$sql);
                        $row1 = mysqli_fetch_array($result);
                        
                        if(isset($row1)>0)
                        {
                           
                            
                            $insert = "INSERT INTO application(`user_id`, `job_id`, `date_apply`) VALUES ('$uid','$jobid',now())";  
                           
                            if (mysqli_query($conn, $insert)) 
                            {
                                
                               
                            }
                        }
                        else
                        {
                            $alert= "<script type='text/javascript'>alert('Please Upload Resume First');</script>";
                            echo $alert;
                            header("Location: profile.php");
                        }
                    

                
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
    
        <div class="form-container">
            <div class="image-holder"></div>
            
        </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>
</html>