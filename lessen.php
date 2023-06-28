<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/lessen.css" />
    <title>Lessen</title>
    <style>
        .class-schedule {
            margin-bottom: 20px;
        }

        .class-day {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .class-details {
            margin-bottom: 5px;
        }

        form {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<?php include'include/navbar.php';?>

<h1 style="text-align: center;">Lessen</h1>

<div class="class-schedule" id="class-schedule">
    <div class="class-day">Maandag</div>
    <ul>
        <li class="class-details">10:00  - 12:00 , Yheazly Geyteman, yhaezlygeyteman@gmail.com, 0678739494 Vliegveld A</li>
    </ul>
    <div class="class-day">Woensdag</div>
    <ul>
        <li class="class-details">14:00  - 16:00 , Nizar Naphtali, niznaph@gmail.com, 0688919384 Vliegveld B</li>
    </ul>
    <div class="class-day">Vrijdag</div>
    <ul>
        <li class="class-details">9:00  - 11:00 , Michael Johnson, mj@gmail.com 06788873489 Vliegveld C</li>
    </ul>
</div>
</center>

<h2>Contact</h2>
<form id="contact-form">
    <label for="name">Naam:</label>
    <input type="text" id="name" required><br>
    <label for="email">Email:</label>
    <input type="email" id="email" required><br>
    <label for="message">Bericht:</label>
    <textarea id="message" required placeholder="Vul volledig op welke tijd en datum u wilt lesvolgen en met hoveel mensen."></textarea><br>
    <input type="submit" value="Stuur bericht">

</form>

<style>
    /* Add this style block to change text color to white */
    body,
    h1,
    p {
        color: #F5F5F5;
    }
</style>
</head>
.