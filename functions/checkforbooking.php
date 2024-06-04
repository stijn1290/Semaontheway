<?php
include("connection.php");
session_start();
if($_SESSION['logged_in'] == true)
{
    $vluchtid = $_POST['vluchtid'];
    $userid = $_SESSION['userid'];
    $sql = "INSERT INTO `booked_vlucht` (`userid`, `vluchtid`) VALUES (:userid, :vluchtid)";
    $stmt= $conn->prepare($sql);
    $stmt->bindParam(':vluchtid', $vluchtid);
    $stmt->bindParam(':userid', $userid);
    $resultaat = $stmt->execute();
    if($resultaat){
        $_SESSION["vluchtid"] = $vluchtid;
        echo "boeking geslaagd";
    }
    else{
        echo "boeking mislukt";
    }
}
else
{
    header("location:../loginpage.php");
}