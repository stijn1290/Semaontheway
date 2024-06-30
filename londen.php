<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include ('header.php');
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landingspagina</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/londen.css">
    <link rel="stylesheet" href="js/fieldCheck.js">
</head>

<body>
    <main>
        <div class="title-myaccount">
            <h1>Londen</h1>
        </div>
        <div class="container">
            <div class="backgroundinfo">
                <h1 id="info" >Londen, een bruisende wereldstad, biedt een mix</h1>
                <h1 id="bigtext">van historie en moderniteit:</h1>
                <h1 id="info">Big Ben: Iconische kloktoren.</h1>
                <h1 id="info">Buckingham Palace: Officiële residentie van de koning.</h1>
                <h1 id="info">London Eye: Reuzenrad met prachtig uitzicht.</h1>
                <img src="assets/img/londen1.png" alt="" width="250px" height="400px">
                <img src="assets/img/londen2.png" alt="" width="400px" height="400px">
                <img src="assets/img/londen3.png" alt="" width="400px" height="400px">

            </div>
            <div class="reviews">
                <h1>reviews</h1>
                <?php
                include("functions/connection.php");
                $sql = "SELECT `id`, `bestemming`, `email`, `naam`, `watvondjeervan` FROM `goedgekeurde_reviews`";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll();
                $review = false;
                foreach ($result as $row)
                {
                    if($row["bestemming"] == "Bestemming: londen")
                    {
                        $review = true;
                        ?>
                <div class="reviewstyling">
                    <h1><?php echo $row["naam"]?></h1>
                    <h1><?php echo $row["watvondjeervan"]?></h1>
                </div>
                <?php
                    }
                }
                if($review == false)
                {
                    ?>
                    <h1>Er zijn (nog) geen reviews geplaatst</h1>
                    <?php
                }
                ?>
            </div>
        </div>
    </main>

</body>
<script src="js/fieldCheck.js"></script>

</html>