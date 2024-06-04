<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'Header/header.php';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loginpage</title>
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
                        <h1><?php echo $row["eindbestemming"]; ?> </h1>
                        <h1><?php echo $row["prijs"]; ?> </h1>
                        <h1> <?php echo $row["vliegmaatschappij"]; ?> </h1>
                        <?php
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