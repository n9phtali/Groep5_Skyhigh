<?php
require_once "database/conn.php";
?>

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

                    echo "hello world";

                    require_once "include/cleanDataFunction.php";

                    $Gebruikersnaam = $_POST['Gebruikersnaam'];
                    $wachtwoord = sha1($_POST['wachtwoord']);
                    $email = $_POST['email'];
                    $tussenvoegsel = "tussenvoegsel";
                    $telefoonnummer = 'telefoonnummer';
                    $geboortedatum = date("Y/m/d");
                    $voornaam = "admin";
                    $achternaam = "admin";

                    $Gebruikersnaam = clean_data($Gebruikersnaam);
                    $voornaam = clean_data($voornaam);
                    $tussenvoegsel = clean_data($tussenvoegsel);
                    $wachtwoord = clean_Data($wachtwoord);
                    $email = clean_data($email);
                    $telefoonnummer = clean_data($telefoonnummer);
                    $geboortedatum = clean_Data($geboortedatum);


                    $sql = "INSERT INTO gebruikers
                            (Gebruikersnaam,
                            voornaam,
                            Achternaam,
                            tussenvoegsel,
                            wachtwoord,
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
            $wachtwoord = $_POST['pswd'];
            echo "LOGGING IN";

            require_once "include/cleanDataFunction.php";

            $email = clean_data($email);
            $wachtwoord = clean_data($wachtwoord);

            $dbemail = mysqli_real_escape_string($conn, $email);
            $dbWachtwoord = mysqli_real_escape_string($conn, $wachtwoord);

            $dbWachtwoord = sha1($dbWachtwoord);

            $sql = "SELECT *  FROM gebruikers WHERE email = '$dbemail' AND Wachtwoord = '$dbWachtwoord'";

            $result = mysqli_query($conn, $sql);
            $number = mysqli_num_rows($result);

            if ($number >= 1){
                session_start();
                $_SESSION['login'] = true;
                $_SESSION['email'] = $dbemail;
                header ("location: index.php");
            }
            }
        }
        ?>
    </div>
</div>

</body>
</html>
