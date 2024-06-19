<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/CSS/review.css">
</head>

<body>
    <header>
        <?php include('header.php'); ?>
    </header>
    <div class="container">
        <div class="form-container">      
              <h1 id="title">Review Achterlaten</h1>
            <form action="">
                <input id="reisid" type="text" name="reisid" placeholder="Reis ID">
                <input type="text" name="naam" placeholder="Naam">
                <input type="email" name="email" placeholder="E-mail Adres">
                <input type="text" name="phone" placeholder="Phone">
                <input type="submit" name="submit" placeholder="Submit">
            </form>
        </div>
    </div>
    <footer>
        <?php include('footer.php'); ?>
    </footer>
</body>

</html>
