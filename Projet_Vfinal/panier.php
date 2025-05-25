<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Panier</title>
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
            <div class="pagepanier">
                <div class="avancee">
                    <h1>Bienvenue dans votre panier</h1>
                </div>
                <div class="block">
                    <div class="panier">
                        <h1>Vos voyages</h1>
                        <?php
                            $contenu = file_get_contents('panier.json'); // Chaque ligne = 1 objet JSON
                            $donnees = json_decode($contenu, true);
                            $panier_util = $donnees[$_SESSION['user_email']];
                            $total = 0;

                            foreach ($panier_util as $voyages => $info) {
                                include('template_voyage_panier.php');

                                $total += $info['prix'];
                            }
                        ?>
                    </div>
                    <div class="paiement">
                        <h1>Prix Total</h1>
                        <p><?php echo $total ?></p>
                        <?php
                            require('getapikey.php');
                            $api_key = "zzzz";
                            $vendeur = 'MI-2_F' ;
                            $api_key = getAPIKey($vendeur);
                            if(preg_match("/^[0-9a-zA-Z]{15}$/", $api_key)) {
                                $transaction = uniqid();
                                $value = $total;
                                $retour = 'http://localhost/voyages_utilisateur.php?session=s';
                                $control = md5($api_key."#".$transaction."#".$value."#".$vendeur."#".$retour."#");

                                echo "<form action='https://www.plateforme-smc.fr/cybank/index.php' method='POST'>
                                        <input type='hidden' name='transaction' value='{$transaction}'>
                                        <input type='hidden' name='montant' value='{$value}'>
                                        <input type='hidden' name='vendeur' value='{$vendeur}'>
                                        <input type='hidden' name='retour' value='{$retour}'>
                                        <input type='hidden' name='control' value='{$control}'>
                                        <input type='submit' class='simple_btn' value='Valider et payer'>
                                    </form>";
                            }
                        ?>
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