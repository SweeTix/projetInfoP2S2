<?php
    session_start();
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

                <div class="voyages_profil">
                    <div class="recommandations">
                        <br>
                        <h1>Vos recommandations</h1>
                    </div>

                    <div class="voyages_payer">
                        <br>
                        <h1>Vos voyages payés</h1>
                        <br>
                        <div class="liste_voy">
                            <?php
                                $contenu = file_get_contents('voyages_payes.json');
                                $donnees = json_decode($contenu, true);

                                $utilisateur = $donnees[$_SESSION['user_email']];
                                foreach ($utilisateur as $voyage => $infos) {
                                    echo "<div class='voy'>";
                                    echo "Destination : " . $infos['destination'] . "<br>";
                                    echo "Date départ : " . $infos['dateDepart'] . "<br>";
                                    echo "Date retour : " . $infos['dateRetour'] . "<br>";
                                    echo "Nombre d'adultes : " . $infos['nbAdultes'] . "<br>";
                                    echo "Nombre d'enfants : " . $infos['nbEnfants'] . "<br>";
                                    echo "Logements : " . implode(', ', $infos['logements']) . "<br>";
                                    echo "Restaurations : " . implode(', ', $infos['restaurations']) . "<br>";
                                    echo "Activités : " . implode(', ', $infos['activites']) . "<br>";
                                    echo "Transports : " . implode(', ', $infos['transports']) . "<br>";
                                    echo "Prix : " . $infos['prix'] . "€ <br><br>";
                                    echo "</div>";
                                }
                            ?>
                        </div>
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