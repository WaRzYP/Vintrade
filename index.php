<?php

// on active les variables de session
session_start();

if (isset($_SESSION["logged_in"]['id'])) {

    $verif_co = $_SESSION["logged_in"]["id"];
} else {

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
</head>

<body>


    <?php require_once('assets/templates/header.php'); ?>


    <?php


    if (isset($_GET['page']) && file_exists("assets/" . $_GET['page'] . ".php")) {

        $page = "assets/" . $_GET['page'] . ".php";

        require_once($page);
    } else {

        require_once('assets/accueil.php');
    }

    ?>





    <?php require_once('assets/templates/footer.html'); ?>
</body>

</html>