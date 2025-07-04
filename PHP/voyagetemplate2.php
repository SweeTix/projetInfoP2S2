

<script>
    function changerValeur(button, valeur) {
        const ul = button.closest('div');
        const counter = ul.querySelector('.counter');
        let current = parseInt(counter.textContent);
        counter.textContent = current + valeur;
    }
</script>

<div class="container">
    

    <div class="bloc_description_voyage">
        <h1> <?php echo $destination ; ?></h1>
        <img src="<?php echo $urlimage1 ; ?>" alt="Description de l'image">
        <img src="<?php echo $urlimage1 ; ?>" alt="Description de l'image">
        <ul class="aligné">
           <li><div class="tag"><?php echo $tag1 ?></div></li>
            <li><div class="tag"><?php echo $tag2 ?></div></li>
            <li><div class="tag"><?php echo $tag3 ?></div></li>
            <li><div class="tag"><?php echo $tag4 ?></div><lI>
        </ul>
        <p>Plongez au cœur des majestueuses Alpes pour une escapade inoubliable entre sommets enneigés,</p>
    </div>

    <!---<div class="bloc_detail_voyage"></div>--->

    <div class="bloc_p_voyage">
        <div class="etape active">
            <h1>Les etapes du voyages</h1>
            <h1>Etape 0 : infos générales </h1>
            <div class="navigation-buttons">
                <button onclick="nextDiv(this)">Suivant</button>
           </div>
            <div class="ligne">
                <p><b>Durée du séjour</b></p>
                <ul>
                    <li>
                        <label for="depart">Départ :</label>
                        <input type="date" name="depart">
                    </li>
                    <li>
                        <label for="retour">Retour :</label>
                        <input type="date" name="retour">
                    </li>
                </ul>
            </div>

            <div class="ligne"><b>Informations sur les voyageurs</b></div>
            <div class="ligne">
                <div class="ligne">
                    <p>Adultes (+16)</p>
                    <button class="decrement" onclick="changerValeur(this, -1)">-</button>
                    <div class="counter">0</div>
                    <button class="increment" onclick="changerValeur(this, 1)">+</button>
                </div>
                <br>
                <div class="ligne">
                    <p>Enfants (-16)</p>
                    <button class="decrement" onclick="changerValeur(this, -1)">-</button>
                    <div class="counter">0</div>
                    <button class="increment" onclick="changerValeur(this, 1)">+</button>
                </div>
            </div>
        </div>

        <div class="etape">
            <h1>Les etapes du voyages</h1>
             <div class="navigation-buttons">
                <button onclick="prevDiv(this)">Précédent</button>
                <button onclick="nextDiv(this)">Suivant</button>
           </div>
            <h1>Etape 1 : <?php echo $etape1; ?> </h1>
            <div class="ligne">
                <p><b>Logements</b></p>
                <form id="etape1_logement">
                    <label><input type="checkbox" name="<?php echo $logement1_e1; ?>" value="<?php echo $prix_logement1_e1 ?>"> <?php echo $logement1_e1; ?></label>
                    <label><input type="checkbox" name="<?php echo $logement2_e1; ?>" value="<?php echo $prix_logement2_e1 ?>"> <?php echo $logement2_e1; ?></label>
                    <label><input type="checkbox" name="<?php echo $logement3_e1; ?>" value="<?php echo $prix_logement3_e1 ?>"> <?php echo $logement3_e1; ?></label>
                </form>
            </div>

            <div class="ligne">
                <p><b>Restaurations</b></p>
                <form id="etape1_resto">
                    <label><input type="checkbox" name="<?php echo $restauration1_e1; ?>" value="<?php echo $prix_restauration1_e1; ?>"> <?php echo $restauration1_e1; ?></label>
                    <label><input type="checkbox" name="<?php echo $restauration2_e1; ?>" value="<?php echo $prix_restauration2_e1; ?>"> <?php echo $restauration2_e1; ?></label>
                </form>
            </div>

            <div class="ligne">
                <p><b>Activités disponibles</b></p>
                <form id="etape1_activite">
                    <label><input type="checkbox" name="<?php echo $activiteA_e1; ?>" value="<?php echo $prix_Aae1; ?>"> <?php echo $activiteA_e1; ?></label>
                    <label><input type="checkbox" name="<?php echo $activiteB_e1; ?>" value="<?php echo $prix_Abe1; ?>"> <?php echo $activiteB_e1; ?></label>
                    <label><input type="checkbox" name="<?php echo $activiteC_e1; ?>" value="<?php echo $prix_Ace1; ?>"> <?php echo $activiteC_e1; ?></label>
                </form>
            </div>

            <div class="ligne">
                <p><b>Moyen de transport</b></p>
                <form id="etape1_transport">
                    <label><input type="checkbox" name="<?php echo $transport1_e1; ?>" value="<?php echo $prix_transport1_e1; ?>"> <?php echo $transport1_e1; ?></label>
                    <label><input type="checkbox" name="<?php echo $transport2_e1; ?>" value="<?php echo $prix_transport2_e1; ?>"> <?php echo $transport2_e1; ?></label>
                </form>
            </div>
        </div>

        <div class="etape">
            <h1>Les étapes du voyage</h1>
             <div class="navigation-buttons">
                <button onclick="prevDiv(this)">Précédent</button>
                <button onclick="nextDiv(this)">Suivant</button>
           </div>
            <h1>Etape 2 : <?php echo $etape2; ?> </h1>
            <div class="ligne">
                <p><b>Logements</b></p>
                <form id="etape2_logement">
                    <label><input type="checkbox" name="<?php echo $logement1_e2; ?>" value="<?php echo $prix_logement1_e2 ?>"> <?php echo $logement1_e2; ?></label>
                    <label><input type="checkbox" name="<?php echo $logement2_e2; ?>" value="<?php echo $prix_logement2_e2 ?>"> <?php echo $logement2_e2; ?></label>
                    <label><input type="checkbox" name="<?php echo $logement3_e2; ?>" value="<?php echo $prix_logement3_e2 ?>"> <?php echo $logement3_e2; ?></label>
                </form>
            </div>

            <div class="ligne">
                <p><b>Restaurations</b></p>
                <form id="etape2_resto">
                    <label><input type="checkbox" name="<?php echo $restauration1_e2; ?>" value="<?php echo $prix_restauration1_e2; ?>"> <?php echo $restauration1_e2; ?></label>
                    <label><input type="checkbox" name="<?php echo $restauration2_e2; ?>" value="<?php echo $prix_restauration2_e2; ?>"> <?php echo $restauration2_e2; ?></label>
                </form>
            </div>

            <div class="ligne">
                <p><b>Activités disponibles</b></p>
                <form id="etape2_activite">
                    <label><input type="checkbox" name="<?php echo $activiteA_e2; ?>" value="<?php echo $prix_Aae2; ?>"> <?php echo $activiteA_e2; ?></label>
                    <label><input type="checkbox" name="<?php echo $activiteB_e2; ?>" value="<?php echo $prix_Abe2; ?>"> <?php echo $activiteB_e2; ?></label>
                    <label><input type="checkbox" name="<?php echo $activiteC_e2; ?>" value="<?php echo $prix_Ace2; ?>"> <?php echo $activiteC_e2; ?></label>
                </form>
            </div>

            <div class="ligne">
                <p><b>Moyen de transport</b></p>
                <form id="etape2_transport">
                    <label><input type="checkbox" name="<?php echo $transport1_e2; ?>" value="<?php echo $prix_transport1_e2; ?>"> <?php echo $transport1_e2; ?></label>
                    <label><input type="checkbox" name="<?php echo $transport2_e2; ?>" value="<?php echo $prix_transport2_e2; ?>"> <?php echo $transport2_e2; ?></label>
                </form>
            </div>
        </div>

        <div class="etape">
            <h1>Les étapes du voyage</h1>
             <div class="navigation-buttons">
                <button onclick="prevDiv(this)">Précédent</button>
                
           </div>
            <h1>Etape 3 : <?php echo $etape3 ; ?></h1>
            <div class="ligne">
                <p><b>Logements</b></p>
                <form id="etape3_logement">
                    <label><input type="checkbox" name="<?php echo $logement1_e3; ?>" value="<?php echo $prix_logement1_e3 ?>"> <?php echo $logement1_e3; ?></label>
                    <label><input type="checkbox" name="<?php echo $logement2_e3; ?>" value="<?php echo $prix_logement2_e3 ?>"> <?php echo $logement2_e3; ?></label>
                    <label><input type="checkbox" name="<?php echo $logement3_e3; ?>" value="<?php echo $prix_logement3_e3 ?>"> <?php echo $logement3_e3; ?></label>
               
                </form>
            </div>

            <div class="ligne">
                <p><b>Restaurations</b></p>
                <form id="etape3_resto">
                    <label><input type="checkbox" name="<?php echo $restauration1_e3; ?>" value="<?php echo $prix_restauration1_e3; ?>">  <?php echo $restauration1_e3; ?></label>
                    <label><input type="checkbox" name="<?php echo $restauration1_e3; ?>" value="<?php echo $prix_restauration1_e3; ?>"> <?php echo $restauration2_e3; ?></label>
                </form>
            </div>

            <div class="ligne">
                <p><b>Activités disponibles</b></p>
                <form id="etape3_activite">
                    <label><input type="checkbox" name="<?php echo $activiteA_e3 ; ?>" value="<?php echo $prix_Aae3 ?>"> <?php echo $activiteA_e3 ; ?></label>
                    <label><input type="checkbox" name="<?php echo $activiteB_e3 ; ?>" value="<?php echo $prix_Abe3 ?>"> <?php echo $activiteB_e3 ; ?></label>
                    <label><input type="checkbox" name="<?php echo $activiteC_e3 ; ?>" value="<?php echo $prix_Ace3 ?>"> <?php echo $activiteC_e3 ; ?></label>
                </form>
            </div>

            <div class="ligne">
                <p><b>Moyen de transport </b></p>
                <form id="etape3_transport">
                    <label><input type="checkbox" name="<?php echo $transport1_e2; ?></label>" value="<?php echo $prix_transport1_e2; ?>"> <?php echo $transport1_e2; ?></label>
                    <label><input type="checkbox" name="<?php echo $transport1_e2; ?></label>" value="<?php echo $prix_transport1_e2; ?>"> <?php echo $transport1_e2; ?></label>
                </form>
            </div>
            <li><button onclick="envoyerFormulaire(this),nextDiv(this)">accéder au récapitulatif</button></li>
        </div>

       

        <div class="etape">
                 <div class="navigation-buttons">
                <button onclick="prevDiv(this)">Précédent</button>
           </div>
            <h1>Récapitulatif</h1>
            <?php include('recap_voyage.php');?>
        </div>
    </div>
</div>

<script>
    const etapes = document.querySelectorAll('.etape');
    let currentIndex = 0;

    function nextDiv(button) {
        const bloc = button.closest('.bloc_p_voyage');
        const etapes = bloc.querySelectorAll('.etape');
        const current = bloc.querySelector('.etape.active');
        let index = Array.from(etapes).indexOf(current);

        current.classList.remove('active');
        index = (index + 1) % etapes.length;
        etapes[index].classList.add('active');
    }

    function prevDiv(button) {
        const bloc = button.closest('.bloc_p_voyage');
        const etapes = bloc.querySelectorAll('.etape');
        const current = bloc.querySelector('.etape.active');
        let index = Array.from(etapes).indexOf(current);

        current.classList.remove('active');
        index = (index - 1 + etapes.length) % etapes.length;
        etapes[index].classList.add('active');
    }

  function envoyerFormulaire(button) {
    const bloc = button.closest('.bloc_p_voyage');

    const logements = [];
    const restaurations = [];
    const activites = [];
    const transports = [];
    const optionsSupp = [];
    

    for (let i = 1; i <= 3; i++) {
        // Logements
        bloc.querySelectorAll(`#etape${i}_logement input:checked`).forEach(cb => {
            const label = cb.closest('label');
            logements.push({
                value: cb.value,
                nom: label ? label.textContent.trim() : ""
            });
        });

        // Restauration
        const restoForm = bloc.querySelector(`#etape${i}_resto`) || bloc.querySelector(`#etape_resto`);
        if (restoForm) {
            restoForm.querySelectorAll('input:checked').forEach(cb => {
                const label = cb.closest('label');
                restaurations.push({
                    value: cb.value,
                    nom: label ? label.textContent.trim() : ""
                });
            });
        }

        // Activités
        const activiteForm = bloc.querySelector(`#etape${i}_activite`);
        if (activiteForm) {
            activiteForm.querySelectorAll('input:checked').forEach(cb => {
                const label = cb.closest('label');
                activites.push({
                    value: cb.value,
                    nom: label ? label.textContent.trim() : ""
                });
            });
        }

        // Transports
        const transportForm = bloc.querySelector(`#etape${i}_transport`);
        if (transportForm) {
            transportForm.querySelectorAll('input:checked').forEach(cb => {
                const label = cb.closest('label');
                transports.push({
                    value: cb.value,
                    nom: label ? label.textContent.trim() : ""
                });
            });
        }
    }

    // Dates
    const dateDepart = bloc.querySelector('input[name="depart"]')?.value || "";
    const dateRetour = bloc.querySelector('input[name="retour"]')?.value || "";

    // Compteurs
    const counters = bloc.querySelectorAll('.counter');
    const nbAdultes = parseInt(counters[0]?.textContent) || 0;
    const nbEnfants = parseInt(counters[1]?.textContent) || 0;
    const prix = <?php echo $prixVoyage?>

    const donnees = {
        dateDepart,
        dateRetour,
        nbAdultes,
        nbEnfants,
        logements,
        restaurations,
        activites,
        transports,
        prix,
    };

    console.log("Données à enregistrer :", donnees);
    alert("Préférences enregistrées (voir console)");

    fetch('enregistrer_preferences.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(donnees)
    })
    .then(response => response.text())
    .then(data => console.log("Réponse du serveur :", data))
    .catch(error => console.error("Erreur lors de l'envoi :", error));
}



</script>
