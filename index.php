<?php

// on active les variables de session
session_start();

// on regarde di la variable crée avec la page de connexion est créé
if (isset($_SESSION["logged_in"]['id'])) {
    // si elle est créé alors on initialise la variable verif_co avec son id
    $verif_co = $_SESSION["logged_in"]["id"];
} else {
    // si elle n'est pas crée alors la variable verif_co est à 0
    $verif_co = 0;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="css/template.css">
    <title>Document</title>
</head>

<body>


    <!-- on recup le fichier du header et on l'affiche  -->
    <?php require_once('assets/templates/header.html'); ?>


    <?php

    // on regarde si dans l'url la variable existe et on verifie 
    // si le fichier demander grace a la variable dans url existe aussi
    if (isset($_GET['page']) && file_exists("assets/" . $_GET['page'] . ".php")) {
        // on recupère le fichier et on l'affiche sur la page

        $page = "assets/" . $_GET['page'] . ".php";
        // echo $page;
        require_once($page);
    } else {
        // si le fichier et la variable n'existe pas alors on retourne a l'accueil
        require_once('assets/accueil.php');
    }

    ?>

    <!-- on recup le fichier du footer et on l'affiche  -->
    <?php require_once('assets/templates/footer.html'); ?>



</body>

</html>