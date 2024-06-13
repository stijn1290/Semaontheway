<?php
include("connection.php");
$id = $_POST["id"];
$sql = "DELETE FROM `vluchten` WHERE id= :id";
$stmt= $conn->prepare($sql);
$stmt->bindParam(':id',$id);
$resultaat = $stmt->execute();
if($resultaat)
{
    echo"hij is verwijderd";
}
else {
    echo "kan het id niet verwijderen";
}