<?php
// PHP lui donne un nom temporaire
$tmpName = $_FILES['file']['tmp_name'];
// le nom du fichier
$name = $_FILES['file']['name'];
// recup la taille de t'image
$size = $_FILES['file']['size'];
// on recup les erreurs si il y en a 
$error = $_FILES['file']['error'];

$titre = htmlspecialchars($_POST["titre"]);
$message = htmlspecialchars($_POST["message"]);
$prix = htmlspecialchars($_POST["prix"]);
$localisation = htmlspecialchars($_POST["localisation"]);
$taille = htmlspecialchars($_POST["taille"]);
$theme = htmlspecialchars($_POST["theme"]);
$iduser = htmlspecialchars($_POST["iduser"]);


require("bddconfig.php");


try{

        // explode sépare la chaine => ( image.jpg -> ["image", "jpg"] ) Agis comme un split(".") en js 
        $tabExtension = explode('.', $name);
        //strtolower met en minuscule tout une String
        $extension = strtolower(end($tabExtension));
        //Extensions des images qu'on accepte seulement
        $extensions = ['jpg', 'png', 'jpeg', 'gif'];
        //Va permettre la vérification de la taille (ici c'est la taille a ne pas dépasser)
        $maxSize = 10000000;

    $objBdd = new PDO("mysql:host=$bddserver;dbname=$bddname;charset=utf8", $bddlogin, $bddpass);  
   
    $objBdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(in_array($extension, $extensions) && $size <= $maxSize && $error == 0){
        //Avoir un nom unique par fichier
        $uniqueName = uniqid('', true);
        // on "créer" le nom du fichier 
        $file_afterverif = $uniqueName.".".$extension;
        // Déplace le fichier vers notre dossier upload
        move_uploaded_file($tmpName, '../upload/'.$file_afterverif);


        $PDOinsert = $objBdd->prepare("INSERT INTO `annonces` (`titre`, `description`,`price`,`localisation`,`taille`,`themes`,`image`,`id_users`) VALUES
        (:titre , :description, :price, :localisation, :taille, :theme, :image, :iduser) ");

        $PDOinsert->bindParam(':titre' , $titre , PDO::PARAM_STR);
        $PDOinsert->bindParam(':description' , $message , PDO::PARAM_STR);
        $PDOinsert->bindParam(':image' , $file_afterverif , PDO::PARAM_STR);
        $PDOinsert->bindParam(':price' , $prix , PDO::PARAM_STR);
        $PDOinsert->bindParam(':localisation' , $localisation , PDO::PARAM_STR);
        $PDOinsert->bindParam(':taille' , $taille , PDO::PARAM_STR);
        $PDOinsert->bindParam(':theme' , $theme , PDO::PARAM_STR);
        $PDOinsert->bindParam(':iduser' , $iduser , PDO::PARAM_STR);
    
        $PDOinsert->execute();


        header('Location: index.php');
    }
}catch( Exception $prmE){


    die("ERREUR : " . $prmE->getMessage());

}
