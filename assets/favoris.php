<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/favoris.css">
    <title>Favoris</title>
</head>
<body>

    <h1>Vos favoris</h1>



        <?php 

    // On recupère le fichier avec les configuration de la base de données 

    require("bdd/bddconfig.php");


    try{
        // Connecte a la base mysql
        $objBdd = new PDO("mysql:host=$bddserver;dbname=$bddname;charset=utf8", $bddlogin, $bddpass);
        // En cas de problème renvoie dans le catch avec l'erreur
        $objBdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // ici on prepare notre requête SQL
        $recup = $objBdd->query("SELECT * FROM `favoris`,`annonces` WHERE favoris.id_objet = annonces.id_annonce");

        


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
           
            <a href="bdd/delete_favoris.php?id_favoris=<?php echo stripslashes($messageSimple["id_favoris"])?>">Supprimer</a>

               
            
            <div class="polo">
                    <img class="test" src="/img/polo.jpg" alt="">
            </div>

                <div class="descri">
                     <?php echo stripslashes($messageSimple["id_favoris"]); ?>
                </div>     

        </div>
            <?php 
            }
            ?>


    </div>





    <?php include ('templates/footer.php'); ?>
</body>
</html>