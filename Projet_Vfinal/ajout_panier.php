<?php
    session_start();
    $filename = 'preferences.json';

    if (!file_exists($filename)) {
        die("Erreur : fichier non trouvé.");
    }

    $contenu = file_get_contents($filename);
    if ($contenu === false || trim($contenu) === '') {
        die("Erreur : fichier vide ou non lisible.");
    }

    $data = json_decode($contenu, true);
    if (!is_array($data) || empty($data)) {
        die("Erreur : données JSON invalides.");
    }

    $file = 'panier.json';

    if (!file_exists($file)) {
        die("Erreur : fichier non trouvé.");
    }

    $contenup = file_get_contents($file);
    if ($contenup === false || trim($contenup) === '') {
        die("Erreur : fichier vide ou non lisible.");
    }

    $panier = json_decode($contenup, true);
    if (!is_array($panier) || empty($panier)) {
        die("Erreur : données JSON invalides.");
    }

    $email = $_SESSION['user_email'];

    foreach ($panier as $utilisateurEmail => $utilisateurData) {
        if ($email == $utilisateurEmail) {
            echo "Utilisateur trouvé : " . $email . "<br>";
             $panier[$utilisateurEmail][$data['destination']] = $data;
             $jsonFormate = json_encode($panier, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
             if (file_put_contents($file, $jsonFormate) === false) {
                 http_response_code(500);
                 echo "Erreur lors de l'écriture du fichier.";
                 exit;
             }
             header("location: panier.php");
             exit;
        }
    }
    $panier[$email] = [];
    $panier[$email][$data['destination']] = $data;
    $jsonFormate = json_encode($panier, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    if (file_put_contents($file, $jsonFormate) === false) {
        http_response_code(500);
        echo "Erreur lors de l'écriture du fichier.";
        exit;
    }
    header("location: panier.php");
    exit;
?>