<?php
include("connection.php");
$bestemming = $_POST["bestemming"];
$naam = $_POST["naam"];
$email = $_POST["email"];
$watvondjeervan = $_POST["watvondjeervan"];
$sql = "INSERT INTO `reviews`(bestemming, naam, email, watvondjeervan) VALUES (:bestemming ,:naam ,:email,:watvondjeervan)";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':bestemming', $bestemming);
$stmt->bindParam(':naam', $naam);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':watvondjeervan', $watvondjeervan);

$resultaat = $stmt->execute();
if($resultaat)
 {
     header("location:../userpage.php");
 }
else {
     echo "review plaatsen mislukt";
 }