<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'header.php';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact page</title>
    <link rel="stylesheet" href="assets/CSS/contactpage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
</head>

<body>
    <section>
        <div class="container">
            <div class="contactformcontainer">
                <form action="functions/contactform.php" method="POST">
                    <h1>Neem contact met ons op</h1>
                    <input type="text" id="email" placeholder="Voer uw e-mailadres in" name="email">
                    <input type="text" id="naam" placeholder="Voer uw naam in" name="naam">
                    <input type="text"  id="opmerking" placeholder="Opmerking" name="opmerking">
                    <input type="submit" value="Submit" placeholder="Verzenden">
                </form>
            </div>
        </div>
    </section>
    <footer>
        <section>
            <?php
            include 'footer.php';
            ?>
        </section>
    </footer>
</body>

</html>