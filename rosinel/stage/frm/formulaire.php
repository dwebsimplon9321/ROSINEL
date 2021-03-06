<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>Formulaire</title>
</head>

<body>
    <form name="myFrm" method="post" action="formulaire.php">
        <?php include('errors.php'); ?>

        <div class="container-fluid Page1" alt="Page1" id="p1">
            <!-- link css -->
            <link rel="stylesheet" href="/stage/css/page1.css">
            <div class="row">
                <div class="col-6 gauche">

                </div>

                <div class="col mb-3">
                    <h2>Dans quelles communes souhaitez-vous faire de l'eCommerce ?</h2>
                    <div class="listeC" role="group" aria-label="">
                        <button type="button" class="btn btn-primary bleu btComm">Les Abymes</button>
                        <button type="button" class="btn btn-primary bleu btComm">Anse-Bertrand</button>
                        <button type="button" class="btn btn-primary bleu btComm">Baie-Mahault</button>

                        <button type="button" class="btn btn-primary bleu btComm">Baillif</button>
                        <button type="button" class="btn btn-primary bleu btComm">Basse-Terre</button>
                        <button type="button" class="btn btn-primary bleu btComm">Bouillante</button>

                        <button type="button" class="btn btn-primary bleu btComm">Capesterre-Belle-Eau</button>
                        <button type="button" class="btn btn-primary bleu btComm">Capesterre-de-Marie-Galante</button>
                        <button type="button" class="btn btn-primary bleu btComm">Gourbeyre</button>

                        <button type="button" class="btn btn-primary bleu btComm">La D??sirade</button>
                        <button type="button" class="btn btn-primary bleu btComm">Deshaies</button>
                        <button type="button" class="btn btn-primary bleu btComm">Grand-Bourg</button>

                        <button type="button" class="btn btn-primary bleu btComm">Le Gosier</button>
                        <button type="button" class="btn btn-primary bleu btComm">Goyave </button>
                        <button type="button" class="btn btn-primary bleu btComm">Lamentin</button>

                        <button type="button" class="btn btn-primary bleu btComm">Morne-??-l'Eau</button>
                        <button type="button" class="btn btn-primary bleu btComm">Le Moule</button>
                        <button type="button" class="btn btn-primary bleu btComm">Petit-Bourg</button>

                        <button type="button" class="btn btn-primary bleu btComm">Petit-Canal</button>
                        <button type="button" class="btn btn-primary bleu btComm">Pointe-??-Pitre</button>
                        <button type="button" class="btn btn-primary bleu btComm">Pointe-Noire</button>

                        <button type="button" class="btn btn-primary bleu btComm">Port-Louis</button>
                        <button type="button" class="btn btn-primary bleu btComm">Saint-Claude</button>
                        <button type="button" class="btn btn-primary bleu btComm">Saint-Fran??ois</button>

                        <button type="button" class="btn btn-primary bleu btComm">Saint-Louis</button>
                        <button type="button" class="btn btn-primary bleu btComm">Sainte-Anne</button>
                        <button type="button" class="btn btn-primary bleu btComm">Sainte-Rose</button>

                        <button type="button" class="btn btn-primary bleu btComm">Terre-de-Bas</button>
                        <button type="button" class="btn btn-primary bleu btComm">Terre-de-Haut</button>
                        <button type="button" class="btn btn-primary bleu btComm">Trois-Rivi??res</button>

                        <button type="button" class="btn btn-primary bleu btComm">Vieux-Fort</button>
                        <button type="button" class="btn btn-primary bleu btComm">Vieux-Habitants</button>
                    </div>
                    <p>5 tags autoris??s maximum et un tag par commune</p>

                    <div class="reponse">

                    </div>
                    <div class="bout"><a href="https://chalandiz.shop.gp/stage/index.php"><input class="btnP" type="button" value="Pr??cedent"></a>
                        <a href="#" class="btnS" type="submit" name="Suivant" value="Suivant" id="Addp2">Suivant</a>
                    </div>

                </div>

            </div>
        </div>
        <div class="container-fluid Page2" alt="Page2" id="p2">
            <link rel="stylesheet" href="/stage/css/Page2.css">

            <div class="row">
                <div class="col gauche">

                </div>
                <div class="col">
                    <h2 class="title">Quelles sont les coordonn??es de l'entreprise</h2>
                    <!--formulaire - d??but-->

                    <!-- php dans mes mp -->

                    <!--<p style="margin-bottom: 3%; margin-top: -3%;"><span class="error">* Champ requis</span></p>-->

                    <!--<form class="formulaire" method="post" action="<?php #echo htmlspecialchars($_SERVER["PHP_SELF"]); 
                                                                        ?>" style="margin-top: -6%">-->


                    <input type="text" class="form-control frm" name="nom" placeholder="Nom" value="<?php echo $nom; ?>" id="nomId">
                    <!--<span class="error">* <#?php echo $errorNom; ?></span></label>-->

                    <p> <abbr title="Ce champ ne doit pas comporter de caract??res sp??ciaux" tabindex="0">?</abbr></p>



                    <input type="text" class="form-control frm" name="prenom" placeholder="Pr??nom" value="<?php echo $nom; ?>" id="prenomId">

                    <!--<span class="error">* <#?php echo $errors; ?></span></label>-->
                    <p> <abbr title="Ce champ ne doit pas comporter de caract??res sp??ciaux" tabindex="0">?</abbr></p>


                    <input type="text" class="form-control frm" maxlength="25" name="num" placeholder="+590690XXXXXX" value="<?php echo $num; ?>" id="numId">
                    <p> <abbr title="Ce champ ne doit pas comporter de caract??res sp??ciaux" tabindex="0">?</abbr></p>


                    <input type="text" class="form-control frm" name="postale" placeholder="Adresse postale" value="<?php echo $postale; ?>" id="postaleId">
                    <p> <abbr title="Ce champ ne doit pas comporter de caract??res sp??ciaux" tabindex="0">?</abbr></p>


                    <select class="form-select custom-select" name="cat" value="<?php echo $cat; ?>" id="catId">
                        <option selected disabled value="">Cat??gorie d'entreprise</option>
                        <option value="1">Administration</option>
                        <option value="2">Automobile</option>
                        <option value="3">Agroalimentaire</option>
                        <option value="4">Banque</option>
                        <option value="5">Beaut??/Bien-??tre</option>
                        <option value="6">Bois/ Papier / Cartons / Imprimerie</option>
                        <option value="7">BTP Mat??riau de construction</option>
                        <option value="8">Centre de formation</option>
                        <option value="9">Chimie / Parachimie</option>
                        <option value="10">Commerce / N??goce / Distribution</option>
                        <option value="11">Ecommerce</option>
                        <option value="12">Edition / Communication / Multim??dia</option>
                        <option value="13">Electronique/Electricit??</option>
                        <option value="14">Ev??nementiel</option>
                        <option value="15">Etudes et Conseils</option>
                        <option value="16">Environnement</option>
                        <option value="17">Finance / Assurance</option>
                        <option value="18">H??tellerie/H??bergement</option>
                        <option value="19">Technologie</option>
                        <option value="20">Immobilier</option>
                        <option value="21">Industrie pharmaceutique</option>
                        <option value="22">Machine et Equipement</option>
                        <option value="23">M??tallurgie/Travail du m??tal</option>
                        <option value="24">P??che</option>
                        <option value="26">Plomberie</option>
                        <option value="27">Ressources Huamines</option>
                        <option value="28">Restaurants</option>
                        <option value="29">Sant??</option>
                        <option value="30">Service ?? domicile</option>
                        <option value="31">Services aux entreprises</option>
                        <option value="32">Sport / Loisir</option>
                        <option value="33">Textile / Habillement / Chaussure</option>
                        <option value="34">Tourisme</option>
                        <option value="35">Transport/Logistique</option>
                        <option value="36">Autres</option>
                    </select>

                    <br><br>

                    <!--<label for="emailId" class="form-label">Adresse email du g??rant</label>-->
                    <input type="text" class="form-control frm" name="email" placeholder="Adresse email du g??rant" value="<?php echo $postale; ?>" id="emailId">
                    <p> <abbr title="Ce champ ne doit pas comporter de caract??res sp??ciaux" tabindex="0">?</abbr></p>

                    <span rgpd> Consentement <a href="#">RGPD</a> <input type="checkbox" class="rgpd" name="rgpd" value="rgpdVal"> </span>

                    <br><br>
                    <div class="bout"><input class="btnP" type="button" value="Pr??cedent" id="Del2">
                        
                            
                        <button class="btnS" type="submit" name="Suivant" value="suivant" onsubmit="return isEmpty()" id="Addp3">Suivant</button>
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
                <div class="col frm">
                    <h2 class="title">Votre entreprise a t'elle une fiche Google Entreprise?</h2>
                    <!--formulaire - d??but-->

                    <!--<p><span class="error">* Champ requis</span></p>-->


                    <label for="nomGmbId" class="form-label">Nom de la fiche GMB
                        <!--<span class="error">* <?php #echo $nomErr; 
                                                    ?></span>-->
                    </label>
                    <input type="text" class="form-control frm" name="nom" id="nomGmbId">
                    <p class="inf"><abbr title="Entrez le nom exact de votre fiche Google My Business" tabindex="0">?</abbr></p>



                    <label for="emailGmbId" class="form-label">Email GMB
                        <!--<span class="error">*<?php #echo $nomErr; 
                                                    ?></span>-->
                    </label>
                    <input type="text" class="form-control" name="email" id="emailGmbId">
                    <p class="inf"><abbr title="Entrez l'adresse email qui g??re cette fiche Google" tabindex="0">?</abbr></p>


                    <div class="form_one google">
                        <div class="form-check">
                            <input class="form-check-input check" type="checkbox" value="" id="gmbId" class="check1">
                            <label class="form-check-label txt" for="gmbId" name="gmb" value="reponse1">
                                <strong> Non je n'ai pas de fiche google </strong>
                            </label>
                        </div>
                    </div>

                    <p>
                        la fiche google entreprise correspond aux fiches pr??sentant le nom, adresse, num??ro de t??l??phone et notation d'entreprise ci dessus
                    </p>

                    <div class="bout">
                        <input class="btnP" type="button" value="Pr??cedent" id="Del3">
                        <a href="#" class="btnS" type="submit" name="Suivant" value="Suivant" id="Addp4">Suivant</a>
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
                    <h2>Une entreprise peut avoir plusieurs cat??gories veuillez confirmer si vous apprtenez ?? l'une des cat??gories suivante.</h2>
                    <div class="form_one">
                        <div class="form-check">
                            <input class="form-check-input check" type="checkbox" value="" id="flexCheckDefault" class="check1">
                            <label class="form-check-label txt" for="flexCheckDefault" name="check1" value="reponse1">
                                Tourisme
                            </label>
                        </div>
                    </div>

                    <div class="form_one">
                        <div class="form-check">
                            <input class="form-check-input check" type="checkbox" value="" id="flexCheckDefault" class="check1">
                            <label class="form-check-label txt" for="flexCheckDefault" name="check1" value="reponse1">
                                Droit
                            </label>
                        </div>
                    </div>

                    <div class="form_one">
                        <div class="form-check">
                            <input class="form-check-input check" type="checkbox" value="" id="flexCheckDefault" class="check1">
                            <label class="form-check-label txt" for="flexCheckDefault" name="check1" value="reponse1">
                                Service ?? domicile
                            </label>
                        </div>
                    </div>

                    <div class="form_one">
                        <div class="form-check">
                            <input class="form-check-input check" type="checkbox" value="" id="flexCheckDefault" class="check1">
                            <label class="form-check-label txt" for="flexCheckDefault" name="check1" value="reponse1">
                                Service aux entreprises
                            </label>
                        </div>
                    </div>

                    <div class="form_one">
                        <div class="form-check">
                            <input class="form-check-input check" type="checkbox" value="" id="flexCheckDefault" class="check1">
                            <label class="form-check-label txt" for="flexCheckDefault" name="check1" value="reponse1">
                                Plomberie
                            </label>
                        </div>
                    </div>

                    <div class="form_one">
                        <div class="form-check">
                            <input class="form-check-input check" type="checkbox" value="" id="flexCheckDefault" class="check1">
                            <label class="form-check-label txt" for="flexCheckDefault" name="check1" value="reponse1">
                                Technologies
                            </label>
                        </div>
                    </div>

                    <div class="form_one">
                        <div class="form-check">
                            <input class="form-check-input check" type="checkbox" value="" id="flexCheckDefault" class="check1">
                            <label class="form-check-label txt" for="flexCheckDefault" name="check1" value="reponse1">
                                Finance & Assurances
                            </label>
                        </div>
                    </div>
                    <div class="bout">
                        <input class="btnP" type="button" value="Pr??cedent" id="Del4">
                        <a href="#" class="btnS" type="submit" name="Suivant" value="Suivant" id="Addp5">Suivant</a>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid Page5" alt="Page5" id="p5">
            <!-- link css -->
            <link rel="stylesheet" href="/stage/css/page5.css">

            <div class="row">
                <div class="col-6 gauche">

                </div>
                <div class="col">
                    <h2>S??lectionnez la dur??e de votre op??ration</h2>
                    <p>Cochez la case qui correspond</p>
                    <div class="row">
                        <!-- <form action="" class="needs-validation" novalidate> -->
                        <div class="col">
                            <div class="form_one select">
                                <div class="form-check">
                                    <input class="form-check-input check_one" type="checkbox" value="" id="flexCheckDefault" class="check_one1">
                                    <label class="form-check-label txt_one" for="flexCheckDefault" name="check_one1" value="reponse1">
                                        S??lection libre
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
                                    <input class="form-check-input check_one" type="checkbox" value="" id="flexCheckDefault" class="check_one2">
                                    <label class="form-check-label txt_one" for="flexCheckDefault" name="check_one2" value="reponse2">
                                        ??v??nement phare
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input check_two" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label txt_two" for="flexCheckDefault">
                            No??l: du 1er au 29 D??cembre
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input check_two" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label txt_two" for="flexCheckDefault">
                            F??tes des m??res: l'op??ration va du 15 au 31 Mai
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input check_two" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label txt_two" for="flexCheckDefault">
                            Saint-Valentin: l'op??ration va du 30 Janvier au 14 F??vrirer
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input check_two" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label txt_two" for="flexCheckDefault">
                            P??ques: l'op??ration d??bute 26 jours avant p??ques
                        </label>
                    </div>
                    <div class="bout">
                        <input class="btnP" type="button" value="pr??cedent" id="Del5">
                        <a href="#" class="btnS" type="submit" name="Suivant" value="suivant" id="Addp6">Suivant</a>
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
                    <h1>S??l??ctionnez la dur??e de votre op??ration</h1>
                    <p>S??lectionnez la p??riode de votre op??ration</p>

                    <div class="container-fluid">
                        <div class="row">
                            <!-- <form action="" class="needs-validation" novalidate> -->
                            <div class="col">
                                <div class="form_one select">
                                    <div class="form-check">
                                        <input class="form-check-input check_one" type="checkbox" value="" id="flexCheckDefault" class="check_one1">
                                        <label class="form-check-label txt_one" for="flexCheckDefault" name="check_one1" value="reponse1">
                                            S??lection libre
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
                                        <input class="form-check-input check_one" type="checkbox" value="" id="flexCheckDefault" class="check_one2">
                                        <label class="form-check-label txt_one" for="flexCheckDefault" name="check_one2" value="reponse2">
                                            ??v??nement phare
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="container">
                        <div class="row">
                            <div class="col" style="font-family: Poppins;">
                                <label for="startDate">D??but</label>
                                <input id="startDate" class="form-control" type="date" />
                                <span id="startDateSelected"></span>
                            </div>
                            <div class="col" style="font-family: Poppins;">
                                <label for="endDate">Fin</label>
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

                    <div class="bout">
                        <input class="btnP" type="button" value="pr??cedent" id="Del6">
                        <a href="#" class="btnS" type="submit" name="Suivant" value="suivant" id="Addp7">Suivant</a>
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
                    <p>Veuillez choisir votre m??thode de paiement</p>

                    <p style="font-weight: bolder; font-size:30px; margin-top:10%; margin-bottom:4%;">Prix</p>

                    <div class="container">
                        <div class="row">
                            <div class="col" style="margin-left: 25%;">

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">
                                        <i><img src="/stage/img/carte-de-credit.png" alt="Cr??dit" width="20%"></i>
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

                    <div class="bout">
                        <input class="btnP" type="button" value="pr??cedent" id="Del7">
                        <a href="#" class="btnS" type="submit" name="Suivant" value="suivant" id="Addp8">Suivant</a>
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
                    <p>F??licitaion vous avez fini!</p>
                    <p>Faites votre choix</p>

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">
                                        <p>Je cr??e un compte client</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col">

                            </div>

                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">
                                        <p>Je continue de fa??on libre</p>
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
                                <form>
                                    <div class="">
                                        <label for="exampleInputPassword1" class="form-label"></label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Cr??er un mot de passe">
                                    </div>
                                </form>
                                <form>
                                    <div class="">
                                        <label for="exampleInputPassword1" class="form-label"></label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirmer le mot de passe">
                                    </div>
                                </form>
                            </div>
                            <div class="col">

                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-4">

                            </div>

                            <div class="bout">
                                <a href="#" class="btnS" type="submit" name="Suivant" value="suivant" id="#">
                                    Je cr??e mon compte
                                </a>
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
                                font-family: Poppins;">T??l??charger le r??capitulatif</a>
                            </div>
                            <div class="col">

                            </div>
                        </div>
                    </div>

                </div>

            </div>
    </form>








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="/stage/js/formulaire.js"></script>
    <script src="/stage/js/chalandiz.js"></script>

    <script type="text/javascript">
        window.addEventListener('keydown', function(e) {
            if (e.keyIdentifier == 'U+000A' || e.keyIdentifier == 'Enter' || e.keyCode == 13) {
                if (e.target.nodeName == 'INPUT' && e.target.type == 'text') {
                    e.preventDefault();
                    return false;
                }
            }
        }, true);
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>