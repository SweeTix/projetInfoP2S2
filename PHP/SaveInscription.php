<?php
session_start();
$fichier = "utilisateurs.json";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $naissance = $_POST['naissance'];
    $adresse = $_POST['adresse'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $statut = "utilisateur";

    if (!empty($nom) && !empty($prenom) && !empty($naissance) && !empty($adresse) && !empty($email) && !empty($mdp)) {
        $donnees = [
            "nom" => $nom,
            "prenom" => $prenom,
            "naissance" => $naissance,
            "adresse" => $adresse,
            "email" => $email,
            "mdp" => $mdp,
            "statut" => $statut
        ];

        if (!file_exists($fichier)) {
            file_put_contents($fichier, "[]");
        }

        $contenu = file_get_contents($fichier);
        $utilisateurs = json_decode($contenu, true);

        if (!is_array($utilisateurs)) {
            $utilisateurs = [];
        }

        foreach ($utilisateurs as $utilisateur) {
            if (isset($utilisateur["email"]) && $email == $utilisateur["email"]) {
                $_SESSION['chaine'] = "Vous avez déjà un compte";
                session_write_close();
                header("location: inscription_reussie.php");
                exit();
            }
        }

        $utilisateurs[] = $donnees;
        file_put_contents($fichier, json_encode($utilisateurs, JSON_PRETTY_PRINT));

        $_SESSION['chaine'] = "Inscription réussie";
        session_write_close();
        header("location: inscription_reussie.php");
        exit();
    }
}
?>
