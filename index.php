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
  <header>
 <?php
        include('Header/header.html');
        ?>
  </header>
    <main>
        <section class="vakantiezoeken">
            <div class="vakantieafbeelding">
                <img src="Header/Assets/Rectangle4.png" alt="">
                <div class="elementsinafbeelding">
                    <h1 id="witteletters">Sema On The Way</h1>
                    <nav class="groeneblokkenrij">
                        <div class="zoekenblock">
                            <h1>Zoek vakantie</h1>
                            <form action="" class="formulierflex">
                                <p>aantal personen</p>
                                <input type="number" min="0" max="20">
                                <p>aantal kamers</p>
                                <input type="number" min="0" max="20">
                                <p>bestemming</p>
                                <input type="text">
                                <p>vertrek datum</p>
                                <input type="date">
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
