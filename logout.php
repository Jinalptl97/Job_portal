<?php
session_start();
$_SESSION['user_id'];

include('connect.php');
include('header.php');
header("Location:index.php");
session_destroy();
?>

