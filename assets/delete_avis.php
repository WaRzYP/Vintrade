<?php

$id = htmlspecialchars($_GET["id"]);

require("bdd/bddconfig.php");

try{

    // Connecte a la base mysql
    $objBdd = new PDO("mysql:host=$bddserver;dbname=$bddname;charset=utf8", $bddlogin, $bddpass);  
    // En cas de problème renvoie dans le catch avec l'erreur
    $objBdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // On va supp l'element en base de donnée grâce a l'id
    $recup = $objBdd->query("DELETE FROM `avis` WHERE `message` = $id ");

    // Renvoie sur la page index.php 
    header('Location: index.php');

}catch( Exception $prmE){

    // Affiche le message d'erreur
    die("ERREUR : " . $prmE->getMessage());

}