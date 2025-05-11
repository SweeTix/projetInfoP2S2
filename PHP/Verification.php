<?php
    session_start();

    $fichier = "inscrit.csv";
    $lignes = [];
    $utilisateur = [];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];

        if(!empty($email) && !empty($mdp)){
            $lignes = file($fichier, FILE_IGNORE_NEW_LINES);
            $trouve = false;

            foreach($lignes as $ligne){
                $utilisateur = explode(";", $ligne);

                if($email === $utilisateur[4]){

                    if($mdp === $utilisateur[5]){
                        if($utilisateur[5] === "admin"){
                            header("location: administrateur.php");
                            exit();
                        }
                        $_SESSION['user_name'] = $utilisateur[0];
                        $_SESSION['user_firstname'] = $utilisateur[1];
                        $_SESSION['user_birth'] = $utilisateur[2];
                        $_SESSION['user_address'] = $utilisateur[3];
                        $_SESSION['user_email'] = $utilisateur[4];
                        $_SESSION['user_password'] = $utilisateur[5];
                        $_SESSION['user_statut'] = $utilisateur[6];
                        header("Location: pageprofil.php");
                        exit();
                    }
                    header("Location: connexion.php?erreur=mdp_incorrect");
                    exit();
                }
            }
        }
        header("Location: connexion.php?erreur=mauvais_email");
    }
?>