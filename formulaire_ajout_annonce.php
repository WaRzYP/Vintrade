<head>
    <link rel="stylesheet" href="assets/css/annonces.css">
</head>

<!-- CRUD -->
<form method="POST" action="assets/bdd/new_annonce.php" enctype="multipart/form-data">
    <div>
        <input id="input_file" type="file" name="file" accept=".jpg, .jpeg, .png, .gif">
        <label for="file">*(max 1Mo) </label>
    </div>

    <div>
        <label for="titre">Titre de l'annonce</label>
        <input type="text" name="titre" id="titre" autofocus>
    </div>


    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>
    <div>
        <label for="categories">Catégories</label>
        <input type="text" name="categorie" id="categorie">
    </div>
    <label for="prix">Prix</label>
    <input type="number" name="prix">
    </div>
    <div>
        <label for="local">Localisation</label>
        <input type="text" name="localisation" id="localisation">
    </div>
    <div>
        <label for="taille">Taille</label>
        <select name="taille" id="taille">
            <option value="s">S</option>
            <option value="m">M</option>
            <option value="l">L</option>
            <option value="xl">XL</option>
            <option value="xxl">XXL</option>
        </select>
    </div>
    <div>

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
    <div>
        <input type="submit" value="Envoyer">
    </div>

</form>

<script src="assets/js/script_annonces.js"></script>