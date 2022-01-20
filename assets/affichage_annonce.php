<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Vintrade</title>
</head>
<body>



<?php include("templates/header.html"); ?>



<?php 


$id = $_GET['id'];



 require("bdd/bddconfig.php");
  
 try{
 
     $objBdd = new PDO("mysql:host=$bddserver;dbname=$bddname;charset=utf8", $bddlogin, $bddpass);

     $objBdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     $recup = $objBdd->query("SELECT * FROM `annonces` WHERE `id` = $id ");

 }catch( Exception $prmE){


     die("ERREUR : " . $prmE->getMessage());

 }

?>


<?php

    while($messageSimple = $recup->fetch()){

?>

    <div class="box">
        
        <div class="pseudo-date">
           
            <h2> <?php echo stripslashes($messageSimple["pseudo"]); ?> </h2>
            
            <p> <?php echo $messageSimple["date"]; ?> </p>
        </div>
        <div class="message">
            
            <p> <?php echo stripslashes($messageSimple["message"]); ?></p>
            
            <a href="delete_message.php?id=<?php echo $messageSimple["id"] ?>">Supprimer</a>

            <a href="formulaire_update.php?id=<?php echo $messageSimple["id"] ?>">Modifier</a>
        
        </div>

    </div>


<?php 
}
?>


<!-- recupère le footer et l'affiche sur notre page -->
<?php include("footer.html"); ?>


    
</body>
</html>