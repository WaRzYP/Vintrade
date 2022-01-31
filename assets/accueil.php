<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/accueil.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Vintrade - Accueil</title>
    <link rel="icon" href="assets/img/V.png">
</head>

<body>


    <?php if (isset($_SESSION['logged_in'])) {
        echo '<p class="bonjour">' . "Bienvenue, " . '<span class="bonjour-pseudo">' . $_SESSION['logged_in']['pseudo'] . '</span>' . " voici les annonces du moment : " . '</p>';
    } else {

        echo '<p class="bonjour"> Bienvenue, veuillez vous <a href="index.php?page=connexion">connecter</a> pour profiter pleinement du site</p>';
    }; ?>

    <?php

    require("assets/bdd/bddconfig.php");


    try {

        $objBdd = new PDO("mysql:host=$bddserver;dbname=$bddname;charset=utf8", $bddlogin, $bddpass);

        $objBdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $recup = $objBdd->query("SELECT * FROM `annonces`,`users` WHERE annonces.id_user = users.id_user ORDER BY date DESC ");
    } catch (Exception $prmE) {


        die("ERREUR : " . $prmE->getMessage());
    }


    ?>



    <div class="content-comment">

        <?php

        while ($messageSimple = $recup->fetch()) {

        ?>
            <div class="comment">

                <div class="content-image"><img class="image" src="assets/upload/<?php echo stripslashes($messageSimple["image"]); ?>" alt=""></div>

                <div class="titre-pseudo">

                    <div class="titre"> <?php echo stripslashes($messageSimple["titre"]); ?> </div>

                    <div class="pseudo"> Mis en ligne par : <?php echo stripslashes($messageSimple["pseudo"]); ?></div>

                </div>

                <div class="description">


                    <p class="prix"> <?php echo stripslashes($messageSimple["price"]); ?>€</p>

                    <p> <?php echo $messageSimple["date"]; ?> </p>

                </div>

            </div>
        <?php
        }
        ?>

    </div>
</body>

</html>