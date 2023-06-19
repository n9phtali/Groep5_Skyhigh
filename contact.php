<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>

<?php include 'include/navbar.php'; ?>
    <section id="contact">
    <h1 class="headings">Contact</h1>
    <form action="" class="form">
        <input
            type="text"
            name="name"
            class="input"
            placeholder="Enter Your Name"
        />
        <input
            type="email"
            name="email"
            class="input"
            placeholder="Enter Your Email"
        />
        <textarea
            name="msg"
            id="msg"
            cols="30"
            rows="10"
            placeholder="Enter Your Message"
        ></textarea>
        <input type="submit" value="SEND" id="send" />
    </form>
</section>
</body>
</html>
