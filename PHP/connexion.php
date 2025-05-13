<?php
    session_start();
    $erreur = "";
    if (isset($_GET['erreur'])) {
        if ($_GET['erreur'] == "mdp_incorrect") {
            $erreur = "Mot de passe incorrect. Veuillez réessayer.";
        } elseif ($_GET['erreur'] == "mauvais_email") {
            $erreur = "Adresse mail introuvable. Veuillez réessayer.";
        }
    }
?>

<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8">
        <title>Page Connexion</title>
		<link rel="stylesheet" type="text/css" href="inscription_connexion.css">
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
            
            <div class="formulaire">
                <h1>Connexion</h1>
                <form action="Verification.php" method="POST">
                    <?php if (!empty($erreur)): ?>
                        <p style="color: white; font-size: 36px"><?php echo $erreur; ?></p>
                    <?php endif; ?>
                    <input type="email" name="email" placeholder="E-mail" required>
                    <br>
                    <br>
                    <input type="password" name="mdp" placeholder="Mot de passe" required>
                    <br>
                    <br>
                    <button type="submit"><b>Se connecter</b></button>
                </form>
            </div>
        </div>
        <div class="info">
            <p>Nous contacter : +33 1 23 45 67 89</p>
            <p>Mail : trek-peaks@gmail.com</p>
            <p>Siège : 1 Pl. Samuel de Champlain, La Défense, 92400 Courbevoie</p>
        </div>
	</body>
</html>
