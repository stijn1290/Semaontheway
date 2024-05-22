<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'Header/header.html';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loginpage</title>
    <link rel="stylesheet" href="userpage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="title-myaccount">
            <h1>Mijn Account</h1>
        </div>
        <div class="boxcontainer">
            <div class="boxname">
                <h1>" Gebruikers naam "</h1>
            </div>
            <div class="infobuttons">
                <div class="blueboxes">
                    <h1>usersmail@gmail.com</h1>
                    <h1>06-1856285</h1>
                    <button>
                    <img src="img/editicon.png" alt="">
                    </button>                </div>                    

                <div class="blueboxes">
                    <h1>Gebruiker: -----</h1>
                    <h1>Wachtwoord: *******</h1>
                    <button>
                    <img src="img/editicon.png" alt="">
                    </button>
                </div>
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