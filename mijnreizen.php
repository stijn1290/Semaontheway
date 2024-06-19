<?php
session_start();
include 'header.php';
include("functions/connection.php");
if($_SESSION['rol'] == "user")
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
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
                    $geboektevlucht = $_SESSION["userid"];
                    $sqlophalenvlucht = "SELECT `vluchtid` FROM `booked_vlucht` WHERE `userid` = :userid";
                    $stmt = $conn->prepare($sqlophalenvlucht);
                    $stmt->bindParam(':userid', $geboektevlucht);
                    $stmt->execute();
                    $result = $stmt->fetch();
                    if ($result) {
                        $vluchtId = $result['vluchtid'];
                        $sql = "SELECT v.*, bv.id FROM booked_vlucht bv join vluchten v on bv.vluchtid = v.id WHERE vluchtid = :vluchtid";
                        $stmt = $conn->prepare($sql);
                        $stmt->bindParam(':vluchtid', $vluchtId);
                        $stmt->execute();
                        $result = $stmt->fetchAll();
                        foreach($result as $row) {
                            ?>
                            <h1>Bestemming: <?php echo $row["eindbestemming"]; ?> </h1>
                            <h1>Prijs: <?php echo $row["prijs"]; ?> </h1>
                            <h1>Vliegmaatschappij: <?php echo $row["vliegmaatschappij"]; ?> </h1>

                            <form action="functions/annulerenreis.php" class="annulerenbox" method="POST">
                                <input type="hidden" name="id" value="<?php echo $row ["id"]; ?>">
                                <input type="submit" value="annuleren">
                            </form>
                            <?php



                             $_SESSION["bestemming"] = $row["eindbestemming"];
                             $_SESSION["prijs"] = $row["prijs"];
                             $_SESSION["vliegmaatschappij"] = $row["vliegmaatschappij"];
                             $_SESSION["id"] = $row["id"];
                        }
                    } else {
                        ?>
                        <h1>Geen geboekte vlucht </h1>
                        <h1>U kunt een vlucht boeken via de hoofdpagina</h1>
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
    </div>
</body>
</html>
<?php
}
else
{
    header("location:loginpage.php");
}
?>