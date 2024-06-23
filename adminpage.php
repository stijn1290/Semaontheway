<?php
include("functions/connection.php");
session_start();
if($_SESSION['rol'] == "admin")
{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="assets/css/adminpage.css">
</head>

<body>
    <section class="container">
        <div class="adminsidebar">
            <nav class="uitloggenverlaatbeheer">
                <div class="verlaat-beheer-button">
                    <a href="index.php">Verlaat Beheer</a>
                </div>
                <div class="verlaat-beheer-button">
                    <a id="grooteletters" class="active" href="functions/sessionstop.php">uitloggen</a>
                </div>
            </nav>
            <nav class="admin-elementcontainer" onclick="displayTextToevoegen()">
                <h1>Toevoegen</h1>
            </nav>
            <nav class="admin-elementcontainer" onclick="displayTextAanpassen()">
                <h1>aanpassen</h1>
            </nav>
            <nav class="admin-elementcontainer" onclick="displayTextVerwijderen()">
                <h1>Verwijderen</h1>
            </nav>
            <nav class="admin-elementcontainer" onclick="displayTextAccounts()">
                <h1>accounts</h1>
            </nav>
        </div>
        <div class="adminelementen">
            <form action="functions/toevoegen.php" method="POST" id="formtoevoegen">
                <h1>toevoegen</h1>
                <input name="prijs" type="text" placeholder="Vul de prijs in.">
                <input name="beginbestemming" type="text" placeholder="Vul de beginbestemming in">
                <input name="eindbestemming" type="text" placeholder="Vul de Eindbestemming in.">
                <input name="vliegmaatschappij" type="text" placeholder="Vul de maatschapij in.">
                <input name="datum" type="date">
                <input type="submit" value="verzenden">
            </form>
            <?php
            include("functions/connection.php");
            $sql = "SELECT `id`, `beginbestemming`, `eindbestemming`, `prijs`, `vliegmaatschappij`, `datum` FROM `vluchten`";
            $stmt = $conn->prepare($sql);
            $execute = $stmt->execute();
            $resultaat = $stmt->fetchAll();
            ?>
            <div class="aanpassenelementen">
                <?php
            foreach($resultaat as $row)
            {
            ?>
                <form action="functions/aanpassen.php" id="formaanpassen" method="POST">
                    <h1>aanpassen</h1>
                    <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                    <input name="prijs" type="text" value="<?php echo $row["prijs"] ?>">
                    <input name="maatschapij" type="text" value="<?php echo $row["vliegmaatschappij"] ?>">
                    <input name="datum" type="date" value="<?php echo $row["datum"] ?>">
                    <input type="submit" value="aanpassen">
                </form>
                <?php
            }
            ?>
            </div>
            <?php
                include("functions/connection.php");
                $sql = "SELECT `id`, `beginbestemming`, `eindbestemming`, `prijs`, `datum` FROM `vluchten`";
                $stmt= $conn->prepare($sql);
                $execute = $stmt->execute();
                $result = $stmt->fetchAll();
                ?>
            <div class="verwijderenelementen"><?php
                foreach($result as $row)
                {
                    ?>
                <form action="functions/verwijderen.php" method="POST" id="formverwijderen">
                    <h1>verwijderen</h1>
                    <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                    <h1>beginbestemming: <?php echo $row["beginbestemming"] ?></h1>
                    <h1>eindbestemming: <?php echo $row["eindbestemming"]?></h1>
                    <h1>prijs: $<?php echo $row["prijs"]?></h1>
                    <h1>datum: <?php echo $row["datum"]?></h1>
                    <input type="submit" value="verwijderen" id="clickable">
                </form>
                <?php
                }
                ?>
            </div>
            <div class="accountselementen">
                <section class="accounts">
                    <div class="elementomtitel">
                        <h1>Accounts</h1>
                    </div>
                    <?php
                include("functions/connection.php");
                $sql = "SELECT `id`, `username`, `rol`, `password` FROM `users`";
                $stmt= $conn->prepare($sql);
                $execute = $stmt->execute();
                $result = $stmt->fetchAll();
                ?>
                    <?php
            foreach($result as $row)
                {
                    ?>
                    <form action="functions/verwijderen.php" method="POST" id="formaccounts">
                        <h1>gebruiker</h1>
                        <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                        <h1>gebruikersnaam: <?php echo $row["username"] ?></h1>
                        <h1>rol: <?php echo $row["rol"]?></h1>
                        <h1>wachtwoord: <?php echo $row["password"]?></h1>
                        <input type="submit" value="verwijderen" id="clickable">
                    </form>
                    <?php
            }
                ?>
                </section>
                <section class="geboektevluchten">
                    <?php
                $sql = "SELECT `id`, `userid`, `vluchtid` FROM `booked_vlucht`";
                $stmt= $conn->prepare($sql);
                $execute = $stmt->execute();
                $result = $stmt->fetchAll();
                ?>
                    <div class="elementomtitel">
                        <h1>Geboekte vluchten</h1>
                    </div>
                    <?php
                foreach($result as $row)
                {
                    ?>
                    <form action="functions/verwijderen.php" method="POST" id="formaccounts">
                        <h1>geboekte vlucht: </h1>
                        <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                        <h1>vluchtid: <?php echo $row["vluchtid"] ?></h1>
                        <h1>gebruikersid: <?php echo $row["userid"]?></h1>
                        <input type="submit" value="verwijderen" id="clickable">
                    </form>
                    <?php
                }
                ?>
                </section>
            </div>
        </div>
    </section>
    <script>
    function displayTextToevoegen() {
        var toevoegen = document.getElementById("formtoevoegen");
        var aanpassen = document.querySelectorAll(".aanpassenelementen");
        var verwijderen = document.querySelectorAll(".verwijderenelementen");
        var accounts = document.querySelectorAll(".accountselementen");
        if (toevoegen.style.display === "none") {
            toevoegen.style.display = "block";
            aanpassen.forEach(element => {
                element.style.display = "none";
            })
            verwijderen.forEach(element => {
                element.style.display = "none"
            })
            accounts.forEach(element => {
                element.style.display = "none"
            })
        } else {
            toevoegen.style.display = "none";
        }
    }
    </script>
    <script>
    function displayTextAanpassen() {
        var toevoegen = document.getElementById("formtoevoegen");
        var aanpassen = document.querySelectorAll(".aanpassenelementen");
        var verwijderen = document.querySelectorAll(".verwijderenelementen");
        var accounts = document.querySelectorAll(".accountselementen");
        if (aanpassen[0].style.display === "none") {
            toevoegen.style.display = "none";
            aanpassen.forEach(element => {
                element.style.display = "flex";
            })
            verwijderen.forEach(element => {
                element.style.display = "none";
            })
            accounts.forEach(element => {
                element.style.display = "none"
            })
        } else {
            aanpassen.forEach(element => {
                element.style.display = "none"
            })
        }
    }
    </script>
    <script>
    function displayTextVerwijderen() {
        var toevoegen = document.getElementById("formtoevoegen");
        var aanpassen = document.querySelectorAll(".aanpassenelementen");
        var verwijderen = document.querySelectorAll(".verwijderenelementen");
        var accounts = document.querySelectorAll(".accountselementen");
        if (verwijderen[0].style.display === "none") {
            toevoegen.style.display = "none";
            aanpassen.forEach(element => {
                element.style.display = "none"
            })
            verwijderen.forEach(element => {
                element.style.display = "flex";
            })
            accounts.forEach(element => {
                element.style.display = "none"
            })
        } else {
            verwijderen.forEach(element => {
                element.style.display = "none"
            })
        }
    }
    </script>
    <script>
    function displayTextAccounts() {
        var toevoegen = document.getElementById("formtoevoegen");
        var aanpassen = document.querySelectorAll(".aanpassenelementen");
        var verwijderen = document.querySelectorAll(".verwijderenelementen");
        var accounts = document.querySelectorAll(".accountselementen");
        if (accounts[0].style.display === "none") {
            toevoegen.style.display = "none";
            aanpassen.forEach(element => {
                element.style.display = "none"
            })
            verwijderen.forEach(element => {
                element.style.display = "none";
            })
            accounts.forEach(element => {
                element.style.display = "flex"
            })
        } else {
            accounts.forEach(element => {
                element.style.display = "none"
            })
        }
    }
    </script>
</body>

</html>
<?php
}
?>