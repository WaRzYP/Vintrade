<?php

$id = htmlspecialchars($_POST["id"]);
$pseudo = htmlspecialchars(addslashes($_POST["pseudo"]));
$messageAdd = htmlspecialchars(addslashes($_POST["message"]));

require("bdd/bddconfig.php");

try{


    $objBdd = new PDO("mysql:host=$bddserver;dbname=$bddname;charset=utf8", $bddlogin, $bddpass);  

    $objBdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $recup = $objBdd->prepare("UPDATE `message` SET `pseudo` = :pseudo , `message` = :messageAdd WHERE `id` = $id ");

    $recup->bindParam(':pseudo' , $pseudo , PDO::PARAM_STR);

    $recup->bindParam(':messageAdd' , $messageAdd , PDO::PARAM_STR);

    $recup->execute();

    header('Location: index.php');

}catch( Exception $prmE){


    die("ERREUR : " . $prmE->getMessage());

}