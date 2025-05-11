<?php
    session_start();
    $chaine = isset($_SESSION['chaine']) ? $_SESSION['chaine'] : "Erreur !";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Page Inscription Réussie</title>
        <link rel="stylesheet" type="text/css" href="SiteVrsTom.css">
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
                <li class="connexion"><a href="connexion.php">Se connecter</a></li>
            </ul>
        </div>
        <div class="fond">
            <div class="titre">
                <h1><?php echo "$chaine"?></h1>
                <p>Vous pouvez maintent vous connectez, cliquer sur le bouton ci-dessous</p>
                <br>
                <button style="padding: 15px; border-radius: 8px; border: 1px solid #000; margin: 10px 20px 30px 20px; font-size: 36px; background-color: rgb(255, 205, 96);"><a href="connexion.html">Connexion</a></button>
            </div>
        </div>
        <div class="info">
            <p>Nous contacter : +33 1 23 45 67 89</p>
            <p>Mail : trek-peaks@gmail.com</p>
            <p>Siège : 1 Pl. Samuel de Champlain, La Défense, 92400 Courbevoie</p>
        </div>
    </body>
</html>