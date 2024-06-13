<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'header.php';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loginpage</title>
    <link rel="stylesheet" href="assets/CSS/bookingvoltooid.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="title-myaccount" id="bigtitle">
            <h1>Boeking Voltooid</h1>
        </div>

        <div class="container-info">
            <div class="title-myaccount">
                <h1>Bedankt voor het boeken bij SemaOnTheWay</h1>
                <h2 id="E-ticket-text">U kunt uw E-Tickets in de bijlage downloaden</h2>
            </div>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>
<script>
    function click() {
        console.log("Clicked");
    }
</script>

</html>