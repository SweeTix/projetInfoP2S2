
<div class="aligne">
    <button>
        <a href="attribution_voyage2.php?destination=<?php echo urlencode($info['destination']); ?>">
            <img src="montagne2.jpg" alt="Voyage 1" width="250" height="250">
        </a>
    </button>
    <div class="colonne">
        <p><b><?php echo $info['destination']; ?></b></p>
        <div class="collonne">
            <p><?php echo "Enfant(s) : {$info['nbEnfants']} Adulte(s) : {$info['nbAdultes']}"; ?></p>
            <p><?php echo "Départ: {$info['dateDepart']}"; ?></p>
            <p><?php echo "Retour: {$info['dateRetour']}"; ?></p>
            <p><?php echo "{$info['prix']} euros"; ?></p>
        </div>
    </div>
</div>