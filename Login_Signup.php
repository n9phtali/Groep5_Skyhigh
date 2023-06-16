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
            <form>
                <label for="chk" aria-hidden="true">Registreren</label>
                <input
                        type="text"
                        name="txt"
                        placeholder="Gebruikersnaam"
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
                        name="pswd"
                        placeholder="Wachtwoord"
                        required=""
                />
                <button>Registreer</button>
            </form>
        </div>

        <div class="login">
            <form>
                <label for="chk" aria-hidden="true">Login</label>
                <input
                        type="email"
                        name="email"
                        placeholder="Email"
                        required=""
                />
                <input
                        type="password"
                        name="pswd"
                        placeholder="Wachtwoord"
                        required=""
                />
                <button>Login</button>
                <a href="forgot_password.php" id="fgt">Wachtwoord vergeten</a>

            </form>
        </div>
    </div>
</div>

</body>
</html>

