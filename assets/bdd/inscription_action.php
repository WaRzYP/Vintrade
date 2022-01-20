<?php 

$nom = htmlspecialchars($_POST["nom"]);
$prenom = htmlspecialchars($_POST["prenom"]);
$pseudo = htmlspecialchars($_POST["pseudo"]);
$email = htmlspecialchars(strtolower($_POST["email"]));
$password_clair =  htmlspecialchars(strval($_POST["mdp"]));
$confirm_password = htmlspecialchars(strval($_POST["mdp2"]));

$avatar = "avatar.png";


if( $nom != "" && $prenom != "" && $pseudo != ""  && $email != ""  && $password_clair != ""  && $confirm_password != "") {

    
    if( $password_clair == $confirm_password){


        $hash_password = password_hash( $password_clair, PASSWORD_BCRYPT);

        require("bddconfig.php");

        try {


            $objBdd = new PDO("mysql:host=$bddserver;dbname=$bddname;charset=utf8", $bddlogin, $bddpass);  
            
            $objBdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $PDOinsertuserweb = $objBdd->prepare("INSERT INTO  `users` ( nom, prenom, avatar, pseudo, email, mdp) VALUES ( :nom, :prenom, :avatar,:pseudo, :email, :password)");

            $PDOinsertuserweb->bindParam(':nom', $nom, PDO::PARAM_STR); 
            
            $PDOinsertuserweb->bindParam(':prenom', $prenom, PDO::PARAM_STR);

            $PDOinsertuserweb->bindParam(':avatar', $avatar, PDO::PARAM_STR);

            $PDOinsertuserweb->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
            
            $PDOinsertuserweb->bindParam(':email', $email, PDO::PARAM_STR);

            $PDOinsertuserweb->bindParam(':password', $hash_password, PDO::PARAM_STR);
            
            $PDOinsertuserweb->execute();

            header("Location: ../../index.php");
    
        } catch (Exception $prmE) {
            die('Erreur : ' . $prmE->getMessage());
        }

    }

}else{
    header("Location: ../../index.php?page=inscription");
}
