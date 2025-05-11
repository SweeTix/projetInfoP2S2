

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Trek & Peaks</title>
    <link rel="stylesheet" href="site2.css">
</head>
<body>

    <script>
        function changerValeur(button, valeur) {
            const ul = button.closest('div');
            const counter = ul.querySelector('.counter');
            let current = parseInt(counter.textContent);
            counter.textContent = current + valeur;
        }
    </script>
 
     <?php


$fichier = fopen("destination.txt", "r");

// Vérifie que le fichier a bien été ouvert
if ($fichier) {
    while (($ligne = fgets($fichier)) !== false) {
        // Supprime les espaces et retours à la ligne
        $ligne = trim($ligne);

        // Ignore les lignes vides
        if (empty($ligne)) continue;

        // Sépare la ligne en éléments
        $elements = explode(";", $ligne);

        // Nettoie chaque élément (supprime les espaces)
        $elements = array_map('trim', $elements);

        // Affecte à des variables individuelles (si au moins 3 éléments)
        if (count($elements) >= 13) {
            $destination = $elements[0];
            $etape1 = $elements[1];
            $etape2 = $elements[2];
            $etape3 = $elements[3];
            $activiteA_e1 = $elements[4];
            $activiteB_e1 = $elements[5];
            $activiteC_e1 = $elements[6];
            $activiteA_e2 = $elements[7];
            $activiteB_e2 = $elements[8];
            $activiteC_e2 = $elements[9];
            $activiteA_e3 = $elements[10];
            $activiteB_e3 = $elements[11];
            $activiteC_e3 = $elements[12];

        }
    }

    fclose($fichier);
} else {
    echo "Impossible d'ouvrir le fichier.";
}

?>
   
     
    <div class="navbar">
        <ul>
            <li><a href="accueil.html"><img src="logo.png" alt="Logo" width="100" height="100"></a></li>
            <li><a href="information.html">Information</a></li>
            <li><a href="rechercher.html">Rechercher</a></li>
        </ul>
        <ul>
            <li class="inscription"><a href="inscription.html">S'inscrire</a></li>
            <li class="connexion"><a href="connexion.html">Se connecter</a></li>
        </ul>
    </div>

    <div class="container">
        <button> <<<< </button>
  
        <div class="bloc_description_voyage">
            <h1> <?php echo $destination ; ?></h1>
            <img src="alpes1.jpg" alt="Description de l'image">
            <img src="alpes2.jpg" alt="Description de l'image">
            <p>Plongez au cœur des majestueuses Alpes pour une escapade inoubliable entre sommets enneigés,</p>
        </div>
        <div class="bloc_detail_voyage">
            <h1>Personnaliser votre séjour</h1>
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
        <div class="bloc_p_voyage">
            <div class="etape active">
                <h1>Les etapes du voyages</h1>
                <h1>Etape 1 : <?php echo $etape1; ?> </h1>
                <div class="ligne">
                    <p><b>Logements</b></p>
                    <form id="etape1_logement">
                        <label>
                            <input type="checkbox" name="chalet" value="1"> chalet 1
                        </label>
                        <label>
                            <input type="checkbox" name="chalet" value="2"> chalet 2
                        </label>
                        <label>
                            <input type="checkbox" name="chalet" value="3"> chalet 3
                        </label>
                        <label>
                            <input type="checkbox" name="chalet" value="4"> aucun
                        </label>
                    </form>
                </div>

                <div class="ligne">
                    <p><b>Restaurations</b></p>
                    <form id="etape1_resto">
                        <label>
                            <input type="checkbox" name="retauration" value="service"><p><b><?php echo $labels['logements'] ?? 'Logements'; ?></b></p>
                        </label>
                        <label>
                            <input type="checkbox" name="retauration" value="chargeclient"> à votre charge
                        </label>
                    </form>
                </div>

                <div class="ligne">
                    <p><b>Activités disponibles</b></p>
                    <form id="etape1_activite">
                        <label>
                            <input type="checkbox" name="activite" value="<?php echo $activiteA_e1 ; ?>"> <?php echo $activiteA_e1 ; ?>
                        </label>
                        <label>
                            <input type="checkbox" name="activite" value="rando"> <?php echo $activiteB_e1 ; ?>
                        </label>
                        <label>
                            <input type="checkbox" name="activite" value="ski"> <?php echo $activiteC_e1 ; ?>
                        <label>
                            <input type="checkbox" name="activite" value="tyro"> tyrolienne
                        </label>
                    </form>
                </div>

                <div class="ligne">
                    <p><b>Moyen de transport</b></p>
                    <form id="etape1_transport">
                        <label>
                            <input type="checkbox" name="transport" value="bus"> Bus
                        </label>
                        <label>
                            <input type="checkbox" name="transport" value="véhicule"> véhicule
                        </label>
                    </form>
                </div>

                <div class="ligne">
                    <p><b>Options supplémentaires</b></p>
                    <form id="etape1_optionsup">
                        <label>
                            <input type="checkbox" name="optionsup" value="sallesport"> salle de sport
                        </label>
                        <label>
                            <input type="checkbox" name="optionsup" value="spa"> spa
                        </label>
                    </form>
                </div>
            </div>

            <div class="etape">
                <h1>Les étapes du voyage</h1>
                <h1>Etape 2 : <?php echo $etape2 ; ?> </h1>
                <div class="ligne">
                    <p><b>Logements</b></p>
                    <form id="etape2_logement">
                        <label>
                            <input type="checkbox" name="chalet" value="1"> chalet 1
                        </label>
                        <label>
                            <input type="checkbox" name="chalet" value="2"> chalet 2
                        </label>
                        <label>
                            <input type="checkbox" name="chalet" value="3"> chalet 3
                        </label>
                        <label>
                            <input type="checkbox" name="chalet" value="4"> aucun
                        </label>
                    </form>
                </div>

                <div class="ligne">
                    <p><b>Restaurations</b></p>
                    <form id="etape3_resto">
                        <label>
                            <input type="checkbox" name="restauration" value="service"> restauration locale (+90 par personne)
                        </label>
                        <label>
                            <input type="checkbox" name="restauration" value="chargeclient"> à votre charge
                        </label>
                    </form>
                </div>

                <div class="ligne">
                    <p><b>Activités disponibles</b></p>
                    <form id="etape2_activite">
                        <label>
                            <input type="checkbox" name="activite" value="escalade"> <?php echo $activiteA_e2 ; ?>
                        </label>
                        <label>
                            <input type="checkbox" name="activite" value="rando"> <?php echo $activiteB_e2 ; ?>
                        </label>
                        <label>
                            <input type="checkbox" name="activite" value="ski"> <?php echo $activiteC_e2 ; ?>
                        </label>
                        <label>
                            <input type="checkbox" name="activite" value="tyro"> tyrolienne
                        </label>
                    </form>
                </div>

                <div class="ligne">
                    <p><b>Moyen de transport</b></p>
                    <form id="etape2_transport">
                        <label>
                            <input type="checkbox" name="transport" value="bus"> Bus
                        </label>
                        <label>
                            <input type="checkbox" name="transport" value="vehicule"> véhicule personnel
                        </label>
                    </form>
                </div>

                <div class="ligne">
                    <p><b>Options supplémentaires</b></p>
                    <form id="etape2_optionsup">
                        <label>
                            <input type="checkbox" name="optionsup" value="sallesport"> salle de sport
                        </label>
                        <label>
                            <input type="checkbox" name="optionsup" value="spa"> spa
                        </label>
                    </form>
                </div>
            </div>

            <div class="etape">
                <h1>Les étapes du voyage</h1>
                <h1>Etape 3 : <?php echo $etape3 ; ?></h1>
                <div class="ligne">
                    <p><b>Logements</b></p>
                    <form id="etape3_logement">
                        <label>
                            <input type="checkbox" name="chalet" value="1"> <?php echo $donnees['chalet1'] ?? '{{chalet1}}'; ?>
                        </label>
                        <label>
                            <input type="checkbox" name="chalet" value="2"> <?php echo $donnees['chalet2'] ?? '{{chalet2}}'; ?>
                        </label>
                        <label>
                            <input type="checkbox" name="chalet" value="3"> <?php echo $donnees['chalet3'] ?? '{{chalet3}}'; ?>
                        </label>
                        <label>
                            <input type="checkbox" name="chalet" value="4"> <?php echo $donnees['chalet4'] ?? '{{chalet4}}'; ?>
                        </label>
                    </form>
                </div>

                <div class="ligne">
                    <p><b>Restaurations</b></p>
                    <form id="etape3_resto">
                        <label>
                            <input type="checkbox" name="restauration" value="service"> restauration locale (+90 par personne)
                        </label>
                        <label>
                            <input type="checkbox" name="restauration" value="charge client"> à votre charge
                        </label>
                    </form>
                </div>

                <div class="ligne">
                    <p><b>Activités disponibles</b></p>
                    <form id="etape3_activite">
                        <label>
                            <input type="checkbox" name="activite" value="escalade"> <?php echo $activiteA_e3 ; ?></h1>
                        </label>
                        <label>
                            <input type="checkbox" name="actvite" value="rando"> <?php echo $activiteB_e3 ; ?></h1>
                        </label>
                        <label>
                            <input type="checkbox" name="activite" value="ski"> <?php echo $activiteC_e3 ; ?></h1>
                        </label>
                        <label>
                            <input type="checkbox" name="activite" value="tyro"> tyrp
                        </label>
                    </form>
                </div>

                <div class="ligne">
                    <p><b>Moyen de transport </b></p>
                    <form id="etape3_transport">
                        <label>
                            <input type="checkbox" name="transport" value="bus"> Bus
                        </label>
                        <label>
                            <input type="checkbox" name="transport" value="vehicule"> véhicule
                        </label>
                    </form>
                </div>

                <div class="ligne">
                    <p><b>Options supplémentaires</b></p>
                    <form id="etape3_optionsup">
                        <label>
                            <input type="checkbox" name="optionsup" value="sallesport"> salle de sport
                        </label>
                        <label>
                            <input type="checkbox" name="optionsup" value="spa"> spa
                        </label>
                    </form>
                </div>
            </div>

            <div class="etape">
                <h1>Les étapes du voyage</h1>
                <h1>Etape final :</h1>
                
                <div class="ligne">
                    <p>Évaluation du prix</p>
                    <ul>
                        <li><a href="recap_voyage.html"><button>PAYER</button></a></li>
                        <h2>prix : 2000 euros</h2>
                        <li><button onclick="envoyerTousLesFormulaires()">ajouter aux favoris</button></li>
                    </ul>
                </div>
            </div>
            
            <div class="navigation-buttons">
                <button onclick="prevDiv()">Précédent</button>
                <button onclick="nextDiv()">Suivant</button>
            </div>
        </div>
        <button> >>>> </button>
    </div>

    <script>
        const etapes = document.querySelectorAll('.etape');
        let currentIndex = 0;
    
        function nextDiv() {
          etapes[currentIndex].classList.remove('active');
          currentIndex = (currentIndex + 1) % etapes.length;
          etapes[currentIndex].classList.add('active');
        }
        
        function prevDiv() {
          etapes[currentIndex].classList.remove('active');
          currentIndex = (currentIndex - 1 + etapes.length) % etapes.length;
          etapes[currentIndex].classList.add('active');
        }

        function envoyerTousLesFormulaires() {
            let logements = [];
            let restaurations = [];
            let activites = [];
            let transports = [];
            let optionsSupp = [];

            for (let i = 1; i <= 3; i++) {
                document.querySelectorAll(`#etape${i}_logement input:checked`).forEach(cb => logements.push(cb.value));
                const restoForm = document.querySelector(`#etape${i}_resto`) || document.querySelector(`#etape_resto`);
                if (restoForm) {
                    restoForm.querySelectorAll('input:checked').forEach(cb => restaurations.push(cb.value));
                }
                const activiteForm = document.querySelector(`#etape${i}_activite`);
                if (activiteForm) {
                    activiteForm.querySelectorAll('input:checked').forEach(cb => activites.push(cb.value));
                }
                const transportForm = document.querySelector(`#etape${i}_transport`);
                if (transportForm) {
                    transportForm.querySelectorAll('input:checked').forEach(cb => transports.push(cb.value));
                }
                const optionsForm = document.querySelector(`#etape${i}_optionsup`);
                if (optionsForm) {
                    optionsForm.querySelectorAll('input:checked').forEach(cb => optionsSupp.push(cb.value));
                }
            }

            const dateDepart = document.querySelector('input[name="depart"]').value;
            const dateRetour = document.querySelector('input[name="retour"]').value;
            const counters = document.querySelectorAll('.counter');
            const nbAdultes = counters[0]?.textContent || 0;
            const nbEnfants = counters[1]?.textContent || 0;

            const resultats = {
                dateDepart: dateDepart,
                dateRetour: dateRetour,
                nbAdultes: nbAdultes,
                nbEnfants: nbEnfants,
                logements: logements.join("; "),
                restaurations: restaurations.join("; "),
                activites: activites.join("; "),
                transports: transports.join("; "),
                optionsSupp: optionsSupp.join("; ")
            };

            console.log("Données à enregistrer :", resultats);
            alert("Préférences enregistrées (voir console)");

            fetch('enregistrer_preferences.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(resultats)
            })
            .then(response => response.text())
            .then(data => {
                console.log("Réponse du serveur :", data);
            })
            .catch(error => {
                console.error("Erreur lors de l'envoi :", error);
            });
        }
    </script>

</body>
</html>