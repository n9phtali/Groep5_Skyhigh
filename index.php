
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<body>
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




</body>
<?php
require_once "database/conn.php";
session_start();
if (isset($_SESSION['login'])) {
    echo "welkom ".$_SESSION['email'];
    ?>
    <a href="logout.php">logout</a>
    <?php



}
?>

</html>

<?php include 'include/navbar.php';
include 'include/home.php';

