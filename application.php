<?php
session_start();
$_SESSION['user_id']=$uid;
echo $_SESSION['user_id'];
include('connect.php');

   
    $sql= "SELECT fname, lname, email, password, address, postcode, contact_no, photo FROM users where role='Job seeker'";
    if($result = mysqli_query($conn, $sql))
    {
        if(mysqli_num_rows($result) > 0){
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
            while($row = mysqli_fetch_array($result)){
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
            echo "<td> <a href='post_job.php'>Post New Job</a></td>";
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