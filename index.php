
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
fd



</body>
<?php
require_once "database/conn.php";

$sql = "SELECT * FROM Gebruikers";
if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_row()) {
        echo $row[0];
        echo $row[1];
        echo $row[2];
    }

}
?>

</html>

<?php include 'include/navbar.php';
include 'include/home.php';

