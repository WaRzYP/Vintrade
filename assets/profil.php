<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/profil.css">
    <title>Profil</title>
</head>
<body>

<?php 

// On recupère le fichier avec les configuration de la base de données 

require("bdd/bddconfig.php");

// Récupération des avis des autres utilisateurs

try{
    $id_user = $_GET["id_user"];
    // Connecte a la base mysql
    $objBdd = new PDO("mysql:host=$bddserver;dbname=$bddname;charset=utf8", $bddlogin, $bddpass);
    // En cas de problème renvoie dans le catch avec l'erreur
    $objBdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // ici on prepare notre requête SQL
    $recup = $objBdd->query("SELECT * FROM `users` WHERE users.id_user = $id_user");

    


}catch( Exception $prmE){

    // Affiche le message d'erreur
    die("ERREUR : " . $prmE->getMessage());

}
?>
<div class="content-profil">
        <?php 
            while($messageSimple = $recup->fetch()){   
        ?>        

        <div class="box">
           
            <?php echo stripslashes($messageSimple["pseudo"]) ?>    
                
            <?php echo stripslashes($messageSimple["avatar"]) ?>     

            <?php echo stripslashes($messageSimple["description"]) ?>
               
        </div>

            <?php 
            }
            ?>


<?php 

// On recupère le fichier avec les configuration de la base de données 

require("bdd/bddconfig.php");

// Récupération des avis des autres utilisateurs

try{
    $id_user = $_GET["id_user"];
    // Connecte a la base mysql
    $objBdd = new PDO("mysql:host=$bddserver;dbname=$bddname;charset=utf8", $bddlogin, $bddpass);
    // En cas de problème renvoie dans le catch avec l'erreur
    $objBdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // ici on prepare notre requête SQL
    $recup = $objBdd->query("SELECT * FROM `users`,`avis` WHERE avis.id_envoie = users.id_user AND users.id_user = $id_user");

    


}catch( Exception $prmE){

    // Affiche le message d'erreur
    die("ERREUR : " . $prmE->getMessage());

}
?>

<div class="content-favoris">
        <?php 
            while($messageSimple = $recup->fetch()){   
        ?>        

        <div class="box">
           
            <?php echo stripslashes($messageSimple["pseudo"]) ?>    
                
            <?php echo stripslashes($messageSimple["avatar"]) ?>     

            <?php echo stripslashes($messageSimple["message"]) ?>
               


        </div>
            <?php 
            }
            ?>
</div>

<div class="form-new-avis">
        <form method="POST" id="avis" action="assets/bdd/new_avis.php">
            <textarea name="" id="" cols="50" rows="5">Écris ton avis sur le vendeur ...</textarea>   
        </form>
         
        <input type="submit" value="envoyer">


</div>




</body>
</html>