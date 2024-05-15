<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landingspagina</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
</head>

<body>
    <main>
        <form action="" class="kolomfooter">
            <input id="voornaam" type="text" placeholder="voornaam">
            <input type="text" id="achternaam" placeholder="achternaam">
            <input type="text" id="straatnaam" placeholder="straatnaam">
            <input type="text" id="huisnummer" placeholder="huisnummer">
            <button id="versturen" onclick="CheckField();">login</button>
        </form>
        <script>
        function CheckField() {
            var voornaam = document.getElementById("voornaam");
            var achternaam = document.getElementById("achternaam");
            var straatnaam = document.getElementById("straatnaam");
            var huisnummer = document.getElementById("huisnummer");
            if (voornaam.value === "" || achternaam.value === "" || straatnaam.value === "" || huisnummer.value === "") {
                alert("Voer alstublieft iets in.");
                if (isNaN(huisnummer.value)) {
                    alert("Voer een getal in voor huisnummer.");
                }
            }
            return true;
        }
        </script>
    </main>
    <footer>
        <?php
        include('footer.php');
        ?>
    </footer>
</body>

</html>