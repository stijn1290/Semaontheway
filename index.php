<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('header.php'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landingspagina</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <main>
        <section class="vakantiezoeken">
            <h1 id="witteletters">Sema on the way</h1>
            <div class="vakantieafbeelding">
                <img src="assets/img/Rectangle4.png" alt="">
                <div class="elementsinafbeelding">
                    <nav class="groeneblokkenrij">
                        <div class="zoekenblock">
                            <h1>Zoek vakantie</h1>
                            <form action="index.php" class="formulierflex" method="GET" onsubmit="return CheckField()">
                                <p>bestemming</p>
                                <input type="text" name="eindbestemming" id="eindbestemming">
                                <input type="submit" value="zoek vakantie's" id="boxstyle">
                            </form>
                        </div>
                        <div class="reclamekorting">
                            <h1 id="oranjeletters">bespaar tot 150 euro korting op je vakantie</h1>
                        </div>
                    </nav>
                </div>
            </div>
        </section>
        <section class="vakantieresultaten">
            <?php
            if (isset($_GET['eindbestemming'])) {
                include("functions/connection.php");
                $eindbestemming = "%" . $_GET['eindbestemming'] . "%";
                $sql = "SELECT * FROM vluchten WHERE eindbestemming LIKE :eindbestemming";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':eindbestemming', $eindbestemming);
                $stmt->execute();
                $results = $stmt->fetchAll();
                if (count($results) > 0) {
                    foreach ($results as $row) {
            ?>
            <div class="vakantie">
                <h1 id="eindbestemming"><?php echo $row["eindbestemming"]; ?> </h1>
                <h1><?php echo $row["prijs"]; ?> </h1>
                <h1><?php echo $row["vliegmaatschappij"]; ?> </h1>
                <div class="buttonsinrij">
                    <form action="functions/checkforbooking.php" class="boekenblok" method="POST">
                        <input type="hidden" name="vluchtid" value="<?php echo $row['id']; ?>">
                        <input type="submit" value="boeken">
                        <?php
                            $_SESSION["bestemming"] = $row["eindbestemming"];
                            $_SESSION["prijs"] = $row["prijs"];
                            $_SESSION["vliegmaatschappij"] = $row["vliegmaatschappij"];
                        ?>
                    </form>
                    <div class="meerinfo">
                        <?php
                        if ($row["eindbestemming"] == "Tokyo") {
                        ?>
                        <a href="tokyo.php">
                            <h1 id="witteletters">Meer info</h1>
                        </a>
                        <?php
                        } else if ($row["eindbestemming"] == "New York") {
                        ?>
                        <a href="newyork.php">
                            <h1 id="witteletters">Meer info</h1>
                        </a>
                        <?php
                        } else if ($row["eindbestemming"] == "Buenos Aires") {
                        ?>
                        <a href="BuenosAires.php">
                            <h1 id="witteletters">Meer info</h1>
                        </a>
                        <?php
                        } else if ($row["eindbestemming"] == "Londen") {
                        ?>
                        <a href="londen.php">
                            <h1 id="witteletters">Meer info</h1>
                        </a>
                        <?php
                        } else if ($row["eindbestemming"] == "San Francisco") {
                        ?>
                        <a href="SanFrancisco.php">
                            <h1 id="witteletters">Meer info</h1>
                        </a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php
                    }
                }
            }
            ?>
        </section>
        <section class="vakantiezoeken">
            <div class="overonsblok">
                <div class="overonstitel">
                    <h1>Over Ons</h1>
                </div>
                <div class="overonstekst">
                    <h1>Sema On The Way is een professioneel reisbureau dat exclusieve en hoogwaardige reizen aanbiedt.
                        Als u op zoek bent naar een ontspannen vakantie, dan bent u bij ons aan het juiste adres!</h1>
                    <h1>Boek hier uw vakantie!!!</h1>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <?php include('footer.php'); ?>
    </footer>
</body>
<script>
    function CheckField() {
        var eindbestemming = document.getElementById('eindbestemming').value;
        if (!isNaN(eindbestemming) && eindbestemming.trim() !== "") {
            alert("Aub voer geen cijfer in");
            console.log("Aub voer geen cijfer in");
            return false;
        }
        if (eindbestemming.trim() === "") {
            alert("Voer een bestemming in.");
            console.log("Voer een bestemming in.");
            return false;
        }
        return true;
    }
</script>
</html>
