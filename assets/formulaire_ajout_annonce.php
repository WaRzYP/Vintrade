<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/annonces.css">

    <title>Ajoutez une annonce - Vintrade</title>
</head>

<body>

    <!-- CRUD -->

    <h1>Veuillez remplir les champs suivants</h1>
    <div class="formulaire">
        <form method="POST" action="assets/bdd/new_annonce.php" enctype="multipart/form-data">
            <div class="images">
                </label>

                <input id="input_file" type="file" name="file" accept=".jpg, .jpeg, .png, .gif">
                <label for="file">*(max 5Mo) </label>
            </div>

            <div class="user">
                <label for="titre">Titre de l'annonce</label>
                <input type="text" name="titre" id="titre" autofocus>
            </div>


            <div class="user">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="20" rows="5"></textarea>
            </div>
            <div class="user">
                <label for="categorie">Catégories</label>
                <select name="categorie" id="categorie">
                    <option value="t-shirt">T-shirts</option>
                    <option value="sweat">Sweat-shirts</option>
                    <option value="gilet">Gilets</option>
                    <option value="jean">Jeans</option>
                    <option value="accessoire">Accéssoires</option>
                    <option value="chaussure">Chaussures</option>
                </select>
            </div>
            <div class="user">
                <label for="prix">Prix</label>
                <input type="number" name="prix" id="prix">
            </div>
            <div class="user">
                <label for="local">Localisation</label>
                <input type="text" name="localisation" id="localisation">
            </div>
            <div class="user">
                <label for="taille">Taille</label>
                <select name="taille" id="taille">
                    <option value="s">S</option>
                    <option value="m">M</option>
                    <option value="l">L</option>
                    <option value="xl">XL</option>
                    <option value="xxl">XXL</option>
                </select>
            </div>
            <div class="user">

                <label for="theme">Themes</label>
                <select name="theme" id="theme">
                    <option value="vetements">Vétements</option>
                    <option value="accessoire">Accéssoires</option>
                    <option value="informatique">Informatique</option>
                    <option value="jouet et jeu video">Jouet & Jeux vidéo</option>
                    <option value="livre">Livres & Bandes déssinées</option>
                </select>
            </div>
            <input type="hidden" value="1" name="iduser">
            <div class="validation">
                <input type="submit" value="Envoyer">
            </div>

        </form>
    </div>
</body>

<script src="js/script_annonces.js"></script>
<script src="https://code.iconify.design/2/2.1.1/iconify.min.js"></script>

</html>