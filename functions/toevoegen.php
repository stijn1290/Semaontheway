<?php
include("connection.php");



$prijs = $_POST["prijs"];
$beginbestemming = $_POST["beginbestemming"];
$eindbestemming = $_POST["eindbestemming"];
$vliegmaatschappij = $_POST["vliegmaatschappij"];
$datum = $_POST["datum"];
$sql = "INSERT INTO vluchten (beginbestemming, eindbestemming, prijs, vliegmaatschappij, datum) VALUES (:beginbestemming ,:eindbestemming, :prijs, :vliegmaatschappij, :datum)";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':beginbestemming', $beginbestemming);
$stmt->bindParam(':eindbestemming', $eindbestemming);
$stmt->bindParam(':prijs', $prijs);
$stmt->bindParam(':vliegmaatschappij', $vliegmaatschappij);
$stmt->bindParam(':datum', $datum);

$resultaat = $stmt->execute();
if($resultaat)
 {
     header("location:../adminpage.php");
 }
else {
     echo "toevoegen mislukt";
 }