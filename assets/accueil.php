
<main>
    
    <a href="index.php?page=connexion">Connexion</a>
    <a href="index.php?page=inscription">Inscription</a>

    <?php 
    
    echo "Bonjour". $_SESSION['logged_in']['pseudo']

    ?>

</main>