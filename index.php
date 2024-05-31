<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include('Header/header.php');
        ?>
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
            <div class="vakantieafbeelding">
                <img src="Header/Assets/Rectangle4.png" alt="">
                <div class="elementsinafbeelding">
                    <h1 id="witteletters">Sema On The Way</h1>
                    <nav class="groeneblokkenrij">
                        <div class="zoekenblock">
                            <h1>Zoek vakantie</h1>
                            <form action="index.php" class="formulierflex" method="GET">
                                <p>bestemming</p>
                                <input type="text" name="eindbestemming">
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
            if(isset( $_GET['eindbestemming'])){
                        include ("functions/connection.php");
                        $eindbestemming = "%" . $_GET['eindbestemming']. "%";
                        $sql = "SELECT * FROM vluchten WHERE eindbestemming LIKE :eindbestemming ";
                        $stmt = $conn->prepare($sql);
                        $stmt->bindParam(':eindbestemming', $eindbestemming);
                        $stmt->execute();
                        $results = $stmt->fetchAll();
                    if(count($results)>0)
                    {
                        foreach($results as $row)
                        {
                            ?>
                         <div class="vakantie">
                            <h1><?php echo $row["eindbestemming"]; ?> </h1>
                            <h1><?php echo $row["prijs"]; ?> </h1>
                            <h1> <?php echo $row["vliegmaatschappij"]; ?> </h1>
                            <form action="functions/checkforbooking.php" class="boekenblok" method="POST">
                              <input type="hidden" name="vluchtid" value="<?php echo $row['id']; ?>">
                              <input type="submit" value="boeken">
                            </form>
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
        <?php
        include('footer.php');
        ?>
    </footer>
</body>

</html>