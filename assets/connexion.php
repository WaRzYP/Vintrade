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

    <h1>Déjà inscrit ?</h1>

    <div class="connexion-box">

        <div class="content-form">
            <label id="btnHidden" for=" email">Email</label>
            <input id="btnHidden" type="email" name="email" required>
        </div>

        <form method="POST" id="form" action="assets/bdd/connexion_action.php">

            <div class="user-box">
                <input type="text" name="email" required>
                <label>Email</label>
            </div>

            <div class="user-box">
                <input name="mdp" type="password">
                <label for="">Mot de passe</label>
            </div>

            <button type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Se connecter
            </button>
        </form>

    </div>


</body>

</html>