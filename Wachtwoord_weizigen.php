<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zweefvliegtuig club</title>
    <link rel="stylesheet" href="css/contact.css" />

</head>
<body>

<?php include'include/navbar.php';?>
<div class="content">
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true"/>

        <div class="signup">
            <form method="POST" action="#">
                <label for="chk" aria-hidden="true">Wachtwoord weizigen</label>

                <input
                    type="text"
                    name="Wachtwoord"
                    placeholder="Wachtwoord"
                    required=""


                <input type="hidden" name="Wachtwoord" value="">
                <button>Weizig</button>
            </form>

        </div>
    </div>
</div>
</body>
