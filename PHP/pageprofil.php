<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
	<link rel="stylesheet" type="text/css" href="profil.css">
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
            <li class="connexion"><a href="connexion.html">Se connecter</a></li>
        </ul>
    </div>

    <div class="fond">
        <div class="contenu">
            <div class="menu">
                <h2>BIENVENUE DANS VOTRE ESPACE</h2>
                <img src="profil.png" class="pfp">
                <button>Mes voyages</button>
                <button>Messagerie</button>
                <button>Mes favoris</button>
                <button>Mes infos perso</button>
            </div>

            <div class="profil">
                <br>
                <h1 style="margin-top: 0px;">VOTRE PROFIL</h1>
                <p><?php echo $_SESSION['user_name']?></p>
                <p><?php echo $_SESSION['user_firstname']?></p>
                <p><?php echo $_SESSION['user_address']?></p>
                <p><?php echo $_SESSION['user_email']?></p>
                <button class="modifier">Modifier mon profil</button>
            </div>
        </div>
    </div>

    <div class="info">
        <p>Nous contacter : +33 1 23 45 67 89</p>
        <p>Mail : trek-peaks@gmail.com</p>
        <p>Siège : 1 Pl. Samuel de Champlain, La Défense, 92400 Courbevoie</p>
    </div>
</body>
</html>
