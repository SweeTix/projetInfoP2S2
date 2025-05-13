    <div class="container">
        <button> <<<< </button>
  
        <div class="bloc_description_voyage">
            <h1> <?php echo $destination ; ?></h1>
            <img src="<?php echo $urlimage1 ; ?>" alt="Description de l'image">
            <img src="<?php echo $urlimage1 ; ?>" alt="Description de l'image">
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