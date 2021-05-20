<?php
session_start();
$_SESSION['user_id'];
echo $_SESSION['user_id'];
include('connect.php');


   
    $sql= "SELECT * FROM job_info";
    if($result = mysqli_query($conn, $sql))
    {
        if(mysqli_num_rows($result) > 0){
            echo "<table border = 1>";
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
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" . $row['job_title'] . "</td>";
                    echo "<td>" . $row['job_description'] . "</td>";
                    echo "<td>" . $row['vacancy_no'] . "</td>";
                    echo "<td>" . $row['experience'] . "</td>";

                    echo "<td>" . $row['basic_pay'] . "</td>";
                    echo "<td>" . $row['location'] . "</td>";
                    echo "<td>" . $row['last_graduation'] . "</td>";
                    echo "<td>" . $row['postcode'] . "</td>";
                    ?>
                    <form><td><div class="form-group"><button class="btn btn-primary btn-block" Name="apply" type="submit">Apply</button></div></td></form>";
                    <?php
                echo "</tr>";
                if(isset($_POST['apply']))
                {

                    $sql= "SELECT * FROM job_seeker_details WHERE user_id= '$_SESSION['user_id']' ";
                    $result = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_array($result);
                    if(empty($row))
                    {
                        header("Location: profile.php");
                    }
                    else
                    {
                        
                    }
                }
{
            }
            echo "</table>";
            // Free result set
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

?>