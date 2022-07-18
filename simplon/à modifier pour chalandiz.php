<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvgciusJWvPFTzVIidhW35VXZl_w4j8VA&libraries=places&callback=initMap"></script>

    <title>Formulaire</title>
</head>

<body>


    <form action="/stage/formulaire/server.php" method="POST" enctype="multipart/form-data">
    </form>
    <div class="container-fluid Page1" alt="Page1" id="p1">
        <!-- link css -->
        <link rel="stylesheet" href="/stage/css/page1.css">
        <div class="row">

            <div class="col">

            </div>
            <div class="col">
            <h1>Dans quelles communes souhaitez-vous faire de l'eCommerce ?</h1>
            <div class="mb-3" name="Com[]">
                <div class="listeC" role="group" aria-label="">

                    <button type="button" class="btn btn-primary bleu btComm" name="Les Abymes">Les Abymes</button>
                    <button type="button" class="btn btn-primary bleu btComm" name="Anse-Bertrand">Anse-Bertrand</button>
                    <button type="button" class="btn btn-primary bleu btComm" name="Baie-Mahault">Baie-Mahault</button>

                    <button type="button" class="btn btn-primary bleu btComm" name="Baillif">Baillif</button>
                    <button type="button" class="btn btn-primary bleu btComm" name="Basse-Terre">Basse-Terre</button>
                    <button type="button" class="btn btn-primary bleu btComm" name="Bouillante">Bouillante</button>

                    <button type="button" class="btn btn-primary bleu btComm" name="Capesterre-Belle-Eau">Capesterre-Belle-Eau</button>
                    <button type="button" class="btn btn-primary bleu btComm" name="Capesterre-de-Marie-Galante">Capesterre-de-Marie-Galante</button>
                    <button type="button" class="btn btn-primary bleu btComm" name="Gourbeyre">Gourbeyre</button>

                    <button type="button" class="btn btn-primary bleu btComm" name="La Désirade">La Désirade</button>
                    <button type="button" class="btn btn-primary bleu btComm" name="Deshaies">Deshaies</button>
                    <button type="button" class="btn btn-primary bleu btComm" name="Grand-Bourg">Grand-Bourg</button>

                    <button type="button" class="btn btn-primary bleu btComm" name="Le Gosier">Le Gosier</button>
                    <button type="button" class="btn btn-primary bleu btComm" name="Goyave">Goyave</button>
                    <button type="button" class="btn btn-primary bleu btComm" name="Lamentin">Lamentin</button>

                    <button type="button" class="btn btn-primary bleu btComm" name="Morne-à-l'Eau">Morne-à-l'Eau</button>
                    <button type="button" class="btn btn-primary bleu btComm" name="Le Moule">Le Moule</button>
                    <button type="button" class="btn btn-primary bleu btComm" name="Petit-Bourg">Petit-Bourg</button>

                    <button type="button" class="btn btn-primary bleu btComm" name="Petit-Canal">Petit-Canal</button>
                    <button type="button" class="btn btn-primary bleu btComm" name="Pointe-à-Pitre">Pointe-à-Pitre</button>
                    <button type="button" class="btn btn-primary bleu btComm" name="Pointe-Noire">Pointe-Noire</button>

                    <button type="button" class="btn btn-primary bleu btComm" name="Port-Louis">Port-Louis</button>
                    <button type="button" class="btn btn-primary bleu btComm" name="Saint-Claude">Saint-Claude</button>
                    <button type="button" class="btn btn-primary bleu btComm" name="Saint-François">Saint-François</button>

                    <button type="button" class="btn btn-primary bleu btComm" name="Saint-Louis">Saint-Louis</button>
                    <button type="button" class="btn btn-primary bleu btComm" name="Sainte-Anne">Sainte-Anne</button>
                    <button type="button" class="btn btn-primary bleu btComm" name="Sainte-Rose">Sainte-Rose</button>

                    <button type="button" class="btn btn-primary bleu btComm" name="Terre-de-Bas">Terre-de-Bas</button>
                    <button type="button" class="btn btn-primary bleu btComm" name="Terre-de-Haut">Terre-de-Haut</button>
                    <button type="button" class="btn btn-primary bleu btComm" name="Trois-Rivières">Trois-Rivières</button>

                    <button type="button" class="btn btn-primary bleu btComm" name="Vieux-Fort">Vieux-Fort</button>
                    <button type="button" class="btn btn-primary bleu btComm" name="Vieux-Habitants">Vieux-Habitants</button>
                </div>
            </div>
            <div class="reponse" style="width: 585px; border: 1px solid black; height: 112px;" id="reponse" name="reponse">

            </div>

            <style>
                .btn-warning {
                    border-color: white;
                    background-color: #FF8800;
                    margin-top: 5px;
                }
            </style>
            <div class="hidden">

            </div>


            <div class="eror">
                <p class="Tags">5 Tags maximum autorisés et un tag par commune </p>
            </div>
            
                    <div class="col">
                        <a href="https://chalandiz.shop.gp/stage/index.php"><input class="btnP" type="button" value="Précedent"></a>
                    </div>

                    <div class="col">
                        <input class="btnS" type="submit" name="submit" value="Suivant" id="Addp2" />
                    </div>
            </div>
            
        </div>
    </div>





    <div class="container-fluid Page2" alt="Page2" id="p2">
        <link rel="stylesheet" href="/stage/css/Page2.css">
        <div class="row">
            <div class="col gauche">
                <img src="" alt="">
            </div>
            <div class="col">
                <h1 class="title">Quelles sont les coordonnées de l'entreprise</h1>

                <div class="col-md-4 frm p2frm">
                    <label for="nomId" class="form-label"></label>
                    <input type="text" class="form-control frm" name="fname" id="nomId" placeholder="Nom">
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col eror">
                            <p class="NomError">5 Tags maximum autorisés et un tag par commune </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p2frm">
                    <label for="prenomId" class="form-label">
                        <span class="error"> <?php echo $prenomErr; ?></span></label>
                    <input type="text" class="form-control" name="lname" id="prenomId" placeholder="Prénom">

                </div>

                <div class="col-md-4 p2frm">
                    <label for="numId" class="form-label">
                        <span class="error"> <?php echo $numErr; ?></span></label>
                    <input type="text" class="form-control" maxlength="10" name="tel" id="numId" placeholder="Télephone">
                    <div id="element" tabindex="-1"></div>

                </div>

                <div class="col-md-4 p2frm">
                    <label for="postId" class="form-label">
                        <span class="error"> <?php echo $postErr; ?></span></label>
                    <input type="text" class="form-control" name="postal-code" id="postId" placeholder="Adresse postale">

                </div>



                <!-- RAJOUTER VERFICATION POUR EMAIL GERANT -->
                <div class="col-md-4 p2frm">
                    <label for="gerId" class="form-label">
                        <span class="error"> <?php echo $postErr; ?></span></label>
                    <input type="text" class="form-control" name="email" id="gerId" placeholder="Adresse email du gérant" autocomplete="off">

                </div>

                <div class="col-md-3">
                    <label for="cat" class="form-label">
                        <span class="error"> <?php echo $catErr; ?></span></label>
                    <select class="form-select" id="cat" style="font-family: Poppins;">
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
                        <span class="error">* <?php echo $na; ?></span>
                    </select>
                </div>




                <div class="form_one col-md-4" style="margin-top: 3%;">
                    <div class="form-check">
                        <input class="form-check-input check" type="checkbox" value="" id="flexCheckDefault" class="check1">
                        <label class="form-check-label txt" for="flexCheckDefault" name="check1" value="reponse1" style="display: -webkit-inline-box;">
                            <span>Consentement RGPD</span>
                        </label>
                    </div>
                </div>




                <div class="container">
                    <div class="row">
                        <div class="col">

                        </div>
                        <div class="col">
                            <input class="btnP" type="button" value="Précedent" id="Del2">
                        </div>
                        <div class="col">
                            <a href="#" class="btnS" type="submit" name="submit" value="suivant" id="Addp3">Suivant</a>
                        </div>
                        <div class="col">

                        </div>
                    </div>
                </div>
            </div>







        </div>
    </div>







    <div class="container-fluid Page3" alt="Page3" id="p3">

        <!-- link--css -->
        <link rel="stylesheet" href="/stage/css/Page3.css">
        <div class="row">
            <div class="col gauche">

            </div>
            <div class="col" style="margin-top: 5%;">
                <h1 class="title">Votre entreprise a t'elle une fiche Google Entreprise?</h1>
                <!--formulaire - début-->

                <!-- <p><span class="error">* Champ requis</span></p> -->

                <div class="col-md-4 frm">
                    <label for="nomId" class="form-label"><span class="error"> <?php echo $nomErr; ?></span></label>
                    <input type="text" class="form-control frm" name="nomGMB" id="searchTextField" placeholder="Nom de la fiche GMB">
                    <p class="inf"><abbr title="Entrez le nom exact de votre fiche Google My Business" tabindex="0">?</abbr></p>
                </div>

                <script>
                    function initialize() {

                        const options = {

                            componentRestrictions: {
                                country: "gp"
                            },
                            fields: ["address_components", "geometry", "icon", "name"],
                            strictBounds: false,
                            types: ["establishment"],
                        }


                        var input = document.getElementById('searchTextField');
                        new google.maps.places.Autocomplete(input, options);


                    }


                    google.maps.event.addDomListener(window, 'load', initialize);
                </script>

                <div class="col-md-4">
                    <label for="emailId" class="form-label"><span class="error"> <?php echo $nomErr; ?></span></label>
                    <input type="text" class="form-control" name="email" id="emailId" placeholder="Email GMB" autocomplete="off">
                    <p class="inf"><abbr title="Entrez l'adresse email qui gère cette fiche Google" tabindex="0">?</abbr></p>
                </div>

                <div class="form_one google">
                    <div class="form-check">
                        <input class="form-check-input check" type="checkbox" value="" id="flexCheckDefault" class="check1">
                        <label class="form-check-label txt" for="flexCheckDefault" name="check1" value="reponse1" style="display: -webkit-inline-box;">
                            <strong> Non je n'ai pas de fiche google </strong>
                        </label>
                    </div>
                </div>

                <p>
                    la fiche google entreprise correspond aux fiches présentant le nom, adresse, numéro de téléphone et notation d'entreprise ci dessus
                </p>

                <div class="container">
                    <div class="row">
                        <div class="col">

                        </div>
                        <div class="col">
                            <input class="btnP" type="button" value="Précedent" id="Del3">
                        </div>
                        <div class="col">
                            <a href="#" class="btnS" type="submit" name="submit" value="suivant" id="Addp4">Suivant</a>
                        </div>
                        <div class="col">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid Page4" alt="Page4" id="p4">

        <!-- link css -->
        <link rel="stylesheet" href="/stage/css/page4.css">

        <div class="row">
            <div class="col-6 gauche">

            </div>
            <div class="col">
                <h1>Une entreprise peut avoir plusieurs catégories veuillez confirmer si vous apprtenez à l'une des catégories suivante.</h1>
                <div class="container">
                    <div class="row">
                        <div class="form_one">
                            <div class="form-check4">
                                <input class="form-check-input check" type="checkbox" value="" id="1Check4" class="check1">
                                <label style="display: inline-flex;" class="form-check-label txt" for="" name="check1" value="reponse1">
                                    Tourisme
                                </label>
                            </div>
                        </div>

                        <div class="form_one">
                            <div class="form-check4">
                                <input class="form-check-input check" type="checkbox" value="" id="2Check4" class="check1">
                                <label style="display: inline-flex;" class="form-check-label txt" for="" name="check1" value="reponse1">
                                    Droit
                                </label>
                            </div>
                        </div>

                        <div class="form_one">
                            <div class="form-check4">
                                <input class="form-check-input check" type="checkbox" value="" id="3Check4" class="check1">
                                <label style="display: inline-flex;" class="form-check-label txt" for="" name="Check4" value="reponse1">
                                    Service à domicile
                                </label>
                            </div>
                        </div>

                        <div class="form_one">
                            <div class="form-check4">
                                <input class="form-check-input check" type="checkbox" value="" id="4Check4" class="check1">
                                <label style="display: inline-flex;" class="form-check-label txt" for="" name="check1" value="reponse1">
                                    Service aux entreprises
                                </label>
                            </div>
                        </div>

                        <div class="form_one">
                            <div class="form-check4">
                                <input class="form-check-input check" type="checkbox" value="" id="5Check4" class="check1">
                                <label style="display: inline-flex;" class="form-check-label txt" for="flexCheckDefault" name="check1" value="reponse1">
                                    Plomberie
                                </label>
                            </div>
                        </div>

                        <div class="form_one">
                            <div class="form-check4">
                                <input class="form-check-input check" type="checkbox" value="" id="6Check4" class="check1">
                                <label style="display: inline-flex;" class="form-check-label txt" for="flexCheckDefault" name="check1" value="reponse1">
                                    Technologies
                                </label>
                            </div>
                        </div>

                        <div class="form_one">
                            <div class="form-check4">
                                <input class="form-check-input check" type="checkbox" value="" id="7Check4" class="check1">
                                <label style="display: inline-flex;" class="form-check-label txt" for="flexCheckDefault" name="check1" value="reponse1">
                                    Finance & Assurances
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col eror4" id="Er4">
                            <p class="Tags"> Séléctionnez au moins une catégorie </p>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col">

                        </div>
                        <div class="col">
                            <input class="btnP" type="button" value="Précedent" id="Del4">
                        </div>
                        <div class="col">
                            <a href="#" class="btnS" type="submit" name="submit" value="suivant" id="Addp5">Suivant</a>
                        </div>
                        <div class="col">

                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>






    <div class="container-fluid Page5" alt="Page5" id="p5">
        <!-- link css -->
        <link rel="stylesheet" href="/stage/css/page5.css">

        <div class="row">
            <div class="col-6 gauche">
                <img src="" class="person" alt="">
            </div>
            <div class="col" style="margin-top: 4.2%;">
                <h1>Sélectionnez la durée de votre opération</h1>
                <p style="text-align: center; font-family: 'Poppins'; font-weight: 600; font-size: larger; color: #20A2DC;">
                    Une seule option autorisé !</p>
                <div class="container-fluid">
                    <div class="row">

                        <div class="col">
                            <div class="form_one select">
                                <div class="form-check">
                                    <input class="form-check-input check_one" type="checkbox" value="" id="0Check6" class="check_one1">
                                    <label class="form-check-label txt_one" for="flexCheckDefault" name="check_one1" value="reponse1">
                                        Sélection libre
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">

                        </div>
                        <div class="col-3">

                        </div>
                        <div class="col-3">
                            <div class="form_one">
                                <div class="form-check">
                                    <input class="form-check-input check_one" type="checkbox" value="" id="0Check5" class="check_one2">
                                    <label class="form-check-label txt_one" for="flexCheckDefault" name="check_one2" value="reponse2">
                                        Évènement phare
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col">

                    </div>
                    <div class="col" id="checkbox_g5">

                        <p style="margin-bottom: 20%; text-align: center;
                font-family: 'Poppins';
                font-weight: 600;
                font-size: larger;
                color: #20A2DC;">Un Seule Évènement phare autorisé !</p>
                        <div class="row">



                            <div class="form-check">
                                <input class="form-check-input check_two" type="checkbox" value="" id="1Check5">
                                <label class="form-check-label txt_two" for="flexCheckDefault">
                                    Noël: du 1er au 29 Décembre
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input check_two" type="checkbox" value="" id="2Check5">
                                <label class="form-check-label txt_two" for="flexCheckDefault">
                                    Fêtes des mères: l'opération va du 15 au 31 Mai
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input check_two" type="checkbox" value="" id="3Check5">
                                <label class="form-check-label txt_two" for="flexCheckDefault">
                                    Saint-Valentin: l'opération va du 30 Janvier au 14 Févrirer
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input check_two" type="checkbox" value="" id="4Check5">
                                <label class="form-check-label txt_two" for="flexCheckDefault">
                                    Pâques: l'opération débute 26 jours avant pâques
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class="col">

                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col">

                        </div>
                        <div class="col">
                            <input class="btnP" type="button" value="précedent" id="Del5">
                        </div>
                        <div class="col">
                            <a href="#" class="btnS" type="submit" name="submit" value="suivant" id="Addp6">Suivant</a>
                        </div>
                        <div class="col">

                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>





    <div class="container-fluid Page6" alt="Page6" id="p6">


        <!--duree debut-->
        <div class="row">
            <div class="col gauche">

            </div>
            <div class="col" style="margin-top: 8%;">
                <h1>Séléctionnez la durée de votre opération</h1>

                <p style="margin-bottom: 5%; text-align: center;
                font-family: 'Poppins';
                font-weight: 600;
                font-size: larger;
                color: #20A2DC;">Sélection libre</p>


                <div class="container">
                    <div class="row">
                        <div class="col" style="font-family: Poppins;" id="Calendar1">
                            <label for="startDate">Début de l'opération</label>
                            <input id="startDate" class="form-control" type="date" />
                            <span id="startDateSelected"></span>
                        </div>
                        <div class="col" style="font-family: Poppins;" id="Calendar2">
                            <label for="endDate">Fin de l'opération</label>
                            <input id="endDate" class="form-control" type="date" />
                            <span id="endDateSelected"></span>
                        </div>
                    </div>
                    <script>
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


                <div class="container">
                    <div class="row" style="margin-bottom: 18%; margin-top: 6%;">
                        <div class="col">

                        </div>
                        <div class="col">
                            <input class="btnP" type="button" value="précedent" id="Del6">
                        </div>
                        <div class="col">



                            <a href="#" class="btnS" type="submit" name="Suivant" value="suivant" id="Addp7">Suivant</a>
                        </div>
                        <div class="col">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container-fluid Page6" alt="Page6bis" id="p6bis">


        <!--duree debut-->
        <div class="row">
            <div class="col gauche">

            </div>
            <div class="col">
                <h1>Séléctionnez la durée de votre opération</h1>
                <p style="margin-bottom: 5%; text-align: center;
                font-family: 'Poppins';
                font-weight: 600;
                font-size: larger;
                color: #20A2DC;">Évènement phare </p>




                <div class="container">
                    <div class="row">
                        <div class="col" style="font-family: Poppins;" id="Calendar1">

                            <input id="DateDebut" class="form-control" type="text" />

                        </div>
                        <div class="col" style="font-family: Poppins;" id="Calendar2">

                            <input id="DateFin" class="form-control" type="text" />

                        </div>
                    </div>




                </div>


                <div class="container">
                    <div class="row" style="margin-bottom: 18%; margin-top: 6%;">
                        <div class="col">

                        </div>
                        <div class="col">
                            <input class="btnP" type="button" value="précedent" id="Del6bis">
                        </div>


                        <div class="col">
                            <a href="#" class="btnS" type="submit" name="Suivant" value="suivant" id="Addp7bis">Suivant</a>
                        </div>


                        <div class="col">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container-fluid Page7" alt="Page7" id="p7">



        <div class="row">
            <div class="col gauche">

            </div>
            <div class="col" style="margin-top: 10%;">
                <h1>Paiement</h1>
                <p>Veuillez choisir votre méthode de paiement</p>

                <p style="font-weight: bolder; font-size:30px; margin-top:10%; margin-bottom:4%;">Prix</p>

                <div class="container">
                    <div class="row">
                        <div class="col" style="margin-left: 25%;">

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">
                                    <i><img src="/stage/img/carte-de-credit.png" alt="Crédit" width="20%"></i>
                                </label>
                            </div>

                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">
                                    <i><img src="/stage/img/paypal.png" alt="Paypal" width="20%"></i>
                                </label>
                            </div>
                        </div>


                    </div>
                </div>


                <div class="container">
                    <div class="row" style="margin-top: 6%; margin-bottom: 21%;">
                        <div class="col">

                        </div>
                        <div class="col">
                            <input class="btnP" type="button" value="précedent" id="Del7">
                        </div>
                        <div class="col">



                            <a href="#" class="btnS" type="submit" name="Suivant" value="suivant" id="Addp8">Suivant</a>
                        </div>
                        <div class="col">

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>





    <div class="container-fluid Page8" alt="Page8" id="p8">

        <div class="row">
            <div class="col gauche">

            </div>
            <div class="col" style="margin-top: 8%;">
                <h1>Remerciement</h1>
                <p>Félicitaion vous avez fini!</p>
                <p>Faites votre choix</p>

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">
                                    <p>Je crée un compte client</p>
                                </label>
                            </div>
                        </div>
                        <div class="col">

                        </div>

                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">
                                    <p>Je continue de façon libre</p>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col">

                        </div>
                        <div class="col-7">

                            <div class="">
                                <label for="exampleInputPassword1" class="form-label"></label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Créer un mot de passe">
                            </div>

                            <div class="">
                                <label for="exampleInputPassword1" class="form-label"></label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirmer le mot de passe">
                            </div>

                        </div>
                        <div class="col">

                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-4">

                        </div>
                        <div class="col">
                            <a href="#" class="btnS" type="submit" name="Suivant" value="suivant" id="#" style="background-color: #f37150;
                                    color: white;
                                    font-weight: bolder;
                                    border-radius: 90px;
                                    padding-top: 15px;
                                    padding-bottom: 15px;
                                    padding-right: 50px;
                                    padding-left: 50px;
                                    border: none;
                                    margin-top: 10%;
                                    text-decoration: none;
                                    margin-bottom: 15%;">Je crée mon compte</a>
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col">

                        </div>
                        <div class="col-5">
                            <style>
                                a:hover {
                                    color: white;
                                }
                            </style>

                            <a href="#" class="btn btn-primary" style="color: #000;
                                background-color: #ffffff;
                                border-color: #000000;
                                border-radius: inherit; padding-right: 55px;
                                padding-left: 55px; margin-top: 5%; margin-bottom: 45%;
                                font-family: Poppins;">Télécharger le récapitulatif</a>
                        </div>
                        <div class="col">

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <!-- ALERTS -->


    <!-- Succes Alert -->

    <!-- <div class="alert alert-success alert-dismissible fade show">
        <strong>Félicitaiton!</strong> Vous pouvez passer à l'étape suivanete.
        <button type="button" class="btn-close" data-bs-dismiss="alert" id="succes"></button>
    </div> -->




    <!-- Error Alert -->

    <!-- <div class="alert alert-danger alert-dismissible d-flex align-items-center fade show">
      	<i class="bi-exclamation-octagon-fill"></i>
        <strong class="mx-2">Erreur!</strong> Sélectionnez au moins une catégorie!
        <button type="button" class="btn-close" data-bs-dismiss="alert" id="Errorp4"></button>
    </div> -->




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="/chalandiz/js/formulaire.js"></script>



    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>