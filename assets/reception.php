<?php

require("bdd/bddconfig.php");


$bdd = new PDO("mysql:host=$bddserver;dbname=$bddname;charset=utf8", $bddlogin, $bddpass);

if (isset($_SESSION['logged_in']) and !empty($_SESSION['logged_in'])) {

    $msg = $bdd->prepare('SELECT * FROM chat WHERE id_receveur = ? ORDER BY id_chat DESC');

    // $msg->execute(array($_SESSION['id_user']));
    $msg_nbr = $msg->rowCount();
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Boîte de réception</title>
        <meta charset="utf-8" />
    </head>

    <body>
        <a href="profil.php?id=<?= $_SESSION['logged_in'] ?>">Profil</a> <a href="index.php?page=envoi">Nouveau message</a><br /><br /><br />
        <h3>Votre boîte de réception:</h3>
        <?php
        if ($msg_nbr == 0) {
            echo "Vous n'avez aucun message...";
        }
        while ($m = $msg->fetch()) {
            $p_exp = $bdd->prepare('SELECT pseudo FROM users WHERE id_user = ?');
            $p_exp->execute(array($m['id_expediteur']));
            $p_exp = $p_exp->fetch();
            $p_exp = $p_exp['pseudo'];
        ?>
            <a href="lecture.php?id=<?= $m['id'] ?>" <?php if ($m['lu'] == 1) { ?><span style="color:grey"><?php } ?><b><?= $p_exp ?></b> vous a envoyé un message<br />
            <b>Objet:</b> <?= $m['objet'] ?><?php if ($m['lu'] == 1) { ?></span><?php } ?></a><br />
            -------------------------------------<br />
        <?php } ?>
    </body>

    </html>
<?php } ?>