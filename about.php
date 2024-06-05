<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/CSS/about.css">
</head>
<header>
    <?php
    include ("header.php");
    ?>
</header>
<body>
    <section class="faq_container">
    <h1>FAQ</h1>
    <div class="site">
        <div class="site_vraag">
          <p>Ik ben mijn wachtwoord vergeten wat kan ik doen?</p>
          <img src="assets/img/plus.png" alt="afbeeldingplus">
        </div>
        <div class="site_antwoord">
            <p>Neem contact op in de contact pagina</p>
        </div>
    </div>
    <div class="site">
        <div class="site_vraag">
         <p>Er is iets gebeurd waardoor ik niet kan reizen?</p>
         <img id="plus" src="assets/img/plus.png" alt="afbeeldingplus">
        </div>
        <div class="site_antwoord">
            <p>Je kan het annuleren "Mijn reizen"</p>
        </div>
    </div>
    <div class="site">
        <div class="site_vraag">
            <p>Moet ik ingelogd zijn om te boeken?</p>
            <img src="assets/img/plus.png" alt="afbeeldingplus">
        </div>
        <div class="site_antwoord">
            <p>Ja, wij bieden een flexibelen cancel anytime aan</p>
        </div>
    </div>
    </section>
</body>
<footer>
    <?php
    include ("footer.php");
    ?>
</footer>
<script src="js/faq.js"></script>
</html>