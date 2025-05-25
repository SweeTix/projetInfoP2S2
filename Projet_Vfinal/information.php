<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Information</title>
    <link rel="stylesheet" href="site.css">
</head>
<body>

    <div class="navbar">
        <ul>
            <li><a href="accueil.php"><img src="logo.png" alt="Logo" width="100" height="100"></a></li>
            <li><a href="information.php">Information</a></li>
            <li><a href="rechercher.php">Rechercher</a></li>
        </ul>
        <ul>
            <?php
                    if(isset($_SESSION['user_statut'])){
                        echo '<li><a href="panier.php"><img src="panier.png" alt="Panier" width="30" height="30"></a></li>';
                    }
            ?>
            <li class="inscription"><a href="inscription.php">S'inscrire</a></li>
            <li><a href="pageprofil.php"><img src="profil.png" alt="Profil" width="80" height="80"></a></li>
        </ul>
    </div>

    <div class="fond">
        <div class="titre">
            <h1>Trek & Peaks</h1>
            <br>
            <p>
                Notre agence de voyage est née d’une passion commune pour la montagne et l’aventure. 
                Amoureux des grands espaces et avides de découvertes, nous avons voulu partager notre enthousiasme en créant une entreprise dédiée aux voyages en altitude. 
                Notre mission est d’offrir des expériences uniques au cœur des plus belles chaînes de montagnes du monde, en alliant exploration, sport et immersion culturelle. 
                Nous croyons en un tourisme respectueux de la nature et des populations locales, favorisant des pratiques durables et responsables. 
                L’authenticité, l’évasion et le dépassement de soi sont au cœur de nos valeurs, et nous mettons tout en œuvre pour que chaque voyage soit une aventure inoubliable, 
                adaptée aux envies et aux niveaux de chacun.
            </p>
        </div>
    </div>

    <div class="info">
        <p>Nous contacter : +33 1 23 45 67 89</p>
        <p>Mail : trek-peaks@gmail.com</p>
        <p>Siège : 1 Pl. Samuel de Champlain, La Défense, 92400 Courbevoie</p>
    </div>
    
</body>
</html>
