<nav class="navbar">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="over_ons.php">Over ons</a></li>
        <li><a href="team.php">Media</a></li>
        <li><a href="contact.php">Contact</a></li>

        <?php
        session_start();
        if (isset($_SESSION['login'])) {
            ?>
            <li><a href="account_gegevens.php">Account</a></li>
            <li><a href="logout.php">logout</a></li>
            <?php



        }else{
            ?>
        <li><a href="login_signup.php">Login</a></li>
        <?php
        }

        ?>
    </ul>
</nav>