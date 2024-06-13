<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body>
    <footer>
        <div class="blauwedeel">
            <nav class="kolomfooter">
                <h1 id="witteletters">Boeken</h1>
                <b>Informatie</b>
                <b>Speciale informatie</b>
                <b>Nu boeken</b>
            </nav>
            <nav class="kolomfooter">
                <h1 id="witteletters">Algemeen</h1>
                <b>Telefoonnummer: 063712879</b>
                <b>Adres: Wijburglaan 55 Cherso</b>
                <b>E-mailadres: semaontheway@gmail.com</b>
            </nav>
            <nav class="kolomfooter">
                <h1 id="witteletters">Nieuwsbrief: </h1>
                <div>
                    <form action="functions/nieuwsbriefregister.php" method="POST">
                     <input type="text" name="naam">
                     <input type="submit" value="aanmelden">
                    </form>
                </div>
            </nav>
        </div>
        <div class="groenedeel">
            <h1 id="witteletters">© SemaOnTheWay</h1>
            <nav id="tussenruimtelogo">
                <i class="fa-brands fa-instagram fa-2xl"></i>
                <i class="fa-brands fa-facebook fa-2xl"></i>
                <i class="fa-brands fa-linkedin fa-2xl"></i>
            </nav>
        </div>
    </footer>
</body>

</html>