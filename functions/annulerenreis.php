<?php
include("connection.php");
session_start();
$id = $_POST["id"];
$sql = "DELETE FROM `booked_vlucht` WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$resultaat = $stmt->execute();
if ($resultaat) {
    header("location:../mijnreizen.php");
}
else {
    echo "kan de reis niet annuleren";
}