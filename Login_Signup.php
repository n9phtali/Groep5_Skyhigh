<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />

    <link rel="stylesheet" href="./css/Login_signup.css" />
</head>
<body>
<?php include 'include/navbar.php';?>
<div class="content">
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true" />

        <div class="signup">
            <form method="POST">
                <label for="chk" aria-hidden="true">Sign up</label>
                <input
                        type="text"
                        name="Gebruikersnaam"
                        placeholder="gebruikersnaam"
                        required=""
                />
                <input
                        type="email"
                        name="email"
                        placeholder="Email"
                        required=""
                />
                <input
                        type="password"
                        name="wachtwoord"
                        placeholder="wachtwoord"
                        required=""
                />
                <input
                        type="text"
                        name="telefoonnumer"
                        placeholder="telefoonnummer "
                        required=""
                />

                <input type="hidden" name="login" value="signup">
                <button>Sign up</button>
            </form>
            <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                if ($_POST['login'] == "signup") {
                    require_once "database/conn.php";
                    echo "hello world";

                    $Gebruikersnaam = $_POST['Gebruikersnaam'];
                    $wachtwoord = $_POST['wachtwoord'];
                    $email = $_POST['email'];
                    $tussenvoegsel = "tussenvoegsel";
                    $telefoonnummer = 'telefoonnummer';
                    $geboortedatum = date("Y/m/d");
                    $voornaam = "admin";
                    $achternaam = "admin";

                    $sql = "INSERT INTO gebruikers
                            (Gebruikersnaam,
                            voornaam,
                            Achternaam,
                            tussenvoegsel,
                            Wachtwoord,
                            email,
                            telefoonnummer,
                            geboortedatum)
                            VALUES(
                            '$Gebruikersnaam',
                            '$voornaam',
                            '$achternaam',
                            '$tussenvoegsel',
                            '$wachtwoord',
                            '$email',
                            '$telefoonnummer',
                            '$geboortedatum')";

                    $result = mysqli_query($conn, $sql);
                    header("location: index.php");
                    if (!$result) {
                        echo "Query error";
                        mysqli_close($conn);
                    }
                }
            }
            ?>
        </div>

        <div class="login">
            <form method="POST">
                <label for="chk" aria-hidden="true">Login</label>
                <input type="hidden" name="login" value="login">
                <input
                        type="email"
                        name="email"
                        placeholder="Email"
                        required=""
                />
                <input
                        type="password"
                        name="pswd"
                        placeholder="Password"
                        required=""
                />
                <button>Login</button>
            </form>
        </div>
        <?php
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            if ($_POST['login'] == "login") {
            $email = $_POST['email'];
            $wachtwoord = $_POST['wachtwoord'];
            echo "LOGGING IN";

            require_once "include/cleanDataFunction.php";

            $Gebruikersnaam = clean_data($Gebruikersnaam);
            $wachtwoord = clean_data($wachtwoord);

            $dbGebruikersnaam = mysqli_query($conn, $Gebruikersnaam);
            $dbWachtwoord = mysqli_real_escape_string($conn, $wachtwoord);
            }
        }
        ?>
    </div>
</div>

</body>
</html>
