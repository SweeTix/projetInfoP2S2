<?php
$filename = 'preferences.json';

$handle = fopen($filename, 'r');
if ($handle === false) {
    die("Erreur : impossible d'ouvrir le fichier.");
}

$lastJson = null;

while (($line = fgets($handle)) !== false) {
    $line = trim($line);
    if (str_starts_with($line, '{')) {
        $decoded = json_decode($line, true);
        if ($decoded !== null) {
            $lastJson = $decoded;
        }
    }
}
fclose($handle);

if ($lastJson === null) {
    die("Erreur : aucune ligne JSON valide trouvée.");
}

$date_depart = $lastJson['date_depart'];
$date_arrivee = $lastJson['date_arrivee'];
$nbAdultes = $lastJson['nbAdultes'];
$nbEnfants = $lastJson['nbEnfants'];
$logements = $lastJson['logements'];
$restaurations = $lastJson['restaurations'];
$activites = $lastJson['activites'];
$transports = $lastJson['transports'];
?>

<div>
    <ul class="aligné">
        <li><p><strong>Date de départ :</strong> <?php echo $date_depart; ?></p></li>
        <li><p><strong>Date de retour :</strong> <?php echo $date_arrivee; ?></p></li>
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
        $montantLogement += (float)(is_array($logement) ? $logement['value'] : $logement);
    }
}

if (!empty($restaurations)) {
    foreach ($restaurations as $restauration) {
        $montantRestauration += (float)(is_array($restauration) ? $restauration['value'] : $restauration);
    }
}

if (!empty($activites)) {
    foreach ($activites as $activite) {
        $montantActivite += (float)(is_array($activite) ? $activite['value'] : $activite);
    }
}

if (!empty($transports)) {
    foreach ($transports as $transport) {
        $montantTransport += (float)(is_array($transport) ? $transport['value'] : $transport);
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
            <li><?php echo is_array($logement) ? $logement['nom'] . " (prix : " . $logement['value'] . ")" : $logement; ?></li>
        <?php endforeach; ?>
    </ul>

    <p><strong>Restaurations : étape 1 / étape 2 / étape 3</strong></p>
    <ul>
        <?php foreach ($restaurations as $restauration): ?>
            <li><?php echo is_array($restauration) ? $restauration['nom'] . " (prix : " . $restauration['value'] . ")" : $restauration; ?></li>
        <?php endforeach; ?>
    </ul>

    <p><strong>Activités : étape 1 / étape 2 / étape 3</strong></p>
    <ul>
        <?php foreach ($activites as $activite): ?>
            <li><?php echo is_array($activite) ? $activite['nom'] . " (prix : " . $activite['value'] . ")" : $activite; ?></li>
        <?php endforeach; ?>
    </ul>

    <p><strong>Transports : étape 1 / étape 2 / étape 3</strong></p>
    <ul>
        <?php foreach ($transports as $transport): ?>
            <li><?php echo is_array($transport) ? $transport['nom'] . " (prix : " . $transport['value'] . ")" : $transport; ?></li>
        <?php endforeach; ?>
    </ul>

    <h1>Prix du voyage : <?php echo number_format($prixVoyage, 2); ?> €</h1>
</div>
</div>
