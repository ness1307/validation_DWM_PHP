<?php 
session_start();
($_SESSION['pseudo']);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Accueil</title>
</head>
<body>
    <header>
        <h1>Accueil</h1>
        <nav>
            <ul class="flex">
                <li><a href="./index.php">Accueil</a></li>
                <li><a href="./formulaire.html">Connexion</a></li>
                <li><a href="./controllers/deconnexion.php">Deconnexion</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php if (isset($_SESSION['pseudo'])): ?>
        <h1>Bonjour <?php echo $_SESSION['pseudo']; ?><h1>
        <?php else: ?>
        <h1>Veuillez vous connecter </h1>
        <?php endif ?>

    </main>
</body>
</html>