<?php
include ("connection.php");
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "INSERT INTO `users`(`username`, `password`) VALUES (:username, :password)";
$stmt= $conn->prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$resultaat = $stmt->execute();
if($resultaat)
{
    header("location:../userpage.php");
}
else
{
    echo "kan geen account aanmaken";
}