<?php

$id_favoris = htmlspecialchars($_GET["id_favoris"]);

require("bddconfig.php");

try{

    // Connecte a la base mysql
    $objBdd = new PDO("mysql:host=$bddserver;dbname=$bddname;charset=utf8", $bddlogin, $bddpass);  
    // En cas de problème renvoie dans le catch avec l'erreur
    $objBdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // On va supp l'element en base de donnée grâce a l'id
    $recup = $objBdd->query("DELETE FROM `favoris` WHERE `id_favoris` = $id_favoris");

    // Renvoie sur la page index.php 
    header('Location: ../favoris.php');

}catch( Exception $prmE){

    // Affiche le message d'erreur
    die("ERREUR : " . $prmE->getMessage());

}