<?php

session_start();

$id = htmlspecialchars($_SESSION["logged_in"]["id_user"]);
$pseudo = htmlspecialchars($_POST["pseudo"]);
$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["mdp"]);
$avatar = htmlspecialchars($_POST["avatar"]);

try {

    require("bddconfig.php");

    // Connexion à la base mysql
    $objBdd = new PDO("mysql:host=$bddserver;dbname=$bddname;charset=utf8", $bddlogin, $bddpass);  
    // En cas de problème renvoie dans le catch avec l'erreur
    $objBdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

    // on regarde si la saisie des mots de passe sont vides pour l'update
    if($password == "" && $cpassword == ""){

        // on met les variables de SESSION avec les nouvelles valeurs (values)

        $_SESSION["logged_in"]["pseudo"] = $pseudo;
        $_SESSION["logged_in"]["email"] = $email;
        $_SESSION["logged_in"]["mdp"] = $password;
        $_SESSION["logged_in"]["avatar"] = $avatar;

        // La requête qui va mettre à jour nos modif                                 vérifier si on met `password` = :password, ou `mdp` ou :mdp
        $recup = $objBdd ->prepare("UPDATE `users` SET `pseudo` = :pseudo, `email` = :email, `password` = :mdp, `avatar` = :avatar WHERE id_user = $id");

        
        // on initialise notre :pseudo avec la variable qui récup le pseudo
        $recup->bindParam(':pseudo' , $pseudo , PDO::PARAM_STR);
        // on initialise notre :email avec la variable qui récup le email
        $recup->bindParam(':email' , $email , PDO::PARAM_STR);
        // on initialise notre :password avec la variable qui récup le password
        $recup->bindParam(':mdp' , $password , PDO::PARAM_STR);
        // on initialise notre :avatar avec la variable qui récup l'avatar
        $recup->bindParam(':avatar' , $avatar , PDO::PARAM_STR);
        
        
        // execute la requête SQL
        $recup->execute();
    
    
    }else{
    
        // on regarde si la saisie des mots de passe est identique
        if($password == $cpassword){

            // on met les variables de SESSION avec les nouvelles valeurs (values)
            $_SESSION["logged_in"]["pseudo"] = $pseudo;
            $_SESSION["logged_in"]["email"] = $email;
            $_SESSION["logged_in"]["mdp"] = $password;                       // à verifier
            $_SESSION["logged_in"]["avatar"] = $avatar;
    
            // on bcrypt le mot de passe
            $password = password_hash($password , PASSWORD_BCRYPT);

            // La requête qui va mettre à jour nos modif
            $recup = $objBdd ->prepare("UPDATE `users` SET `pseudo` = :pseudo, `email` = :email , `password` = :password , `avatar` = :avatar  WHERE id_user = $id");

            // on initialise notre :pseudo avec la variable qui récup le pseudo
            $recup->bindParam(':pseudo' , $pseudo , PDO::PARAM_STR);
            // on initialise notre :email avec la variable qui récup le email
            $recup->bindParam(':email' , $email , PDO::PARAM_STR);
            // on initialise notre :mdp avec la variable qui récup le mdp
            $recup->bindParam(':mdp' , $password , PDO::PARAM_STR);         // à vérifier
            // on initialise notre :mdp avec la variable qui récup l'avatar
            $recup->bindParam(':avatar' , $avatar , PDO::PARAM_STR);
            // execute la requête SQL
            $recup->execute();

        }
    
    }
    
} catch(Exception $prmE) {
        die("Erreur : " . $prmE->getMessage());
}



header("Location: ../../index.php?page=accueil");       // vers accueil ou index.php ?
