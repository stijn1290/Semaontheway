<?php
include("connection.php");
session_start();
session_unset();
$_SESSION['logged_in'] = "";
header("location: ../loginpage.php");