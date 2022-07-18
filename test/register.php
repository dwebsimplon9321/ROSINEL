<?php include('server.php') ?>
<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="/intl-tel-input-17.0.0/build/css/intlTelInput.css">

    <title>Inscription</title>
</head>

<body>
    <form method="post" action="register.php" name="signup" id="signup"> 
        <?php include('errors.php'); ?>
        <div class="container-fluid Page1" alt="Page1" id="p1">
            <div class="row">
                <div class="col gauche">

                </div>

                <div class="col listeC" role="group" aria-label="">
                    <div class="header">
                        <h2 class="ptitle">Dans quel communes souhaitez-vous faire de l'eCommerce ?</h2>
                    </div>
                    <button type="button" class="btn btn-primary bleu btComm">Les Abymes</button>
                    <button type="button" class="btn btn-primary bleu btComm">Anse-Bertrand</button>
                    <button type="button" class="btn btn-primary bleu btComm">Baie-Mahault</button>

                    <button type="button" class="btn btn-primary bleu btComm">Baillif</button>
                    <button type="button" class="btn btn-primary bleu btComm">Basse-Terre</button>
                    <button type="button" class="btn btn-primary bleu btComm">Bouillante</button>

                    <button type="button" class="btn btn-primary bleu btComm">Capesterre-Belle-Eau</button>
                    <button type="button" class="btn btn-primary bleu btComm">Capesterre-de-Marie-Galante</button>
                    <button type="button" class="btn btn-primary bleu btComm">Gourbeyre</button>

                    <button type="button" class="btn btn-primary bleu btComm">La Désirade</button>
                    <button type="button" class="btn btn-primary bleu btComm">Deshaies</button>
                    <button type="button" class="btn btn-primary bleu btComm">Grand-Bourg</button>

                    <button type="button" class="btn btn-primary bleu btComm">Le Gosier</button>
                    <button type="button" class="btn btn-primary bleu btComm">Goyave </button>
                    <button type="button" class="btn btn-primary bleu btComm">Lamentin</button>

                    <button type="button" class="btn btn-primary bleu btComm">Morne-à-l'Eau</button>
                    <button type="button" class="btn btn-primary bleu btComm">Le Moule</button>
                    <button type="button" class="btn btn-primary bleu btComm">Petit-Bourg</button>

                    <button type="button" class="btn btn-primary bleu btComm">Petit-Canal</button>
                    <button type="button" class="btn btn-primary bleu btComm">Pointe-à-Pitre</button>
                    <button type="button" class="btn btn-primary bleu btComm">Pointe-Noire</button>

                    <button type="button" class="btn btn-primary bleu btComm">Port-Louis</button>
                    <button type="button" class="btn btn-primary bleu btComm">Saint-Claude</button>
                    <button type="button" class="btn btn-primary bleu btComm">Saint-François</button>

                    <button type="button" class="btn btn-primary bleu btComm">Saint-Louis</button>
                    <button type="button" class="btn btn-primary bleu btComm">Sainte-Anne</button>
                    <button type="button" class="btn btn-primary bleu btComm">Sainte-Rose</button>

                    <button type="button" class="btn btn-primary bleu btComm">Terre-de-Bas</button>
                    <button type="button" class="btn btn-primary bleu btComm">Terre-de-Haut</button>
                    <button type="button" class="btn btn-primary bleu btComm">Trois-Rivières</button>

                    <button type="button" class="btn btn-primary bleu btComm">Vieux-Fort</button>
                    <button type="button" class="btn btn-primary bleu btComm">Vieux-Habitants</button>

                    <div class="reponse">

                    </div>

                    <div class="eror ErorPage1SV"></div>
                    <div class="bout">
                        <a href="https://chalandiz.fr.gp/test/index.php"><input class="btnP" type="button" value="Précedent"></a>
                        <a href="#" class="btnS" type="submit" name="Suivant" value="Suivant" id="Addp2">Suivant</a>
                    </div>

                </div>

            </div>

        </div>

        <div class="container-fluid Page2" alt="Page2" id="p2">
            <div class="row">
                <div class="col gauche">

                </div>
                <div class="col">
                    <h2 class="ptitle">Quelles sont les coordonnée de l'entreprise ?</h2>

                    <div class="input-group mb-3 form-field error nomm">
                        <input type="text" name="nom" value="<?php echo $nom; ?>" class="form-control" placeholder="Nom" id="nom">
                        <small></small>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" name="prenom" value="<?php echo $prenom; ?>" class="form-control" placeholder="Prenom">
                    </div>

                    <div class="input-group mb-3">
                        <input type="tel" id="phone"  name="tel" value="<?php echo $tel; ?>" class="form-control" placeholder="0690XXXXXX">
                    </div>
                    

                    <div class="input-group mb-3">
                        <input type="text" name="postale" value="<?php echo $postale; ?>" class="form-control" placeholder="Adresse postale">
                    </div>

                    <div class="input-group mb-3">
                        <select class="form-select cat" id="inputGroupSelect01" name="cat">
                            <option selected disabled value="">Catégorie d'entreprise</option>
                            <option value="1">Administration</option>
                            <option value="2">Automobile</option>
                            <option value="3">Agroalimentaire</option>
                            <option value="4">Banque</option>
                            <option value="5">Beauté/Bien-être</option>
                            <option value="6">Bois/ Papier / Cartons / Imprimerie</option>
                            <option value="7">BTP Matériau de construction</option>
                            <option value="8">Centre de formation</option>
                            <option value="9">Chimie / Parachimie</option>
                            <option value="10">Commerce / Négoce / Distribution</option>
                            <option value="11">Ecommerce</option>
                            <option value="12">Edition / Communication / Multimédia</option>
                            <option value="13">Electronique/Electricité</option>
                            <option value="14">Evènementiel</option>
                            <option value="15">Etudes et Conseils</option>
                            <option value="16">Environnement</option>
                            <option value="17">Finance / Assurance</option>
                            <option value="18">Hôtellerie/Hébergement</option>
                            <option value="19">Technologie</option>
                            <option value="20">Immobilier</option>
                            <option value="21">Industrie pharmaceutique</option>
                            <option value="22">Machine et Equipement</option>
                            <option value="23">Métallurgie/Travail du métal</option>
                            <option value="24">Pêche</option>
                            <option value="26">Plomberie</option>
                            <option value="27">Ressources Huamines</option>
                            <option value="28">Restaurants</option>
                            <option value="29">Santé</option>
                            <option value="30">Service à domicile</option>
                            <option value="31">Services aux entreprises</option>
                            <option value="32">Sport / Loisir</option>
                            <option value="33">Textile / Habillement / Chaussure</option>
                            <option value="34">Tourisme</option>
                            <option value="35">Transport/Logistique</option>
                            <option value="36">Autres</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" placeholder="Email du gérant">
                    </div>

                    <div class="form-check">
                        <input class="form-check-input check_two" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label txt_two" for="flexCheckDefault">
                            Consentement RGPD
                        </label>
                    </div>

                    <div class="bout"><input class="btnP" type="button" value="Précedent" id="Del2">


                        <a href="#" class="btnS" type="submit" name="Suivant" value="suivant" id="Addp3">Suivant</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid Page3" alt="Page3" id="p3">
            <div class="row">
                <div class="col gauche">

                </div>
                <div class="col">
                    <h2 class="ptitle">Votre entreprise a t'elle une fiche Google Entreprise ?</h2>

                    <div class="input-group mb-3">
                        <input type="text" name="nomGmb" value="<?php echo $nomGmb; ?>" class="form-control" placeholder="Entrez le nom exact de votre fiche GMB">
                    </div>

                    <div class="input-group mb-3">
                        <input type="email" name="emailGmb" value="<?php echo $emailGmb; ?>" class="form-control" placeholder="Entrez l'adresse email qui gère cette fiche Google">
                    </div>

                    <div class="input-group mb-3">
                        <input type="url" name="urlGmb" id="urlGmb" class="form-control" placeholder="Coller le lien de votre fiche GMB ici">
                    </div>


                    <p> <abbr title="La fiche Google Entreprise correspond aux fiches présentant le nom, adresse, numéro de téléphone et notation d'entreprise ci-dessus" tabindex="0">?</abbr></p>

                    <div class="form-check">
                        <input class="form-check-input check_two" type="checkbox" value="GmbNon" id="GmbNonId">
                        <label class="form-check-label txt_two" for="GmbNonId">
                            Non, je n'ai pas de fiche Google
                        </label>
                    </div>
                    <div class="bout">
                        <input class="btnP" type="button" value="Précedent" id="Del3">
                        <a href="#" class="btnS" type="submit" name="Suivant" value="Suivant" id="Addp4">Suivant</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid Page4" alt="Page4" id="p4">
            <div class="row">
                <div class="col gauche">

                </div>
                <div class="col">
                    <h2 class="ptitle">Une entreprise peut avoir plusieurs catégories veuillez confirmer si vous appartenez à l'une des catégories suivante:</h2>

                    <div class="form-check">
                        <input class="form-check-input check_two" type="checkbox" value="" id="tourismeId">
                        <label class="form-check-label txt_two" for="tourismeId">
                            Tourisme
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input check_two" type="checkbox" value="" id="droitId">
                        <label class="form-check-label txt_two" for="droitId">
                            Droit
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input check_two" type="checkbox" value="" id="dServiceId">
                        <label class="form-check-label txt_two" for="serviceId">
                            Service à domicile
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input check_two" type="checkbox" value="" id="eServiceId">
                        <label class="form-check-label txt_two" for="eServiceId">
                            Service aux entreprise
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input check_two" type="checkbox" value="" id="plomberieId">
                        <label class="form-check-label txt_two" for="plomberieId">
                            Plomberie
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input check_two" type="checkbox" value="" id="technologiesId">
                        <label class="form-check-label txt_two" for="technologiesId">
                            Technologies
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input check_two" type="checkbox" value="" id="financeAssurancesId">
                        <label class="form-check-label txt_two" for="financeAssurancesId">
                            Finance & Assurances
                        </label>
                    </div>
                    <div class="bout">
                        <input class="btnP" type="button" value="Précedent" id="Del4">
                        <a href="#" class="btnS" type="submit" name="Suivant" value="Suivant" id="Addp5">Suivant</a>
                    </div>
                </div>

                

            </div>
        </div>

        <div class="container-fluid Page5" alt="Page5" id="p5">
                    <div class="row">
                        <div class="col gauche">

                        </div>
                        <div class="col">
                            <h2 class="ptitle">Sélectioner la durée de votre opération:</h2>

                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input check_two" type="checkbox" value="" id="libreId">
                                        <label class="form-check-label txt_two" for="libreId">
                                            Sélection libre
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input check_two" type="checkbox" value="" id="phareId">
                                        <label class="form-check-label txt_two" for="phareId">
                                            Evènement phare
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input check_two" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label txt_two" for="flexCheckDefault">
                                    Noël: du 1er au 29 Décembre
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input check_two" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label txt_two" for="flexCheckDefault">
                                    Fêtes des mères: l'opération va du 15 au 31 Mail
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input check_two" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label txt_two" for="flexCheckDefault">
                                    Saint-Valentin: l'opération va du 30 Janvier au 14 Février
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input check_two" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label txt_two" for="flexCheckDefault">
                                    Pâques: l'opération débute 16 jours avant pâques
                                </label>
                            </div>

                            <div>
                                <div class="row">
                                    <div class="col">
                                        <label for="startDate">Début</label>
                                        <input id="startDate" class="form-control date" type="date">
                                        <span id="startDateSelected"></span>
                                    </div>
                                    <div class="col">
                                        <label for="endDate">Fin</label>
                                        <input id="endDate" class="form-control date" type="date">
                                        <span id="endDateSelected"></span>
                                    </div>
                                </div>

                                <script>
                                    document.getElementById('startDate').valueAsDate = new Date();
                                    let startDate = document.getElementById('startDate')
                                    let endDate = document.getElementById('endDate')

                                    startDate.addEventListener('change', (e) => {
                                        let startDateVal = e.target.value
                                        document.getElementById('startDateSelected').innerText = startDateVal
                                    })

                                    endDate.addEventListener('change', (e) => {
                                        let endDateVal = e.target.value
                                        document.getElementById('endDateSelected').innerText = endDateVal
                                    })
                                </script>
                            </div>
                            <div class="bout">
                        <input class="btnP" type="button" value="précedent" id="Del5">
                        <a href="#" class="btnS" type="submit" name="Suivant" value="suivant" id="Addp6">Suivant</a>
                    </div>
                        </div>
                    </div>             
                </div>


        <div class="container-fluid Page6" alt="Page6" id="p6">
            <div class="row">
                <div class="col gauche">

                </div>
                <div class="col">
                    <h2 class="ptitle">Paiement</h2>

                    <p>0€</p>

                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input check_two" name="paie" type="radio" value="carte" id="carteId">
                                <label class="form-check-label txt_two" for="carteId">
                                    <span>Carte</span>
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input check_two" name="paie" type="radio" value="paypal" id="paypalId">
                                <label class="form-check-label txt_two" for="paypalId">
                                    <span>Paypal</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="bout">
                        <input class="btnP" type="button" value="précedent" id="Del6">
                        <a href="#" class="btnS" type="submit" name="Suivant" value="suivant" id="Addp7">Suivant</a>
                    </div>
                    <p>
                        Vous avez déjà enregistré votre entreprise? <a href="login.php">Connexion</a>
                    </p>


                </div>
            </div>
        </div>

        <div class="container-fluid Page7" alt="Page7" id="p7">
            <div class="row">
                <div class="col gauche">

                </div>
                <div class="col">
                    <h2 class="ptitle">Remerciements</h2>

                    <span>Félicitation vous avez fini!</span>

                    <span>Faites votre choix</span>

                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input check_two" type="radio" name="acc" value="cmt" id="creeCompteId">
                                <label class="form-check-label txt_two" for="creeCompteId">
                                    Je crée un compte client
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input check_two" type="radio" name="acc" value="lbr" id="libreNoAccId">
                                <label class="form-check-label txt_two" for="libreNoAccId">
                                    Je continue de façon libre
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" name="password_1" class="form-control" placeholder="Créer un mot de passe" value="6aA!!!sds">
                    </div>

                    <div class="input-group">
                        <input type="password" name="password_2" class="form-control" placeholder="Confirmez le mot de passe" value="6aA!!!sds">
                    </div>
                    <div class="input-group md-3">
                        <button type="submit" class="btn btn-primary bleu btComm" name="reg_user">S'enregistrer</button>
                    </div>
                    <div class="bout">
                        <input class="btnP" type="button" value="précedent" id="Del7">
                        <a href="#" class="btnS" type="submit" name="Suivant" value="suivant" id="Addp8">Suivant</a>
                    </div>
                </div>
            </div>
            <div class="container-fluid Page8" alt="Page8" id="p8">

            </div>
        </div>
    </form>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/chalandiz.js"></script>

    <!-- <script src="/intl-tel-input-17.0.0/build/js/intlTelInput.js"></script>
                    <script>
                        var input = document.querySelector("#phone");
                        window.intlTelInput(input, {
                            // any initialisation options go here
                        });
                    </script> -->


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

</body>

</html>