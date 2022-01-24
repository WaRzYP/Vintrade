<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/connexion.css">

    <title>Connexion - Vintrade</title>
</head>

<body>

    <?php include "assets/templates/header.html" ?>

    <h1>Déjà inscrit ?</h1>

    <div class="connexion-box">

        <h2>Connexion</h2>

        <form method="POST" action="assets/bdd/connexion_action.php">

            <div class="user-box">
                <input type="text" name="" required="">
                <label>Email</label>
            </div>

            <div class="user-box">
                <input type="password">
                <label for="">Mot de passe</label>
            </div>

            <a href="">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Se connecter
            </a>

        </form>

    </div>
    <?php include "assets/templates/footer.html" ?>

</body>

</html>