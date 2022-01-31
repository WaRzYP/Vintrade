<? echo "Bonjour" . $_SESSION['logged_in']['pseudo'] ?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <header>
    <div class="hauteur">
      <img src="assets/img/V.png" alt="Vintrade" class="v">

      <div class="connexion">
        <a href="index.php?page=connexion">Se Connecter</a>
        <a href="index.php?page=inscription">S'inscrire</a>
      </div>
    </div>
    <div class="img">
      <a href="index.php?page=accueil">
        <img src="assets/img/logo.png" class="logo" alt="Logo Vintrade">
      </a>
    </div>


    <nav>
      <div class="conteneur-nav">
        <label for="mobile">Afficher / Cacher le menu</label>
        <input type="checkbox" id="mobile" role="button">
        <ul>
          <li class="deroulant"><a href="#">Hommes</a>
            <ul class="sous">
              <li><a href="#">Voir tout</a></li>
              <li><a href="#">Vêtements</a></li>
              <li><a href="#">Acessoires</a></li>
              <li><a href="#">Chaussures</a></li>
              <li><a href="#">Soins</a></li>
            </ul>
          </li>
          <li class="deroulant"><a href="#">Femmes</a>
            <ul class="sous">
              <li><a href="#">Voir tout</a></li>
              <li><a href="#">Vêtements</a></li>
              <li><a href="#">Chaussures</a></li>
              <li><a href="#">Sacs</a></li>
              <li><a href="#">Beauté</a></li>
              <li><a href="#">Acessoires</a></li>
            </ul>
          </li>
          <li class="deroulant"><a href="#">Enfants</a>
            <ul class="sous">
              <li><a href="#">Voir tout</a></li>
              <li><a href="#">Jeux & Jouets</a></li>
              <li><a href="#">Fille</a></li>
              <li><a href="#">Garçon</a></li>
              <li><a href="#">Soins bébé</a></li>
              <li><a href="#">Garçon</a></li>
            </ul>
          </li>
          <li class="deroulant"><a href="#">Meubles</a>
            <ul class="sous">
              <li><a href="#">Voir tout</a></li>
              <li><a href="#">Mobiliers</a></li>
              <li><a href="#">Art de la table</a></li>
              <li><a href="#">Jardin</a></li>
              <li><a href="#">Décoration</a></li>

            </ul>
          </li>
          <li class="deroulant"><a href="#">Informatique</a>
            <ul class="sous">
              <li><a href="#">Voir tout</a></li>
              <li><a href="#">PC & PC Portable</a></li>
              <li><a href="#">Gaming</a></li>
              <li><a href="#">Composants</a></li>
              <li><a href="#">Matériels</a></li>

            </ul>
          </li>
          <li class="deroulant">
            <div class="recherche">
              <input type="search" id="site-search" placeholder="Recherche" name="q" aria-label="Search through site content" class="btn">

              <button><span class="iconify" data-icon="bx:bx-search-alt-2"></span></button>
            </div>
          </li>

        </ul>
      </div>
    </nav>




  </header>
  <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
</body>

</html>