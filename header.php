<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/CSS/header.css">
</head>

<body>
    <header>
        <div class="header">
            <img src="assets/img/Logo.png" alt="Logo" class="logo">
            <div class="header-right">
                <div class="navbuttons">
                    <a class="active" href="index.php">Home</a>
                </div>
                <div class="navbuttons">
                    <a href="contactpage.php">Contact</a>
                </div>
                <div class="navbuttons">
                    <a href="about.php">About</a>
                </div>
                <div class="loginbutton">
                    <?php
                    if (session_status() == PHP_SESSION_NONE) {
                        session_start();
                    }
                    if(isset($_SESSION['rol'])){
                        if($_SESSION['rol'] == "admin"){
                            ?><a href="adminpage.php"><img src="assets/img/login.png" alt=""></a><?php
                        }
                        else if($_SESSION['rol']== "user"){
                            ?> <a href="userpage.php"><img src="assets/img/login.png" alt=""></a> <?php
                        }
                    }
                    else{
                        ?> <a href="loginpage.php"><img src="assets/img/login.png" alt=""></a> <?php
                    }
                   
                    ?>
                </div>
            </div>
        </div>
    </header>
</body>

</html>