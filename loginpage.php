<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'header.php';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loginpage</title>
    <link rel="stylesheet" href="assets/CSS/loginpage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
</head>

<body>
    <div>
        <div class="first-title">
            <h1>Sema On The Way Login</h1>
        </div>
    </div>

    <div class="container">
        <div class="logincontainer">
            <div class="inloggen">
                <div class="inloggen-title">
                    <h1>Registeren</h1>
                </div>
                <form action="functions/register.php" method="POST">
                    <input id="Gebruikersnaam" placeholder="Voer uw Gebruikersnaam in." name="username">
                    <input type="password" id="Wachtwoord" placeholder="Voer uw Wachtwoord in." name="password">
                    <a id="decoratie" href="TermsOfServices.php"><h1>Terms of service</h1></a>
                    <input type="submit" value="Submit" placeholder="Registreer">
                </form>
            </div>
            <div class="inloggen">
                <div class="inloggen-title">
                    <h1>Inloggen</h1>
                </div>
                <form action="functions/login.php" method="POST">
                    <input id="Gebruikersnaam" placeholder="Voer uw Gebruikersnaam in." name="username">
                    <input type="password" id="Wachtwoord" placeholder="Voer uw Wachtwoord in." name="password">
                    <a id="decoratie" href="TermsOfServices.php"><h1>Terms of service</h1></a>
                    <input type="submit" value="Submit" placeholder="Log in">
                </form>
            </div>
        </div>
    </div>
</body>
            <?php 
            include("footer.php")
            ?>
</html>