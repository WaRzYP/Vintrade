

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Vintrade</title>
</head>
<body>
    
    
    <?php
    
    // include("header.html");
    
    ?>


    <form method="POST" action="update_message.php">
        
        
        <input type="text" name="pseudo">
        
        <textarea name="message" id="message" cols="30" rows="10"></textarea>

       
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($_GET['id']) ?>">

        <input type="submit" value="ENVOYER">
        
        
    </form>

    <?php
        
        
        include("footer.html");
        
    ?>

</body>
</html>