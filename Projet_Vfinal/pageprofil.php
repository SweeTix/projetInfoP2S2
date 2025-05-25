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
        <link rel="stylesheet" type="text/css" href="site.css">
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
            <div class="contenu">
                <div class="menu">
                    <h2>BIENVENUE DANS VOTRE ESPACE</h2>
                    <img src="profil.png" class="pfp">
                    <?php
                        if(isset($_SESSION['user_statut']) && $_SESSION['user_statut'] == 'admin'){
                            echo '<button><a href="administrateur.php">Admin</a></button>';
                        }
                    ?>
                    <button><a href="pageprofil.php">Mes infos perso</a></button>
                    <button><a href="voyages_utilisateur.php">Mes voyages</a></button>
                    <button><a href="deconnexion.php">Déconnexion</a></button>
                </div>

                <div class="profil">
                    <br>
                    <h1 style="margin-top: 0px;">VOTRE PROFIL</h1>
                    <form method="POST" action="modif_profil.php">
                        <div class="field" id="field-username">
                            <label for="username">Nom d'utilisateur</label>
                            <input type="text" id="username" name="username" value="<?= isset($_SESSION["user_name"]) ? htmlspecialchars($_SESSION["user_name"]) : '' ?>" readonly data-original="<?= htmlspecialchars($_SESSION["user_name"] ?? '') ?>">
                            <button type="button" onclick="editField('username')"><img src="stylo.png" alt="Stylo" width="40" height="40"></button>
                            <button type="button" onclick="validateField('username')" hidden>Valider</button>
                            <button type="button" onclick="cancelField('username')" hidden>Annuler</button>
                        </div>
                        <div class="field" id="field-firstname">
                            <label for="firstname">Prénom</label>
                            <input type="firstname" id="firstname" name="firstname" value="<?= isset($_SESSION["user_firstname"]) ? htmlspecialchars($_SESSION["user_firstname"]) : '' ?>" readonly data-original="<?= htmlspecialchars($_SESSION["user_firstname"] ?? '') ?>">
                            <button type="button" onclick="editField('firstname')"><img src="stylo.png" alt="Stylo" width="40" height="40"></button>
                            <button type="button" onclick="validateField('firstname')" hidden>Valider</button>
                            <button type="button" onclick="cancelField('firstname')" hidden>Annuler</button>
                        </div>
                        <div class="field" id="field-birth">
                            <label for="birth">Date de naissance</label>
                            <input type="date" id="birth" name="birth" value="<?= isset($_SESSION["user_birth"]) ? htmlspecialchars($_SESSION["user_birth"]) : '' ?>" readonly data-original="<?= htmlspecialchars($_SESSION["user_birth"] ?? '') ?>">
                            <button type="button" onclick="editField('birth')"><img src="stylo.png" alt="Stylo" width="40" height="40"></button>
                            <button type="button" onclick="validateField('birth')" hidden>Valider</button>
                            <button type="button" onclick="cancelField('birth')" hidden>Annuler</button>
                        </div>
                        <div class="field" id="field-address">
                            <label for="address">Adresse</label>
                            <input type="text" id="address" name="address" value="<?= isset($_SESSION["user_address"]) ? htmlspecialchars($_SESSION["user_address"]) : '' ?>" readonly data-original="<?= htmlspecialchars($_SESSION["user_address"] ?? '') ?>">
                            <button type="button" onclick="editField('address')"><img src="stylo.png" alt="Stylo" width="40" height="40"></button>
                            <button type="button" onclick="validateField('address')" hidden>Valider</button>
                            <button type="button" onclick="cancelField('address')" hidden>Annuler</button>
                        </div>
                        <div class="field" id="field-email">
                            <label for="email">E-mail</label>
                            <input type="text" id="email" name="email" value="<?= isset($_SESSION["user_email"]) ? htmlspecialchars($_SESSION["user_email"]) : '' ?>" readonly data-original="<?= htmlspecialchars($_SESSION["user_email"] ?? '') ?>">
                            <button type="button" onclick="editField('email')"><img src="stylo.png" alt="Stylo" width="40" height="40"></button>
                            <button type="button" onclick="validateField('email')" hidden>Valider</button>
                            <button type="button" onclick="cancelField('email')" hidden>Annuler</button>
                        </div>
                        <div class="field" id="field-password">
                            <label for="password">Nom d'utilisateur</label>
                            <input type="password" id="password" name="password" value="<?= isset($_SESSION["user_password"]) ? htmlspecialchars($_SESSION["user_password"]) : '' ?>" readonly data-original="<?= htmlspecialchars($_SESSION["user_password"] ?? '') ?>">
                            <button type="button" onclick="editField('password')"><img src="stylo.png" alt="Stylo" width="40" height="40"></button>
                            <button type="button" onclick="validateField('password')" hidden>Valider</button>
                            <button type="button" onclick="cancelField('password')" hidden>Annuler</button>
                        </div>
                        <button id="submitBtn" type="submit" hidden>Soumettre</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="info">
            <p>Nous contacter : +33 1 23 45 67 89</p>
            <p>Mail : trek-peaks@gmail.com</p>
            <p>Siège : 1 Pl. Samuel de Champlain, La Défense, 92400 Courbevoie</p>
        </div>
        <script src="pageprofil.js"></script>
    </body>
</html>
