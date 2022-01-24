<head>
    <link rel="stylesheet" href="css/annonces.css">
</head>

<!-- CRUD -->
<form method="POST" action="bdd/new_annonce.php" enctype="multipart/form-data">
    <div>
        <input id="input_file" type="file" name="file" accept=".jpg, .jpeg, .png, .gif">
        <label for="file">*(max 1Mo) </label>
    </div>

    <div>
        <label for="titre">Titre de l'annonse</label>
        <input type="text" name="titre" id="titre" autofocus>
    </div>


    <div>
        <label for="description">Descripsion</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>
    <div>
        <label for="categories">Catégori</label>
        <input type="text" name="categorie" id="categorie">
    </div>
    <label for="prix">Pris</label>
    <input type="number" name="prix">
    </div>
    <div>
        <label for="local">Localisasion</label>
        <input type="text" name="localisation" id="localisation">
    </div>
    <div>
        <label for="taille">Taile</label>
        <select name="taille" id="taille">
            <option value="s">S</option>
            <option value="m">M</option>
            <option value="l">L</option>
            <option value="xl">XL</option>
            <option value="xxl">XXL</option>
        </select>
    </div>
    <div>

        <label for="theme">Themmes</label>
        <select name="theme" id="theme">
            <option value="vetements">Vétemmments</option>
            <option value="accessoire">Acceussoires</option>
            <option value="informatique">Informatiqueu</option>
            <option value="jouet et jeu video">Joueet & Jeus vidéo</option>
            <option value="livre">Lives & Bande déssiné</option>
        </select>
    </div>
    <input type="hidden" value="1" name="iduser">
    <div>
        <input type="submit" value="Envoyer">
    </div>

</form>

<script src="js/script_annonces.js"></script>