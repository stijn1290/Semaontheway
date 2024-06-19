<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'header.php';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn reizen</title>
    <link rel="stylesheet" href="mijnreizen.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="title-myaccount">
            <h1>Mijn reizen</h1>
        </div>
        <div class="boxcontainer">
            <div class="infobuttons">
                <div class="blueboxes">
                    <?php
                    include("functions/connection.php");
                    $geboektevlucht = $_SESSION["vluchtid"];
                    $sqlophalenvlucht = "SELECT `vluchtid` FROM `booked_vlucht`";
                    $stmt = $conn->prepare($sqlophalenvlucht);
                    $stmt->execute();
                    $result = $stmt->fetch();
                    $vluchtId = $result['vluchtid'];
                    $sql = "SELECT * FROM vluchten WHERE id LIKE :vluchtid ";
                    $stmt = $conn->prepare($sql);
                    $stmt->bindParam(':vluchtid', $vluchtId);
                    $stmt->execute();
                    $result = $stmt->fetchAll();
                    foreach($result as $row)
                    {
                        ?>
                        <h1>Bestemming: <?php echo $row["eindbestemming"]; ?> </h1>
                        <h1>Prijs: <?php echo $row["prijs"]; ?> </h1>
                        <h1>Vliegmaatschappij: <?php echo $row["vliegmaatschappij"]; ?> </h1>
                        <?php
                        $_SESSION["bestemming"] = $row["eindbestemming"];
                        $_SESSION["prijs"] = $row["prijs"];
                        $_SESSION["vliegmaatschappij"] = $row["vliegmaatschappij"];
                    }
                    ?>
                </div>
            </div>
        </div>
        <footer>
            <?php
            include 'footer.php';
            ?>
        </footer>
</body>
</script>

</html>