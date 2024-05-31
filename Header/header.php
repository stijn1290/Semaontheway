<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Header/header.css">
</head>

<body>
    <header>
        <div class="header">
            <img src="Header/Assets/Logo.png" alt="Logo" class="logo">
            <div class="header-right">
                <div class="navbuttons">
                    <a class="active" href="index.php">Home</a>
                </div>
                <div class="navbuttons">
                    <a href="contactpage.php">Contact</a>
                </div>
                <div class="navbuttons">
                    <a href="">About</a>
                </div>
                <div class="loginbutton">
                    <?php
                    if (session_status() == PHP_SESSION_NONE) {
                        session_start();
                    }
                    if($_SESSION['logged_in'] == true){
                        ?><a href="userpage.php"><img src="Header/Assets/login.png" alt=""></a><?php
                    }
                    else{
                        ?> <a href="loginpage.php"><img src="Header/Assets/login.png" alt=""></a> <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </header>
</body>

</html>
