<script>
    function changerValeur(button, valeur) {
        const ul = button.closest('div');
        const counter = ul.querySelector('.counter');
        let current = parseInt(counter.textContent);
        counter.textContent = current + valeur;
    }
</script>

<div class="container">
    <!-- Bloc gauche -->
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

    <!-- Bloc droit -->
    <div class="bloc_p_voyage">
        <!-- Etape 0 -->
        <div class="etape active" id="etape_0" style="display:block;">
            <h1>Les étapes du voyage</h1>
            <div class="navigation-buttons">
                <button onclick="next_0(this)">Suivant</button>
            </div>
            <h1>Etape 0 : infos générales </h1>
            <div class="ligne">
                <?php echo "<p><b>Durée du séjour : $date_depart - $date_arrivee</b></p>" ?>
            </div>

            <!-- Nombre de voyageurs -->
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

        <!-- Etape 1 -->
        <div class="etape active" id="etape_1" style="display:none;">
            <h1>Les étapes du voyage</h1>
            <div class="navigation-buttons">
                <button onclick="prec_1(this)">Précédant</button>
                <button onclick="next_1(this)">Suivant</button>
            </div>
            <h1><?php echo 'Etape 1 : ' . $etape1 ?> </h1>
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
                    <label><input type="checkbox" name="<?php echo $transport1_e1?>" value="<?php echo $prix_transport1_e1; ?>"> <?php echo $transport1_e1; ?></label>
                    <label><input type="checkbox" name="<?php echo $transport2_e1?>" value="<?php echo $prix_transport2_e1; ?>"> <?php echo $transport2_e1; ?></label>
                </form>
            </div>
        </div>

        <!-- Etape 2 -->
        <div class="etape active" id="etape_2" style="display:none;">
            <h1>Les étapes du voyage</h1>
            <div class="navigation-buttons">
                <button onclick="prec_2(this)">Précédant</button>
                <button onclick="next_2(this)">Suivant</button>
            </div>
            <h1><?php echo 'Etape 2 : ' . $etape2 ?> </h1>
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
                    <label><input type="checkbox" name="<?php echo $transport1_e2;?>" value="<?php echo $prix_transport1_e2; ?>"> <?php echo $transport1_e2; ?></label>
                    <label><input type="checkbox" name="<?php echo $transport2_e2;?>" value="<?php echo $prix_transport2_e2; ?>"> <?php echo $transport2_e2; ?></label>
                </form>
            </div>
        </div>

        <!-- Etape 3 -->
        <div class="etape active" id="etape_3" style="display:none;">
            <h1>Les étapes du voyage</h1>
            <div class="navigation-buttons">
                <button onclick="prec_3(this)">Précédant</button>
                <button onclick="envoyerFormulaire(this),next_3(this)">Afficher le récapitulatif</button>
            </div>
            <h1><?php echo 'Etape 3 : ' . $etape3 ?> </h1>
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
                    <label><input type="checkbox" name="<?php echo $restauration1_e3; ?>" value="<?php echo $prix_restauration1_e3; ?>"> <?php echo $restauration1_e3; ?></label>
                    <label><input type="checkbox" name="<?php echo $restauration2_e3; ?>" value="<?php echo $prix_restauration2_e3; ?>"> <?php echo $restauration2_e3; ?></label>
                </form>
            </div>

            <div class="ligne">
                <p><b>Activités disponibles</b></p>
                <form id="etape3_activite">
                    <label><input type="checkbox" name="<?php echo $activiteA_e3; ?>" value="<?php echo $prix_Aae3; ?>"> <?php echo $activiteA_e3; ?></label>
                    <label><input type="checkbox" name="<?php echo $activiteB_e3; ?>" value="<?php echo $prix_Abe3; ?>"> <?php echo $activiteB_e3; ?></label>
                    <label><input type="checkbox" name="<?php echo $activiteC_e3; ?>" value="<?php echo $prix_Ace3; ?>"> <?php echo $activiteC_e3; ?></label>
                </form>
            </div>

            <div class="ligne">
                <p><b>Moyen de transport</b></p>
                <form id="etape3_transport">
                    <label><input type="checkbox" name="<?php echo $transport1_e3?>" value="<?php echo $prix_transport1_e3; ?>"> <?php echo $transport1_e3; ?></label>
                    <label><input type="checkbox" name="<?php echo $transport2_e3?>" value="<?php echo $prix_transport2_e3; ?>"> <?php echo $transport2_e3; ?></label>
                </form>
            </div>
        </div>

        <!-- Etape Finale -->
        <div class="etape active" id="etape_fin" style="display:none;">
            <h1>Récapitulatif</h1>
            <div class="navigation-buttons">
                <button onclick="prec_3(this)">Précédant</button>
            </div>
            <?php include('recap_voyage.php');?>
        </div>
    </div>

    
</div>

<script>
    function next_0(button){
        const div_0 = document.getElementById("etape_0");
        const div_1 = document.getElementById("etape_1");
        div_0.style.display = "none";
        div_1.style.display ="block";
    }

    function next_1(button){
        const div_1 = document.getElementById("etape_1");
        const div_2 = document.getElementById("etape_2");
        div_1.style.display = "none";
        div_2.style.display ="block";
    }

    function next_2(button){
        const div_2 = document.getElementById("etape_2");
        const div_3 = document.getElementById("etape_3");
        div_2.style.display = "none";
        div_3.style.display ="block";
    }

    function next_3(button){
        const div_3 = document.getElementById("etape_3");
        const div_fin = document.getElementById("etape_fin");
        div_3.style.display = "none";
        div_fin.style.display ="block";
    }

    function prec_1(button){
        const div_0 = document.getElementById("etape_0");
        const div_1 = document.getElementById("etape_1");
        div_1.style.display = "none";
        div_0.style.display ="block";
    }

    function prec_2(button){
        const div_1 = document.getElementById("etape_1");
        const div_2 = document.getElementById("etape_2");
        div_2.style.display = "none";
        div_1.style.display ="block";
    }

    function prec_3(button){
        const div_2 = document.getElementById("etape_2");
        const div_3 = document.getElementById("etape_3");
        div_3.style.display = "none";
        div_2.style.display ="block";
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
            const logementForm = bloc.querySelector(`#etape${i}_logement`);
            if (logementForm) {
                logementForm.querySelectorAll('input:checked').forEach(cb => {
                    const label = cb.closest('label');
                    logements.push({
                        value: cb.value,
                        nom: label ? label.textContent.trim() : ""
                    });
                });
            }

            // Restauration
            const restoForm = bloc.querySelector(`#etape${i}_resto`);
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

        // Compteurs
        const counters = bloc.querySelectorAll('.counter');
        const nbAdultes = parseInt(counters[0]?.textContent) || 0;
        const nbEnfants = parseInt(counters[1]?.textContent) || 0;
        const prix = <?php echo $prixVoyage?>;
        const date_depart = "<?php echo $date_depart?>";
        const date_arrivee = "<?php echo $date_arrivee?>";

        const donnees = {
            date_depart,
            date_arrivee,
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

        // Envoi données sur json
        fetch('enregistrer_preferences.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(donnees)
        })
        // Test envoi
        .then(response => response.text())
        .then(data => console.log("Réponse du serveur :", data))
        .catch(error => console.error("Erreur lors de l'envoi :", error));
    }
</script>