<div class="voyage_panier">
    <ul class="aligné">
        <li>
            <button>
                <a href="attribution_voyage2.php?destination=<?php echo urlencode($destination); ?>">
                    <img src="montagne2.jpg" alt="Voyage 1">
                </a>
            </button>
        </li>
        <li>
            <ul class="liste">
                <li><div><?php echo $destination; ?></div></li>
                <li><div><?php echo "enfant(s) :$nbEnfants" ?></div></li>
                <li><div><?php echo "adulte(s) :$nbAdultes"?></div></li>
                <li><div><?php echo "Départ:$dateDepart" ?></div></li>
                <li><div><?php echo "Retour:$dateRetour" ?></div></li>
                <li><div class="tag"><?php echo" $prix euros" ?></div></li>
            </ul>
        </li>
    </ul>
</div>