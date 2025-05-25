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
        <style>
            .pagepanier{
                display:flex;
                flex-direction: column;
                align-items: center;
            }
    
            .pagepanier h1{
                font-size: 36px;
                color: #ffcd60;
            }
    
            .pagepanier p{
                font-size: 22px;
                color: white;
            }
            .pagepanier button{
                padding: 15px;
                font-size: 30px;
                border-radius: 8px; 
                border: 1px solid #000;
                background-color: rgb(255, 205, 96);
                color: white;
            }

            .avancee{
                margin: auto;
                background-color: rgba(9, 52, 28,0.8);
                box-shadow: 0 0 10px rgba(0, 0, 0, 1);
                border-radius: 8px;
                width: 80%;
                font-size: 20px;
                color: #ffcd60;
            }

            .block{
                margin: 30px;
                display: flex;
                justify-content: center;
                gap: 40px;
            }

            .panier{
                background-color: rgba(9, 52, 28,0.8);
                box-shadow: 0 0 10px rgba(0, 0, 0, 1);
                width: 1000px;
                border-radius: 8px;
                display: flex;
                flex-direction: column;
                align-items: center;
                min-height: fit-content;
            }

            .panier_liste {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .aligne{
                width: 700px;
                border-radius: 8px;
                display: flex;
                justify-content: center;
                background-color: rgba(255,255,255,0.5);
                gap: 10px;
                margin-bottom: 20px;
            }

            .aligne button{
                border: none;
                background-color: transparent;
            }

            .colonne{
                display: flex;
                flex-direction: column;
            }

            .paiement {
                background-color: rgba(9, 52, 28,0.8);
                box-shadow: 0 0 10px rgba(0, 0, 0, 1);
                width: 400px;
                height: 300px;
                border-radius: 8px;
            }

            .simple_btn{
                height: 30px; 
                width: 50px;
                color: black;
            }

        </style>
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
                        <h1>3 voyages maximum</h1>
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