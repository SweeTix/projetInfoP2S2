<?php
    session_start();
    $chaine = isset($_SESSION['chaine']) ? $_SESSION['chaine'] : "Erreur !";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Page Inscription Réussie</title>
        <link rel="stylesheet" type="text/css" href="inscription_reussie.css">
    </head>
    <body>
        <div class="navbar">
            <ul>
                <li><a href="accueil.html"><img src="logo.png" alt="Logo" width="100" height="100"></a></li>
                <li><a href="information.html">Information</a></li>
                <li><a href="rechercher.html">Rechercher</a></li>
            </ul>
            <ul>
                <li class="inscription"><a href="inscription.html">S'inscrire</a></li>
                <li><a href="pageprofil.php"><img src="profil.png" alt="Profil" width="80" height="80"></a></li>
            </ul>
        </div>
        <div class="fond">
            <div class="titre">
                <h1><?php echo "$chaine"?></h1>
                <p>Vous pouvez maintent vous connectez, cliquer sur le bouton ci-dessous</p>
                <br>
                <button><a href="connexion.php">Connexion</a></button>
            </div>
        </div>
        <div class="info">
            <p>Nous contacter : +33 1 23 45 67 89</p>
            <p>Mail : trek-peaks@gmail.com</p>
            <p>Siège : 1 Pl. Samuel de Champlain, La Défense, 92400 Courbevoie</p>
        </div>
    </body>
</html>