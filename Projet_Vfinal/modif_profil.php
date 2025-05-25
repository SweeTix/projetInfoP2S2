<?php
session_start();

// Vérifie que l'utilisateur est bien connecté
if (!isset($_SESSION['user_email'])) {
    die("Accès refusé.");
}

$useremail = $_SESSION['user_email'];

// Récupérer les nouvelles données envoyées par le formulaire
$newFirstname = $_POST['user_firstname'] ?? null;
$newBirth = $_POST['user_birth'] ?? null;
$newAddress = $_POST['user_address'] ?? null;
$newEmail = $_POST['user_email'] ?? null;
$newPassword = $_POST['user_password'] ?? null;
$newUsername = $_POST['username'] ?? null; // au cas où le nom change aussi

// Lire le fichier JSON
$jsonFile = 'utilisateurs.json';
$users = json_decode(file_get_contents($jsonFile), true);

foreach($users as &$user){

    if(isset($user["email"]) && $useremail == $user["email"]){
        if ($newUsername !== null) {
            $user["nom"] = $newUsername;
            $_SESSION["user_name"] = $newUsername;
        }   
        if ($newFirstname !== null) {
            $user["prenom"] = $newFirstname;
            $_SESSION["user_firstname"] = $newFirstname;
        }
        if ($newBirth !== null) {
            $user["naissance"] = $newBirth;
            $_SESSION["user_birth"] = $newBirth;
        }
        if ($newAddress !== null) {
            $user["adresse"] = $newAddress;
            $_SESSION["user_address"] = $newAddress;
        }
        if ($newEmail !== null) {
            $user["email"] = $newEmail;
            $_SESSION["user_email"] = $newEmail;
        }
        if ($newPassword !== null) {
            $user["mdp"] = $newPassword;
            $_SESSION["user_password"] = $newPassword;
        }
        file_put_contents($jsonFile, json_encode($users, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        header("location: pageprofil.php");
        exit();
        
    }
}
echo "pas trouver utilisateur";
?>