<head>
    <title>Modifier son compte</title>
    <link rel="stylesheet" href="assets/css/modifier_mon_compte.css">
</head>

<body>


    <h1>Modifier son compte</h1>
    
    <div class="avatar">

        </label>

            <input id="input_file" type="file" name="file" accept=".jpg, .jpeg, .png, .gif">

        <label for="file">*(max 5Mo) </label>
        
    </div>


    <div class="connexion-box">


        <form method="POST" id="form" action="assets/bdd/update_compte_action.php">

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

            <button type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Modifier
            </button>

        </form>

    </div>

    <!-- ajout de js/script.js-->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/valid_form_inscription.js"></script>
</body>

</html>