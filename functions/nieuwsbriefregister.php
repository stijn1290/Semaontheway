<?php
include("connection.php");
$naam = $_POST['naam'];
$sql = "INSERT INTO `nieuwsbrief_leden`(`naam`) VALUES (:naam)";
$stmt= $conn->prepare($sql);
$stmt->bindParam(':naam', $naam);
$resultaat = $stmt->execute();
if($resultaat)
{
    header("location:../index.php");
}
else {
    echo "kan niet aanmelden voor de nieuwsbrief";
}