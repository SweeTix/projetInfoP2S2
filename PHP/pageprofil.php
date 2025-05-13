<?php
    session_start();
    if(!isset($_SESSION['user_email'])){
        header("location: connexion.php");
        exit();
    }
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
                <li><a href="accueil.php"><img src="logo.png" alt="Logo" width="100" height="100"></a></li>
                <li><a href="information.php">Information</a></li>
                <li><a href="rechercher.php">Rechercher</a></li>
            </ul>
            <ul>
                <?php
                    if(isset($_SESSION['user_statut'])){
                        echo '<li><a href="panier.php"><img src="panier.png" alt="Panier" width="30" height="30"></a></li>';
                    }
                    if(isset($_SESSION['user_statut']) && $_SESSION['user_statut'] == 'admin'){
                        echo '<li><a href="administrateur.php">Admin</a></li>';
                    }
                ?>
                <li class="inscription"><a href="inscription.php">S'inscrire</a></li>
                <li><a href="pageprofil.php"><img src="profil.png" alt="Profil" width="80" height="80"></a></li>
            </ul>
        </div>

        <div class="fond">
            <div class="contenu">
                <div class="menu">
                    <h2>BIENVENUE DANS VOTRE ESPACE</h2>
                    <img src="profil.png" class="pfp">
                    <button><a href="pageprofil.php">Mes infos perso</a></button>
                    <button>Mes voyages</button>
                    <button>Messagerie</button>
                    <button>Mes favoris</button>
                    <button><a href="deconnexion.php">Déconnexion</a></button>
                </div>

                <div class="profil">
                    <br>
                    <h1 style="margin-top: 0px;">VOTRE PROFIL</h1>
                    <p>Nom : <?php echo $_SESSION['user_name']?></p>
                    <p>Prénom : <?php echo $_SESSION['user_firstname']?></p>
                    <p>Naissance : <?php echo $_SESSION['user_birth']?></p>
                    <p>Adresse : <?php echo $_SESSION['user_address']?></p>
                    <p>E-mail : <?php echo $_SESSION['user_email']?></p>
                    <p>Statut : <?php echo $_SESSION['user_statut']?></p>
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
