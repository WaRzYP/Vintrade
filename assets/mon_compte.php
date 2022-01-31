<?php

//  si 0 ==  l'utilisateur n'est pas connecté
if( $verif_co == 0){
    // du coup retour à
    header("Location: index.php");
    
}

?>


<head>
    <link rel="stylesheet" href="assets/css/mon_compte.css">
    <title>Mon compte</title>
</head>
<body>



    <div class="content-description">

            <div class="content-avatar">

                <div class="avatar"></div>
                <div class="pseudo-avis">
                    <p>Baptiste.L</p>
                    <p>Avis des utilisateurs : ***** (155 évaluations) </p>
                </div>

            </div>

        <div class="description-profil">
            <p>À propos : </p>
            <p>Toulouse, France</p>
            <p>xxx abonnés, xxx abonnements.</p>
            <p>Description de l'utilisateur : </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque rerum minima nam deleniti, omnis cupiditate voluptatem laudantium alias, incidunt officia voluptatibus perferendis excepturi eum asperiores fuga, eligendi laboriosam dolorum porro!
            Enim soluta accusantium omnis nulla assumenda quam officiis tempora quis obcaecati ea quibusdam unde laboriosam voluptas, aspernatur quasi laborum magnam dolor harum! Qui aliquam expedita adipisci dicta rem itaque perferendis.</p>
        </div>

        <a class="button" href = 'index.php?page=modifier_mon_compte'>Modifier mon compte</a>

    </div>


</body>
</html>