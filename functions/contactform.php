<?php
include ("connection.php");
$email = $_POST['email'];
$naam = $_POST['naam'];
$opmerking = $_POST['opmerking'];
$sql = "INSERT INTO `contactformulier`(`email`, `naam`, `opmerking`) VALUES (:email, :naam, :opmerking)";
$stmt= $conn->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':naam', $naam);
$stmt->bindParam(':opmerking', $opmerking);
$resultaat = $stmt->execute();
if($resultaat)
{
    header("location:../contactpage.php");
}
else
{
    echo "kan geen contact formulier versturen";
}