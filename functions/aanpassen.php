<?php
include("connection.php");
$prijs = $_POST['prijs'];
$maatschappij = $_POST['maatschappij'];
$datum = $_POST['datum'];
$id = $_POST['id'];
$sql = "UPDATE `vluchten` SET `prijs`= :prijs,`vliegmaatschappij`= :maatschappij,`datum`= :datum WHERE id = :id";
$stmt= $conn->prepare($sql);
$stmt->bindParam(':prijs', $prijs);
$stmt->bindParam(':maatschappij', $maatschappij);
$stmt->bindParam(':datum', $datum);
$stmt->bindParam(':id', $id);
$resultaat = $stmt->execute();
if ($resultaat) {
    header("location:../adminpage.php");
}
else {
    "kan het niet verwijderen";
}