
<head>
    <link rel="stylesheet" href="assets/css/connexion.css">
</head>

<main id="main">

    <form method="POST" action="assets/bdd/connexion_action.php">

        <h3>Connexion</h3>

        <div class="content-form">
            <label for="email">Email *</label>
            <input type="email" name="email" required>
        </div>

        <div class="content-form">
            <label for="mdp">Mot de passe *</label>
            <input type="password" name="mdp" required>
        </div>

        <a href="inscription.php">S'inscrire</a>

        <div class="content-form">
            <input type="submit">
        </div>

    </form>

</main>
