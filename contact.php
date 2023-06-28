<?php
require_once "database/conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>

    <link rel="stylesheet" href="./css/contact.css"/>
</head>
<body>
<?php include 'include/navbar.php'; ?>
<div class="content">
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true"/>

        <div class="signup">
            <form method="POST" action="contact.php">
                <label for="chk" aria-hidden="true">Contact</label>

                <input
                        type="text"
                        name="Naam"
                        placeholder="Naam"
                        required=""
                />
                <input
                        type="email"
                        name="Email"
                        placeholder="email"
                        required=""
                />
                <input
                        type="text"
                        name="Bericht"
                        placeholder="typ uw bericht"
                        required=""
                />


                <input type="hidden" name="login" value="signup">
                <button>Stuur Bericht</button>
            </form>
            <p><center>Wil je ons liever telefonisch bereiken? dan kan dat op het volgende telefoonnummer : 0612341111</center></p>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                if ($_POST['login'] == "signup") {

                    echo "hello world";

                    require_once "include/cleanDataFunction.php";

                    $Naam = $_POST['Naam'];
                    $Email = $_POST['Email'];
                    $Bericht = $_POST ['Bericht'];
                    $Datum = date("Y/m/d");

                    $Naam = clean_data($Naam);
                    $Email = clean_data($Email);
                    $Bericht = clean_data($Bericht);


                    $sql = "INSERT INTO contact
                            (Naam,
                            Email,
                            Bericht,
                             Datum)
                            VALUES(
                            '$Naam',
                            '$Email',
                            '$Bericht',
                            '$Datum')";


                    $result = mysqli_query($conn, $sql);
                    header("location: success.php");
                    if (!$result) {
                        echo "Query error";
                        mysqli_close($conn);
                    }

                }
            }
            ?>
        </div>


    </div>

</body>
</html>
