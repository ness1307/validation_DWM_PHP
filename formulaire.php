<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Formulaire</title>
</head>
<body>
    <h1>Enregistrement</h1>

    <?php require_once './templates/header.php' ?>
    <form action="index.php" method="post">
        
        <input type="checkbox" name="pseudo[]"  value="toto" />Toto><br>
        
        <label for="mdp">Mot de passe <br></label>
        <input type="password" name="mdp">
        
        <label for="age">Age <br></label>
        <input type="number" name="age">

        <input type="submit" value="Envoyer" />
    </form>
    <?php
    foreach($_POST['pseudo'] as $valeur) {
        echo " $valeur a été cochée<br> ";
    }
    if(!$_POST['pseudo']){
        echo "Rien n'a été cochée";
    }
    ?>
</body>
</html>