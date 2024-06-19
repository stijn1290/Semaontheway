<?php
include ("connection.php");
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT  id , username, password, rol FROM `users` WHERE username = :username AND password = :password";
$stmt= $conn->prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->execute();
$user = $stmt->fetch();
if($user)
{
    session_start();
    $_SESSION["username"] = $user["username"];
    $_SESSION["password"] = $user["password"];
    $_SESSION["rol"] = $user["rol"];
    $_SESSION["logged_in"] = true;
    $_SESSION['userid'] = $user["id"];
    header("location:../userpage.php");
}
else
{
    echo "ongeldige gebruikersnaam en/of wachtwoord";
}