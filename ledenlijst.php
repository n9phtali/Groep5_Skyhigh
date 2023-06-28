<?php
require_once "database/conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/87a9ed9bc2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="description" content="Content">
    <meta name="keywords" content="Keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sky High</title>
</head>
<body>
<div class="container">

</div>
<main>
    <h>LEDENLIJST</h>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Team Pagina</title>
        <style>
            body{
                background-image: url("https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.airbus.com%2Fen%2Fnewsroom%2Fpress-releases%2F2018-09-airbus-perlan-mission-ii-glider-soars-to-76000-feet-to-break-own&psig=AOvVaw2IcZpJRVXEHArGpkuqtz0b&ust=1687859762214000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCPi9493V4P8CFQAAAAAdAAAAABAE");
            }
            /*.team-container {
                            display: flex;
                            flex-wrap: wrap;
                justify-content: space-between;
                background-color: black;
            }*/
            .team-member {
                /*margin-top: 5%;*/
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                width: 80%;
                margin: auto;
                text-align: center;
                padding-top: 30px;
                padding-bottom: 1px;
                line-height: 1.5;
                /*background-color: red;*/
                flex-wrap: wrap;
            }
            .info:hover{
                background-color: #0ed8ee;
            }

            .team-member .info {

                flex-basis: 27%;
                background-color: rgb(0,0,0,0.1);
                /*background-color: blue;*/
                border-radius: 10px;
                margin-bottom: 30px;
                position: relative;
                overflow: hidden;
                padding: 9px 12px;
                padding-left: 50px;
                box-sizing: border-box;
            }
            p{
                font-family: "Bell MT", cursive;
                font-size: 15px;
                text-align: center;
            }
            .social-icons {
                list-style: none;
                padding: 0;
                margin-top: 10px;
            }

            .social-icons li {
                display: inline-block;
                margin-right: 5px;
            }

            .social-icons li:last-child {
                margin-right: 0;
            }

            .social-icons a {
                display: inline-block;
                width: 30px;
                height: 30px;
                /*background-color: white;*/

                text-align: center;
                line-height: 30px;
                font-size: 20px;
                text-decoration: none;
            }
            .info img{
                display: flex;
                width: 25%;
                height: 23%;
                margin-top: 10%;
                margin-right: 50px;
                padding-right: 20%;
            }
        </style>
        <script>
            function showInfo(member) {
                var info = member.nextElementSibling;
                if (info.style.display === "none") {
                    info.style.display = "block";
                } else {
                    info.style.display = "none";
                }
            }
        </script>
    </head>
    <body>
    <!--------------------    HTML CODE       -------------------->
    <!--    <h2>Ons Team</h2>-->

    <!--    <div class="team-container">-->


    <?php
    require_once "database/conn.php";

    $sql = "SELECT * FROM gebruikers";
    ?>

    <div class="team-member">
        <!--        </div>-->
        <?php
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_row()) {
                $voornaam = $row[1];
                $tussenvoegsel = $row[2];
                $achternaam = $row[3];
                $email = $row[4];
                $bio = $row[5]


                ?>

                <div class="info">
                    <img src="img/pdf.png" alt="Foto" width="200">
                    <h5><?php echo $voornaam; ?> <?php echo $tussenvoegsel; ?> <?php echo $achternaam; ?></h5>


                    <!--                <button onclick="showInfo(this)">Meer informatie</button>-->
                    <p><?php echo $email; ?></p>
                    <p><?php echo $bio; ?></p>

                    <ul class="social-icons">
                        <li><a href="https://www.linkedin.com/janesmith" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                        </li>
                        <li><a href="https://www.twitter.com/janesmith" target="_blank"><i class="fab fa-twitter"></i></a>
                        </li>
                        <!-- Voeg hier meer social media links toe -->
                    </ul>
                </div>


                <?php
            }
        }
        ?>

    </div>
    <!-- Voeg hier meer teamleden toe -->

    </div>


    </body>


</main>

</body>
</html>

