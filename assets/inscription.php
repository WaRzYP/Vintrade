

<head>

    <link rel="stylesheet" href="assets/css/inscription.css">

</head>

<main id="main">


    <form method="POST" action="assets/bdd/inscription_action.php">

        <h3>INSCRIPTION</h3>

        <div class="content-form">
            <label for="nom">Nom *</label>
            <input type="text" name="nom" required>
        </div>

        <div class="content-form">
            <label for="prenom">Prenom *</label>
            <input type="text" name="prenom" required>
        </div>

        <div class="content-form">
            <label for="pseudo">Pseudo *</label>
            <input type="text" name="pseudo" required>
        </div>

        <div class="content-form">
            <label for="email">Email *</label>
            <input type="email" name="email" required>
        </div>

        <div class="content-form">
            <label for="mdp">Mot de passe *</label>
            <input type="password" name="mdp" required>
        </div>

        <div class="content-form">
            <label for="mdp2">Confirmer mot de passe *</label>
            <input type="password" name="mdp2" required>
        </div>

        <a href="index.php?page=connexion">Se connecter</a>

        <div class="content-form">
            <input type="submit" value="ENVOYER">
        </div>

    </form>
</main>
