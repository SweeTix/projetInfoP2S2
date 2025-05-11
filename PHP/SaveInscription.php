<?php
    session_start();
    $fichier = "utilisateurs.csv";
    $lignes = [];
    $utilisateur = [];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $naissance = $_POST['naissance'];
        $adresse = $_POST['adresse'];
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
        $statut = "utilisateur";

        if(!empty($nom) && !empty($prenom) && !empty($naissance) && !empty($adresse) && !empty($email) && !empty($mdp) && !empty($statut)){
            $donneeUtilisateur = "$nom;$prenom;$naissance;$adresse;$email;$mdp;$statut"."\n";
            if(!file_exists($fichier)){
                file_put_contents($fichier, "");
            }
            
            $lignes = file($fichier, FILE_IGNORE_NEW_LINES);
            foreach($lignes as $ligne){
                $utilisateur = explode(";", $ligne);
                if($email == $utilisateur[3]){
                    $_SESSION['chaine'] = "Vous avez déjà un compte";
                    session_write_close();
                    header("location: inscription_reussie.php");
                    exit();
                }
            }

            file_put_contents($fichier,$donneeUtilisateur, FILE_APPEND);
            $_SESSION['chaine'] = "Inscription réussie";
            session_write_close();
            header("location: inscription_reussie.php");
            exit();
        }
    }
?>