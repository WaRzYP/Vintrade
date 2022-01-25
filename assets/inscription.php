<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

            <a id="inscription" href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                S'inscrire
            </a>

        </form>

    </div>


    <script src="assets/js/valid_form_inscription.js"></script>
</body>

</html>