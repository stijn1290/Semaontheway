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
    <link rel="stylesheet" href="assets/CSS/sanfrancisco.css">
    <link rel="stylesheet" href="js/fieldCheck.js">
</head>

<body>
    <main>
        <div class="title-myaccount">
            <h1>San Francisco</h1>
        </div>
        <div class="container">
            <div class="backgroundinfo">
                <h1 id="info" >San Francisco, een stad vol charme en diversiteit, </h1>
                <h1 id="bigtext">biedt een unieke reiservaring:</h1>
                <h1 id="info">Golden Gate Bridge: Iconisch symbool van de stad.</h1>
                <h1 id="info">Alcatraz Island: Beroemde voormalige gevangenis.</h1>
                <h1 id="info">Fisherman's Wharf: Levendige waterkant met restaurants en winkels.</h1>
                <img src="assets/img/sanfrancisco1.png" alt="" width="400px" height="400px">
                <img src="assets/img/sanfrancisco2.png" alt="" width="400px" height="400px">

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
                    if($row["bestemming"] == "Bestemming: sanfrancisco")
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