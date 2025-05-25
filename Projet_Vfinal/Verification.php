<?php
    session_start();

    $fichier = "utilisateurs.json";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];

        if(!empty($email) && !empty($mdp)){
            $contenu = file_get_contents($fichier);
            $utilisateurs = json_decode($contenu, true);
            if(!is_array($utilisateurs)){
                $utilisateurs = [];
            }

            foreach($utilisateurs as $utilisateur){

                if(isset($utilisateur["email"]) && $email == $utilisateur["email"]){

                    if(isset($utilisateur["mdp"]) && $mdp == $utilisateur["mdp"]){
                        $_SESSION['user_name'] = $utilisateur["nom"];
                        $_SESSION['user_firstname'] = $utilisateur["prenom"];
                        $_SESSION['user_birth'] = $utilisateur["naissance"];
                        $_SESSION['user_address'] = $utilisateur["adresse"];
                        $_SESSION['user_email'] = $utilisateur["email"];
                        $_SESSION['user_password'] = $utilisateur["mdp"];
                        $_SESSION['user_statut'] = $utilisateur["statut"];
                        if($utilisateur["statut"] === "admin"){
                            header("location: administrateur.php");
                            exit();
                        }
                        header("Location: pageprofil.php");
                        exit();
                    }
                    header("Location: connexion.php?erreur=mdp_incorrect");
                    exit();
                }
            }
        }
        header("Location: connexion.php?erreur=mauvais_email");
        exit();
    }
?>