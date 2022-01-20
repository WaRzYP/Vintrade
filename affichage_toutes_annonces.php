<?php 

        

require("bdd/bddconfig.php");


try{
    
    $objBdd = new PDO("mysql:host=$bddserver;dbname=$bddname;charset=utf8", $bddlogin, $bddpass);
    
    $objBdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $recup = $objBdd->query("SELECT * FROM `message` ORDER BY date DESC ");

}catch( Exception $prmE){

    
    die("ERREUR : " . $prmE->getMessage());

}


?>
<?php 


require("bdd/bddconfig.php");


try{
    // Connecte a la base mysql
    $objBdd = new PDO("mysql:host=$bddserver;dbname=$bddname;charset=utf8", $bddlogin, $bddpass);
    // En cas de problème renvoie dans le catch avec l'erreur
    $objBdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // ici on prepare notre requête SQL
    $allImage = $objBdd->query("SELECT * FROM `file` ORDER BY id DESC ");

}catch( Exception $prmE){

    die("ERREUR : " . $prmE->getMessage());

}

?>
<div class="content-image">
    
        <?php while($image = $allImage->fetch()){ ?>

        <div class="div-image">

            <img src="upload/<?php echo $image['nom_fichier'] ?>" alt="image" >

        </div>

        <?php
        }
        $allImage->closeCursor(); 
        ?>

<div class="content-comment">
    
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
            
            <a href="delete_message.php?id=<?php echo $messageSimple["id"]; ?>">Supprimer</a>

            <a href="formulaire_update.php?id=<?php echo $messageSimple["id"]; ?>">Modifier</a>

            <a href="affichage_commentaire.php?id=<?php echo $messageSimple["id"]; ?>">Voir</a>
        
        </div>

    </div>
  <?php  
}
    ?>