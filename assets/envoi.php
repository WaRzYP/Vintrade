<?php

require("bdd/bddconfig.php");

if (isset($_SESSION['logged_in']) and !empty($_SESSION['logged_in'])) {

    $bdd = new PDO("mysql:host=$bddserver;dbname=$bddname;charset=utf8", $bddlogin, $bddpass);


    if (isset($_POST['envoi_message'])) {

        if (isset($_POST['destinataire'], $_POST['text'], $_POST['objet']) and !empty($_POST['destinataire']) and !empty($_POST['text']) and !empty($_POST['objet'])) {

            $destinataire = htmlspecialchars($_POST['d  ']);

            $text = htmlspecialchars($_POST['text']);

            $objet = htmlspecialchars($_POST['objet']);

            $id_destinataire = $bdd->prepare('SELECT id_receveur FROM chat WHERE id_receveur = ?');

            $id_destinataire->execute(array($destinataire));

            $dest_exist = $id_destinataire->rowCount();

            if ($dest_exist == 1) {

                $id_destinataire = $id_destinataire->fetch();

                $id_destinataire = $id_destinataire['logged_in'];

                $ins = $bdd->prepare('INSERT INTO chat(id_envoie,id_destinataire,text,objet) VALUES (?,?,?,?)');

                $ins->execute(array($_SESSION['logged_in'], $id_destinataire, $text, $objet));

                $error = "Votre message a bien été envoyé !";
            } else {
                $error = "Cet utilisateur n'existe pas...";
            }
        } else {
            $error = "Veuillez compléter tous les champs";
        }
    }
    $destinataires = $bdd->query('SELECT pseudo FROM users ORDER BY pseudo');
    if (isset($_GET['r']) and !empty($_GET['r'])) {
        $r = htmlspecialchars($_GET['r']);
    }
    if (isset($_GET['o']) and !empty($_GET['o'])) {
        $o = urldecode($_GET['o']);
        $o = htmlspecialchars($_GET['o']);
        if (substr($o, 0, 3) != 'RE:') {
            $o = "RE:" . $o;
        }
    }
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Envoi de message</title>
        <meta charset="utf-8" />
    </head>

    <body>
        <form method="POST">
            <!-- <select name="destinataire">
	            <?php while ($d = $destinataires->fetch()) { ?>
	            <option><?= $d['pseudo'] ?></option>
	            <?php } ?>
	         </select> -->
            <label>Destinataire:</label>
            <input type="text" name="destinataire" <?php if (isset($r)) {
                                                        echo 'value="' . $r . '"';
                                                    } ?> />
            <br /><br />
            <label>Objet:</label>
            <input type="text" name="objet" <?php if (isset($o)) {
                                                echo 'value="' . $o . '"';
                                            } ?> />
            <br /><br />
            <textarea placeholder="Votre message" name="message"></textarea>
            <br /><br />
            <input type="submit" value="Envoyer" name="envoi_message" />
            <br /><br />
            <?php if (isset($error)) {
                echo '<span style="color:red">' . $error . '</span>';
            } ?>
        </form>
        <br />
        <a href="index.php?page=reception">Boîte de réception</a>
    </body>

    </html>
<?php
}
?>