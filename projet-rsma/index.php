<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylle.css">

    <title>Application RSMA - </title>
</head>

<body>
    <header class="container-fluid">
        <div class="row">
            <div class="col">
                <img src="https://www.rsma.gp/templates/rsma_guadeloupe/images/logo-ministere.png" alt="Logo du ministere des outre-mer">
            </div>
            <div class="col">
                <img src="https://www.rsma.gp/templates/rsma_guadeloupe/images/logo_rsma.png" alt="Logo du rsma">
            </div>
            <div class="col">
                <img src="https://www.rsma.gp/templates/rsma_guadeloupe/images/logo_30pour30.png" alt="Logo 30 formations 30 metiers">
            </div>
            <div class="col">
                <ul class="menu">
                    <li>
                        <a href="#">
                            <img src="https://www.rsma.gp/templates/rsma_guadeloupe/images/icones/tel.png" alt="tel">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://www.rsma.gp/templates/rsma_guadeloupe/images/icones/mail.png" alt="mail">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://www.rsma.gp/templates/rsma_guadeloupe/images/icones/menu.png" alt="menu">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <form action="" class="needs-validation" novalidate>
                <div class="row">
                    <div class="col">
                        <select class="form-select" aria-label="Civilité" required id="civilite">
                            <option selected>Choisir une civilité</option>
                            <option value="M">Monsieur</option>
                            <option value="Mme">Madame</option>
                        </select>
                        <div class="valid-feedback civ">
                            Merci!
                        </div>
                        <div id="civiliteF" class="invalid-feedback">
                            Choisir une civilité !!!
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nom" aria-label="Nom" required id="nom">
                        <div class="valid-feedback">
                            Merci!
                        </div>
                        <div id="nomF" class="invalid-feedback">
                            indiquer votre nom !!!
                        </div>
                    </div>

                    <div class="col">
                        <input type="text" class="form-control" placeholder="Prénom" aria-label="Prénom" required id="prenom">
                        <div class="valid-feedback">
                            Merci!
                        </div>
                        <div id="prenomF" class="invalid-feedback">
                            indiquer votre prénom !!!
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Date de naissance" aria-label="Date de naissance" required id="naissance">
                        <div class="valid-feedback">
                            Merci!
                        </div>
                        <div id="naissanceF" class="invalid-feedback">
                            indiquer votre date de naissance !!!
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Lieu de naissance" aria-label="Lieu de naissance" required id="lieu">
                        <div class="valid-feedback">
                            Merci!
                        </div>
                        <div id="lieuF" class="invalid-feedback">
                            indiquer votre lieu de naissance !!!
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Adresse" aria-label="Adresse" required id="adresse">
                        <div class="valid-feedback">
                            Merci!
                        </div>
                        <div id="addresseF" class="invalid-feedback">
                            indiquer votre addresse !!!
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Adresse suite" aria-label="Adresse suite">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Code postal" aria-label="Code postal" required id="code">
                        <div class="valid-feedback">
                            Merci!
                        </div>
                        <div id="codeF" class="invalid-feedback">
                            indiquer votre code postal !!!
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Ville" aria-label="Ville" required id="ville">
                        <div class="valid-feedback">
                            Merci!
                        </div>
                        <div id="villeF" class="invalid-feedback">
                            indiquer votre ville !!!
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <select class="form-select" aria-label="jdc" required id="jdc" required id="jdc">
                            <option selected>Avez-vous fait la journée d'appel (JDC)</option>
                            <option value="oui">Oui</option>
                            <option value="non">Non</option>
                        </select>
                        <div class="valid-feedback">
                            Merci!
                        </div>
                        <div id="jdcF" class="invalid-feedback">
                            Merci de répondre à la question !!!
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Quelle formation desirez-vous suivre ?" aria-label="formation" required id="formation">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <select class="form-select" aria-label="diplôme" required id="diplome">
                            <option selected>Possédez vous un diplôme</option>
                            <option value="oui">Oui</option>
                            <option value="non">Non</option>
                        </select>
                        <div class="valid-feedback">
                            Merci!
                        </div>
                        <div id="diplomeF" class="invalid-feedback">
                            Merci de répondre à la question !!!
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <select class="form-select" aria-label="sma" required id="sma">
                            <option selected>Comment avez-vous connu le SMA ?</option>
                            <option value="jdc">Par la JDC</option>
                            <option value="ml">Mission locale</option>
                            <option value="pe">Pôle emploi</option>
                            <option value="cl">Par une information au collège ou au lycée</option>
                            <option value="fm">Par la famille</option>
                            <option value="am">Par un/une amie/e</option>
                            <option value="as">Par une association</option>
                            <option value="fo">Par un forum</option>
                            <option value="jt">Par le journal ou la télévision</option>
                        </select>
                        <div class="valid-feedback">
                            Merci!
                        </div>
                        <div id="smaF" class="invalid-feedback">
                            Merci de répondre à la question !!!
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button class="btn btn-primary" type="submit">Valider inscription</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <footer class="container-fluid">
        <div class="row">
            <div class="col-12">
                <ul class="reseau">
                    <li>
                        <a href="#">
                            <img src="https://www.rsma.gp/templates/rsma_guadeloupe/images/icones/fb.png" alt="Facebook">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://www.rsma.gp/templates/rsma_guadeloupe/images/icones/twitter.png" alt="Twitter">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://www.rsma.gp/templates/rsma_guadeloupe/images/icones/ig.png" alt="Instagram">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <ul class="menuf">
                    <li>
                        <a href="#">
                            Plan du site
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Mentions légales
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Politique de confidentialité
                        </a>
                    </li>
                </ul>
                <ul class="fd">
                    <li>
                        <a href="#">
                            <img src="https://www.rsma.gp/images/Drapeau_UE.jpg" alt="Logo europe">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://www.rsma.gp/images/guadeloupefse.jpg" alt="fse">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <p>
                    dweb rsma @2022
                </p>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()



        let submit = document.querySelector("button");
        submit.addEventListener("click", function(event) {
            // Verifier les listes
            let civilite = document.querySelector("select#civilite");

            //verifie si valeur dans liste selectioné
            if (civilite.value === "Choisir une civilité") {
                console.log(civilite);

                let divC = document.querySelector("div.civ");
                //divC.classList.remove("valid-feedback");
                divC.className = "displayN";


                let divF = document.querySelector("div#civiliteF");
                divF.className = "displayB";
                

            } else {
                // ajouter un ecouteur 

            }
        });
    </script>
</body>
<!--let divC = document.querySelector("div.civ");
                //divC.classList.add("valid-feedback");
                divC.classList.remove("displayN");


                let divF = document.querySelector("div#civiliteF");
                divC.classList.remove("displayB");-->
</html>
