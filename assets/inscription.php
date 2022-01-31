<?php


if( $verif_co == 0){
    
    header("Location: index.php");
    
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="assets/css/inscription.css">
</head>

<body>

    <h1>Pas encore inscrit ?</h1>

    <div class="connexion-box">

        <h2>Inscription</h2>

        <form method="POST" id="form" action="assets/bdd/inscription_action.php">

            <div class="user-box">
                <input type="text" name="nom" required="required">
                <label>Nom *</label>
            </div>

            <div class="user-box">
                <input type="text" name="prenom" required="required">
                <label>Prenom *</label>
            </div>

            <div class="user-box">
                <input type="text" name="pseudo" required="required">
                <label>Pseudo *</label>
            </div>
            <div class="user-box">
                <input type="text" name="email" required="required">
                <label>Email *</label>
            </div>

            <div class="user-box">
                <input type="password" name="mdp" required="required">
                <label for="">Mot de passe *</label>
            </div>

            <div class="user-box">
                <input type="password" name="mdp2" required="required">
                <label for="">Confirmer Mot de passe *</label>
            </div>

            <button type="submit" >
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                S'inscrire
            </button>

            <br>

            <a class="bouton" href ='index.php?page=connexion'>Vers Connexion</a>

        </form>

    </div>

    <script src="assets/js/script.js"></script>
</body>

