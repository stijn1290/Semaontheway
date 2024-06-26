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
            <form action="functions/reviewplaatsen.php" method="POST">
                <div class="stylingradio">
                    <div class="bolletjeelement">
                        <input type="radio" id="tokyo" name="bestemming" value="tokyo">
                        <label for="tokyo">Tokyo</label>
                    </div>
                    <div class="bolletjeelement">
                        <input type="radio" id="buenosaires" name="bestemming" value="buenosaires">
                        <label for="buenosaires">Buenos Aires</label>
                    </div>
                    <div class="bolletjeelement">
                        <input type="radio" id="newyork" name="bestemming" value="newyork">
                        <label for="newyork">New York</label>
                    </div>
                    <div class="bolletjeelement">
                        <input type="radio" id="londen" name="bestemming" value="londen">
                        <label for="londen">Londen</label>
                    </div>
                    <div class="bolletjeelement">
                        <input type="radio" id="sanfrancisco" name="bestemming" value="sanfrancisco">
                        <label for="sanfrancisco">San Francisco</label>
                    </div>
                </div>
                <input type="text" name="naam" placeholder="Naam">
                <input type="email" name="email" placeholder="E-mail Adres">
                <input type="text" name="watvondjeervan" placeholder="wat vond je ervan">
                <input type="submit" name="submit" placeholder="Submit">
            </form>
        </div>
    </div>
    <footer>
        <?php include('footer.php'); ?>
    </footer>
</body>

</html>