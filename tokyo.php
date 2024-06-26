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
    <link rel="stylesheet" href="assets/CSS/tokyo.css">
    <link rel="stylesheet" href="js/fieldCheck.js">
</head>

<body>
    <main>
        <div class="title-myaccount">
            <h1>Tokyo</h1>
        </div>
        <div class="container">
            <div class="backgroundinfo">
                <h1 id="info" >Tokio, een fascinerende stad waar traditie en </h1>
                <h1 id="bigtext">moderniteit samenkomen:</h1>
                <h1 id="info">Tokyo Tower: Iconische zendmast met uitzicht.</h1>
                <h1 id="info">Shibuya Crossing: Drukste kruispunt ter wereld.</h1>
                <h1 id="info">Senso-ji Tempel: Oudste en meest bezochte</h1>
                <img src="assets/img/tokyo1.png" alt="" width="400px" height="400px">
                <img src="assets/img/tokyo2.png" alt="" width="400px" height="400px">

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
                    if($row["bestemming"] == "Bestemming: tokyo")
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