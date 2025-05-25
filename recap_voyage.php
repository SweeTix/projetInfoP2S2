<?php
$filename = 'preferences.json';

// Vérification du fichier
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

// On récupère le dernier voyage
$lastIndex = array_key_last($data);
$dernierVoyage = $data[$lastIndex]['voyage'] ?? null;

if ($dernierVoyage === null) {
    die("Erreur : aucun voyage trouvé.");
}

// Extraction sécurisée des données
$destination    = $dernierVoyage['destination']    ?? '';
$dateDepart     = $dernierVoyage['dateDepart']     ?? '';
$dateRetour     = $dernierVoyage['dateRetour']     ?? '';
$nbAdultes      = isset($dernierVoyage['nbAdultes']) ? (int)$dernierVoyage['nbAdultes'] : 0;
$nbEnfants      = isset($dernierVoyage['nbEnfants']) ? (int)$dernierVoyage['nbEnfants'] : 0;
$logements      = $dernierVoyage['logements']      ?? [];
$restaurations  = $dernierVoyage['restaurations']  ?? [];
$activites      = $dernierVoyage['activites']      ?? [];
$transports     = $dernierVoyage['transports']     ?? [];
$prix           = isset($dernierVoyage['prix']) ? (float)$dernierVoyage['prix'] : 0;
?>

<div>
    <ul class="aligné">
        <li><p><strong>Date de départ :</strong> <?php echo $dateDepart; ?></p></li>
        <li><p><strong>Date de retour :</strong> <?php echo $dateRetour; ?></p></li>
        <li><p><strong>Nombre d'adultes :</strong> <?php echo $nbAdultes; ?></p></li>
        <li><p><strong>Nombre d'enfants :</strong> <?php echo $nbEnfants; ?></p></li>
    </ul>

<?php
$montantLogement = 0;
$montantRestauration = 0;
$montantActivite = 0;
$montantTransport = 0;

if (!empty($logements)) {
    foreach ($logements as $logement) {
        $montantLogement += (float)$logement['value'];
    }
}

if (!empty($restaurations)) {
    foreach ($restaurations as $restauration) {
        $montantRestauration += (float)$restauration['value'];
    }
}

if (!empty($activites)) {
    foreach ($activites as $activite) {
        $montantActivite += (float)$activite['value'];
    }
}

if (!empty($transports)) {
    foreach ($transports as $transport) {
        $montantTransport += (float)$transport['value'];
    }
}

$prixVoyage =
    ($montantRestauration * $nbAdultes) + ($montantRestauration * 0.60 * $nbEnfants) +
    ($montantActivite * $nbAdultes) + ($montantActivite * 0.60 * $nbEnfants) +
    ($montantTransport * $nbAdultes) + ($montantTransport * 0.60 * $nbEnfants) +
    (($montantLogement * 0.70) * $nbAdultes) + (($montantLogement * 0.70) * 0.60 * $nbEnfants);
?>

    <p><strong>Logements : étape 1 / étape 2 / étape 3</strong></p>
    <ul>
        <?php foreach ($logements as $logement): ?>
            <li><?= $logement['nom'] ?> (prix : <?= $logement['value'] ?>)</li>
        <?php endforeach; ?>
    </ul>

    <p><strong>Restaurations : étape 1 / étape 2 / étape 3</strong></p>
    <ul>
        <?php foreach ($restaurations as $restauration): ?>
            <li><?= $restauration['nom'] ?> (prix : <?= $restauration['value'] ?>)</li>
        <?php endforeach; ?>
    </ul>

    <p><strong>Activités : étape 1 / étape 2 / étape 3</strong></p>
    <ul>
        <?php foreach ($activites as $activite): ?>
            <li><?= $activite['nom'] ?> (prix : <?= $activite['value'] ?>)</li>
        <?php endforeach; ?>
    </ul>

    <p><strong>Transports : étape 1 / étape 2 / étape 3</strong></p>
    <ul>
        <?php foreach ($transports as $transport): ?>
            <li><?= $transport['nom'] ?> (prix : <?= $transport['value'] ?>)</li>
        <?php endforeach; ?>
    </ul>

    <h1>Prix du voyage : <?= number_format($prixVoyage, 2) ?> €</h1>
    <a href="panier.php"><button class="simple_btn">ajouter panier</button></a>
</div>
