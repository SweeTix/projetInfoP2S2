<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Panier</title>
        <link rel="stylesheet" href="panier.css">
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
            <div class="pagepanier">
                <div class="avancee">
                    <h1><div style="color: red;">1 Panier</div> ----------------------- 2 Paiement ---------------------- 3 Résumé</h1>
                </div>
                <div class="block">
                    <div class="panier">
                        <h1>Panier</h1>
                        <p>Votre panier est vide</p>
                        <button><a href="rechercher.php">Découvrir des voyages</a></button>
                    </div>
                    <div class="paiement">
                        <h1>Paiement</h1>
                        <p>Prix</p>
                        <button><a href="paiemant.php">Payer</a></button>
                    </div>
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
