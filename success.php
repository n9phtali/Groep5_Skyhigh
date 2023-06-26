<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zweefvliegtuig club</title>
    <link rel="stylesheet" href="css/style.css" />
    <link
        rel="stylesheet"
        media="screen and (max-width:800px)"
        href="css/tablet.css"

    />
</head>
<body>
<?php include'include/navbar.php';?>
<section id="informatie">
    <h1 class="headings">SUCCESS</h1>
    <?php
    echo "bedankt voor uw bericht ";
    echo $_SESSION['email'];
    echo " wij zullen zo spoedig mogelijk antwoord versturen"
    ?>

</section>
</body>
</html>

