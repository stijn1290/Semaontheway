<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="assets/CSS/adminpage.css">
</head>

<body>
    <header>
        <nav>
            <div class="verlaat-beheer-button">
                <a href="homepage.php">Verlaat Beheer</a>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="admin-container">
            <div class="admin-buttoncontainer">
                <h1>Toevoegen</h1>
                <form action="">
                    <input name="prijs" type="text" placeholder="Vul de prijs in.">
                    <input name="Eindbestemming" type="text" placeholder="Vul de Eindbestemming in.">
                    <input name="maatschapij" type="text" placeholder="Vul de maatschapij in.">
                    <input type="submit">
                </form>
            </div>
            <div class="admin-buttoncontainer">

                <h1>Edit</h1>
                <form action="">
                    <input name="prijs" type="text" placeholder="Vul de prijs in.">
                    <input name="Eindbestemming" type="text" placeholder="Vul de Eindbestemming in.">
                    <input name="maatschapij" type="text" placeholder="Vul de maatschapij in.">
                    <input type="submit">
                </form>
            </div>
            <div class="admin-buttoncontainer">
                <h1>Verwijder</h1>
                <form action="">
                    <input name="prijs" type="text" placeholder="Vul de prijs in.">
                    <input name="Eindbestemming" type="text" placeholder="Vul de Eindbestemming in.">
                    <input name="maatschapij" type="text" placeholder="Vul de maatschapij in.">
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
    <footer>
        <?php include ('footer.php'); ?>
    </footer>
</body>

</html>
