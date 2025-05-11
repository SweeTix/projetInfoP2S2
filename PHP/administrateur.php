<?php
$file = "utilisateurs.csv";
$utilisateurs = [];
$i = isset($_GET['i']) ? (int)$_GET['i'] : 0;

if (file_exists($file) && filesize($file) > 0) {
    $lignes = file($file, FILE_IGNORE_NEW_LINES);

    foreach ($lignes as $ligne) {
        list($nom, $prenom, $naissance, $adresse, $mail, $mdp, $statut) = explode(";", $ligne);
        $utilisateurs[] = [
            'nom' => $nom,
            'prenom' => $prenom,
            'naissance' => $naissance,
            'mail' => $mail,
            'mdp' => $mdp,
            'statut' => $statut
        ];
    }
}
?>

<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8">
        <title>Page Administrateur</title>
		<link rel="stylesheet" type="text/css" href="site.css">
	</head>
    <body>
        <div class="navbar">
            <ul>
                <li><a href="accueil.html"><img src="logo.png" alt="Logo" width="100" height="100"></a></li>
                <li><a href="description.html">Information</a></li>
                <li><a href="rechercher.html">Rechercher</a></li>
            </ul>
            <ul>
                <li class="inscription"><a href="inscription.html">S'inscrire</a></li>
                <li class="connexion"><a href="connexion.html">Se connecter</a></li>
            </ul>
        </div>
        
        <div class="fond">
            <div class="liste_util">
                <h1>Liste des utilisateurs</h1>
                <table>
                    <tr> 
                        <th>N°</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Naissance</th>
                        <th>Email</th>
                        <th>Mdp</th>
                        <th>Statut</th>
                        <th colspan=2>Action</th>
                    </tr>
                    <tr>
                        <?php
                            if (isset($utilisateurs[$i])) {
                                echo "<td>" . $i+1 . "</td>";
                                echo "<td>" . $utilisateurs[$i]['nom'] . "</td>";
                                echo "<td>" . $utilisateurs[$i]['prenom'] . "</td>";
                                echo "<td>" . $utilisateurs[$i]['naissance'] . "</td>";
                                echo "<td>" . $utilisateurs[$i]['mail'] . "</td>";
                                echo "<td>" . $utilisateurs[$i]['mdp'] . "</td>";
                                echo "<td>" . $utilisateurs[$i]['statut'] . "</td>";
                                echo "<td><button class='vip'>VIP</button>";
                                echo "<td><button class='ban'>Bannir</button>";
                            } else {
                                echo "<td>" . $i+1 . "</td>";
                                echo "<td colspan='8'>&nbsp;</td>";
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            if (isset($utilisateurs[$i+1])) {
                                echo "<td>" . $i+2 . "</td>";
                                echo "<td>" . $utilisateurs[$i+1]['nom'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+1]['prenom'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+1]['naissance'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+1]['mail'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+1]['mdp'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+1]['statut'] . "</td>";
                                echo "<td><button class='vip'>VIP</button>";
                                echo "<td><button class='ban'>Bannir</button>";
                            } else {
                                echo "<td>" . $i+2 . "</td>";
                                echo "<td colspan='8'>&nbsp;</td>";
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            if (isset($utilisateurs[$i+2])) {
                                echo "<td>" . $i+3 . "</td>";
                                echo "<td>" . $utilisateurs[$i+2]['nom'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+2]['prenom'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+2]['naissance'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+2]['mail'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+2]['mdp'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+2]['statut'] . "</td>";
                                echo "<td><button class='vip'>VIP</button>";
                                echo "<td><button class='ban'>Bannir</button>";
                            } else {
                                echo "<td>" . $i+3 . "</td>";
                                echo "<td colspan='8'>&nbsp;</td>";
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            if (isset($utilisateurs[$i+3])) {
                                echo "<td>" . $i+4 . "</td>";
                                echo "<td>" . $utilisateurs[$i+3]['nom'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+3]['prenom'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+3]['naissance'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+3]['mail'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+3]['mdp'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+3]['statut'] . "</td>";
                                echo "<td><button class='vip'>VIP</button>";
                                echo "<td><button class='ban'>Bannir</button>";
                            } else {
                                echo "<td>" . $i+4 . "</td>";
                                echo "<td colspan='8'>&nbsp;</td>";
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            if (isset($utilisateurs[$i+4])) {
                                echo "<td>" . $i+5 . "</td>";
                                echo "<td>" . $utilisateurs[$i+4]['nom'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+4]['prenom'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+4]['naissance'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+4]['mail'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+4]['mdp'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+4]['statut'] . "</td>";
                                echo "<td><button class='vip'>VIP</button>";
                                echo "<td><button class='ban'>Bannir</button>";
                            } else {
                                echo "<td>" . $i+5 . "</td>";
                                echo "<td colspan='8'>&nbsp;</td>";
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            if (isset($utilisateurs[$i+5])) {
                                echo "<td>" . $i+6 . "</td>";
                                echo "<td>" . $utilisateurs[$i+5]['nom'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+5]['prenom'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+5]['naissance'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+5]['mail'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+5]['mdp'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+5]['statut'] . "</td>";
                                echo "<td><button class='vip'>VIP</button>";
                                echo "<td><button class='ban'>Bannir</button>";
                            } else {
                                echo "<td>" . $i+6 . "</td>";
                                echo "<td colspan='8'>&nbsp;</td>";
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            if (isset($utilisateurs[$i+6])) {
                                echo "<td>" . $i+7 . "</td>";
                                echo "<td>" . $utilisateurs[$i+6]['nom'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+6]['prenom'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+6]['naissance'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+6]['mail'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+6]['mdp'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+6]['statut'] . "</td>";
                                echo "<td><button class='vip'>VIP</button>";
                                echo "<td><button class='ban'>Bannir</button>";
                            } else {
                                echo "<td>" . $i+7 . "</td>";
                                echo "<td colspan='8'>&nbsp;</td>";
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            if (isset($utilisateurs[$i+7])) {
                                echo "<td>" . $i+8 . "</td>";
                                echo "<td>" . $utilisateurs[$i+7]['nom'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+7]['prenom'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+7]['naissance'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+7]['mail'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+7]['mdp'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+7]['statut'] . "</td>";
                                echo "<td><button class='vip'>VIP</button>";
                                echo "<td><button class='ban'>Bannir</button>";
                            } else {
                                echo "<td>" . $i+8 . "</td>";
                                echo "<td colspan='8'>&nbsp;</td>";
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            if (isset($utilisateurs[$i+8])) {
                                echo "<td>" . $i+9 . "</td>";
                                echo "<td>" . $utilisateurs[$i+8]['nom'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+8]['prenom'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+8]['naissance'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+8]['mail'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+8]['mdp'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+8]['statut'] . "</td>";
                                echo "<td><button class='vip'>VIP</button>";
                                echo "<td><button class='ban'>Bannir</button>";
                            } else {
                                echo "<td>" . $i+9 . "</td>";
                                echo "<td colspan='8'>&nbsp;</td>";
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            if (isset($utilisateurs[$i+9])) {
                                echo "<td>" . $i+10 . "</td>";
                                echo "<td>" . $utilisateurs[$i+9]['nom'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+9]['prenom'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+9]['naissance'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+9]['mail'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+9]['mdp'] . "</td>";
                                echo "<td>" . $utilisateurs[$i+9]['statut'] . "</td>";
                                echo "<td><button class='vip'>VIP</button>";
                                echo "<td><button class='ban'>Bannir</button>";
                            } else {
                                echo "<td>" . $i+10 . "</td>";
                                echo "<td colspan='8'>&nbsp;</td>";
                            }
                        ?>
                    </tr>
                </table>
                <?php
                    if ($i == 0){
                        echo '<a style="margin:10px" href="?i=' . ($i + 10) . '">Suivant</a>';
                    }
                    elseif (!isset($utilisateurs[$i+10])){
                        echo '<a style="margin:10px" href="?i=' . ($i - 10) . '">Précédent</a>';
                    }
                    else {
                        echo '<a style="margin:10px" href="?i=' . ($i - 10) . '">Précédent</a>';
                        echo '<a style="margin:10px" href="?i=' . ($i + 10) . '">Suivant</a>';
                    }
                ?>
            </div>    
        </div>
        <div class="info">
            <p>Nous contacter : +33 1 23 45 67 89</p>
            <p>Mail : trek-peaks@gmail.com</p>
            <p>Siège : 1 Pl. Samuel de Champlain, La Défense, 92400 Courbevoie</p>
        </div>
	</body>
</html>