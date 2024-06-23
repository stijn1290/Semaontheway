<?php
include("functions/connection.php");
session_start();
if($_SESSION['rol'] == "user"){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'header.php';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loginpage</title>
    <link rel="stylesheet" href="assets/CSS/userpage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="title-myaccount">
            <h1><?php echo $_SESSION["username"];?></h1>
        </div>
        <div class="boxcontainer">
            <div class="infobuttons">
                <button class="blueboxes">
                    <a id="grooteletters" class="active" href="mijnreizen.php"><h1>Bekijk mijn reizen</h1></a>
                </button>
                <button class="blueboxes">
                    <a href="review.php"><h1 id="tekstkleur">Plaats een review</h1></a>
                </button>
                <div class="infobuttons">
                    <div class="blueboxes">
                        <h1>Gebruiker: <?php echo $_SESSION["username"] ?></h1>
                        <h1>Wachtwoord: <?php echo $_SESSION["password"] ?></h1>
                        <button>
                            <img src="assets/img/editicon.png" alt="Edit Knop">
                        </button>
                    </div>
                </div>
                <button class="blueboxes">
                    <a id="grooteletters" class="active" href="functions/sessionstop.php">uitloggen</a>
                </button>
            </div>
        </div>
        <?php
    include 'footer.php';
    ?>
</body>
<script>
function click() {
    console.log("Clicked");
}
</script>

</html>
<?php
}
else
{
    header("location:adminpage.php");
}