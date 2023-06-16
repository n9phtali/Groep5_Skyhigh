<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />

    <link rel="stylesheet" href="./css/forgot_password.css" />
</head>
<body>
<?php include'include/navbar.php';?>
<div class="content">
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true" />

        <div class="signup">
            <form>
                <label for="chk" aria-hidden="true">Wachtwoord vergeten</label>
                Voer het e-mailadres van je account in. We sturen je dan een link om je wachtwoord opnieuw in te stellen.
                <input
                    type="email"
                    name="email"
                    placeholder="Email"
                    required=""
                />
                <button>Doorgaan</button>
                <a href="" id="forgot_pass">Wachtwoord vergeten</a>
            </form>

        </div>


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
    </div>
</div>

</body>
</html>
