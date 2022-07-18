// Cacher les pages
// document.getElementById("p1").style.display = 'none';
document.getElementById("p2").style.display = 'none';
document.getElementById("p3").style.display = 'none';
document.getElementById("p3").style.display = 'none';
document.getElementById("p4").style.display = 'none';
document.getElementById("p5").style.display = 'none';
document.getElementById("p6").style.display = 'none';
document.getElementById("p7").style.display = 'none';
document.getElementById("p8").style.display = 'none';

// Classe pour ajouter bouton suivant
const btns1 = document.getElementById("Addp2");
const btns2 = document.getElementById("Addp3");
const btns3 = document.getElementById("Addp4");
const btns4 = document.getElementById("Addp5");
const btns5 = document.getElementById("Addp6");
const btns6 = document.getElementById("Addp7");
const btns7 = document.getElementById("Addp8");

// Classe pour ajouter bouton précédent
const btnp0 = document.getElementById("Del1");
const btnp1 = document.getElementById("Del2");
const btnp2 = document.getElementById("Del3");
const btnp3 = document.getElementById("Del4");
const btnp4 = document.getElementById("Del5");
const btnp5 = document.getElementById("Del6");
const btnp6 = document.getElementById("Del7");


// ajout ecouteur à la classe addbtn 

btns1.addEventListener("click", Page1SV);
btns2.addEventListener("click", Page2SV);
btns3.addEventListener("click", Page3SV);
btns4.addEventListener("click", Page4SV);
btns5.addEventListener("click", Page5SV);
btns6.addEventListener("click", Page6SV);
btns7.addEventListener("click", Page7SV);

// ajout ecouteur à la classe addbtn 

btnp1.addEventListener("click", Page1PD);
btnp2.addEventListener("click", Page2PD);
btnp3.addEventListener("click", Page3PD);
btnp4.addEventListener("click", Page4PD);
btnp5.addEventListener("click", Page5PD);
btnp6.addEventListener("click", Page6PD);


// Selectionner les champs 

/*const emailEl = document.querySelector('#email');
const passwordEl = document.querySelector('#password');
const confirmPasswordEl = document.querySelector('#confirm-password');
const form = document.querySelector('#signup');*/

// https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Building_blocks/Events


// Test

ErorPage1SV = document.querySelector("div.eror");
suiv1 = document.getElementById("Addp2");
field = document.querySelector("div.reponse");


// PAGE 1 (SUIVANT)

function Page1SV(event){

    // empecher chargment du formulaire
    
    event.preventDefault();

    if (field.childElementCount > 0) {
         // Affiche Page 2
        document.getElementById("p2").style.display = 'block';

         // Enleve Page 1
        document.getElementById("p1").style.display = 'none';

            Tags = "<p class='Tags'> Vous pouvez passer à l'étape suivante </p>"

            ErorPage1SV.innerHTML = Tags;

    } else {
            mserreur = "<p class='ErorPage1SV'> Sélectionner au moins 1 commune </p>"

            ErorPage1SV.innerHTML = mserreur;
        }


    // scrollp2 = document.getElementById("p2")

    // scrollp2.scrollIntoView();

}




// PAGE 2 (SUIVANT)




function Page2SV(event){

    event.preventDefault();

    const nomEl = document.querySelector('#nom');
    const prenomEl = document.querySelector('#prenom');
    const form = document.querySelector('#signup'); 

/*########################################################*/

const checknom = () => {

    let valid = false;

    const min = 3,
        max = 25;

    const nom = nomEl.value.trim();

    if (!isRequired(nom)) {
        showError(nomEl, 'nom cannot be blank.');
    } else if (!isBetween(nom.length, min, max)) {
        showError(nomEl, `nom must be between ${min} and ${max} characters.`)
    } else {
        showSuccess(nomEl);
        valid = true;
    }
    return valid;
};

const checkprenom = () => {

    let valid = false;

    const min = 3,
        max = 25;

    const prenom = prenomEl.value.trim();

    if (!isRequired(prenom)) {
        showError(prenomEl, 'prenom cannot be blank.');
    } else if (!isBetween(prenom.length, min, max)) {
        showError(prenomEl, `prenom must be between ${min} and ${max} characters.`)
    } else {
        showSuccess(prenomEl);
        valid = true;
    }
    return valid;
};

const isRequired = value => value === '' ? false : true;
const isBetween = (length, min, max) => length < min || length > max ? false : true;


const showError = (input, message) => {
    // get the form-field element
    const formField = input.parentElement;
    // add the error class
    formField.classList.remove('success');
    formField.classList.add('error');

    // show the error message
    const error = formField.querySelector('small');
    error.textContent = message;
};

const showSuccess = (input) => {
    // get the form-field element
    const formField = input.parentElement;

    // remove the error class
    formField.classList.remove('error');
    formField.classList.add('success');

    // hide the error message
    const error = formField.querySelector('small');
    error.textContent = '';
}


const debounce = (fn, delay = 500) => {
    let timeoutId;
    return (...args) => {
        // cancel the previous timer
        if (timeoutId) {
            clearTimeout(timeoutId);
        }
        // setup a new timer
        timeoutId = setTimeout(() => {
            fn.apply(null, args)
        }, delay);
    };
};

form.addEventListener('input', debounce(function (e) {
    switch (e.target.id) {
        case 'nom':
            checknom();
            break;
        case 'prenom':
            checkprenom();
            break;

    }
}));

const frmC = document.querySelector(".nomm");
 // false
        if (frmC.classList.contains('success')) {

            document.getElementById("p3").style.display = 'block';

    // Enleve Page 2
             document.getElementById("p2").style.display = 'none';
    
        }

    // empecher chargment du formulaire
    
    /*event.preventDefault();

    if(document. getElementById("nom"). value. length == 0)
    {
    alert("empty")
    s
    } else {
        // Affiche Page 3
    
        //showSuccess(nomFrm);
        valid = true;
    }*/

    // scrollp3 = document.getElementById("p3")

    // scrollp3.scrollIntoView();

}





// PAGE 3 (SUIVANT)

function Page3SV(event){

    // empecher chargment du formulaire
    
    event.preventDefault();


    // Affiche Page 4
    document.getElementById("p4").style.display = 'block';

    // Enleve Page 3
    document.getElementById("p3").style.display = 'none';

    // scrollp3 = document.getElementById("p3")

    // scrollp3.scrollIntoView();

}




// PAGE 4 (SUIVANT)


function Page4SV(event){
    
    checkbox1 = document.getElementById("1Check4");
    checkbox2 = document.getElementById("2Check4");
    checkbox3 = document.getElementById("3Check4");
    checkbox4 = document.getElementById("4Check4");
    checkbox5 = document.getElementById("5Check4");
    checkbox6 = document.getElementById("6Check4");
    checkbox7 = document.getElementById("7Check4");

    // var ErorPage4SV = document.getElementById("Er4");

    // console.log(ErorPage4SV);


    // empecher chargment du formulaire
    
    event.preventDefault();

             // Affiche Page 5
             document.getElementById("p5").style.display = 'block';
    
             // Enleve Page 4
     
             document.getElementById("p4").style.display = 'none';
             
        


            // btns4.addEventListener("click", DONE);


            // function DONE(event){
            //     ErorPage4SV = document.querySelector('div.eror4');

            //     console.log(ErorPage4SV);

            //     // Nochecked4 = "<p class='.ErorPage1SV'> Cochez au moins une case </p>"
    
            //     // ErorPage4SV.innerHTML = Nockecked4;
            // }

            // alert('WORK!!!!!');


            // Nochecked4 = "<p class='.ErorPage1SV'> Cochez au moins une case </p>"
    
            // ErorPage4SV.innerHTML = Nockecked4;
           


             
        }

        

    // // Affiche Page 5
    
    // document.getElementById("p5").style.display = 'block';

    // // Enleve Page 4

    // document.getElementById("p4").style.display = 'none';
    


    
    // scrollp3 = document.getElementById("p3")

    // scrollp3.scrollIntoView();
   



// console.log(checkbox1);

// PAGE 5 (SUIVANT)
// document.getElementById("checkbox_g5").style.display = "block";
// checkAll = document.querySelectorAll("input[type=checkbox]");
// check01.addEventListener("click", hide5);

// function hide5(event){
    
//     document.getElementById("p5").style.display = 'block';
// }

// if (checkbox06.checked) {

//     if (checkbox1.checked) {

//         hide5();
        
//     // } else if checkbox2.checked) {

//     // } else if checkbox3.checked) {

//     // } else if checkbox4.checked) {

//     } else {
//         alert('test')
//     }

//     //  // Affiche Page 6
//     // document.getElementById("p6").style.display = 'block';

//     // // Enleve Page 5
//     // document.getElementById("p5").style.display = 'none';

// } else {
//     alert("Cochez au moins une case");
// }




function Page5SV(event){

    checkbox06 = document.getElementById("0Check6");
    checkbox0 = document.getElementById("0Check5");
    checkbox1 = document.getElementById("1Check5");
    checkbox2 = document.getElementById("2Check5");
    checkbox3 = document.getElementById("3Check5");
    checkbox4 = document.getElementById("4Check5");
    

    // empecher chargment du formulaire
    
    event.preventDefault();

    


    // // Affiche Page 6
    // document.getElementById("p6").style.display = 'block';

    // // Enleve Page 5
  
    

    alert("Sélectionnez 'Évènement phare' + 'Évènement' ou Séletionnez 'Sélection libre'");
                

                    // document.getElementById("checkbox_g5").style.display = "none";

                    if (checkbox0.checked) {

                        checkbox00 = document.getElementById('0check6');
                        checkbox00.checked = true;
                        

                        
                         if (checkbox06.checked) {
                            alert("Vous ne pouvez pas cocher Les 2 options en même temps")
                            if (checkbox1.checked) {
                                alert("Vous ne pouvez pas cocher ces cases ensemble")
                            } else if (checkbox2.checked) {
                                alert("Vous ne pouvez pas cocher ces cases ensemble")
                            } else if (checkbox3.checked) {
                                alert("Vous ne pouvez pas cocher ces cases ensemble")
                            } else if (checkbox4.checked) {
                                alert("Vous ne pouvez pas cocher ces cases ensemble")
                            } else {

                            }
                            
                        } else if (checkbox1.checked) {
                            alert("Vous pouvez passer à l'étape suivante")
                                // Affiche Page 6
                            document.getElementById("p6").style.display = 'block';

                                // Enleve Page 5
                            document.getElementById("p5").style.display = 'none';
                        } else if (checkbox2.checked) {
                            alert("Vous pouvez passer à l'étape suivante")
                            // Affiche Page 6
                            document.getElementById("p6").style.display = 'block';
                            // Enleve Page 5
                            document.getElementById("p5").style.display = 'none';
                        } else if (checkbox3.checked) {
                            alert("Vous pouvez passer à l'étape suivante")
                            // Affiche Page 6
                        document.getElementById("p6").style.display = 'block';
                            // Enleve Page 5
                            document.getElementById("p5").style.display = 'none';
                        } else if (checkbox4.checked) {
                            alert("Vous pouvez passer à l'étape suivante")
                            // Affiche Page 6
                        document.getElementById("p6").style.display = 'block';

                            // Enleve Page 5
                            document.getElementById("p5").style.display = 'none';

                        
                        } else {
                            alert("Cochez au moins un évènement");
                        }
                    }

                    if (checkbox06.checked) {
                            
                        if (checkbox0.checked) {

                           // A laisser vide
                        
                        } else if (checkbox1.checked) {
                            alert("Vous ne pouvez pas cocher ces cases ensemble")

                        } else if (checkbox2.checked) {
                            alert("Vous ne pouvez pas cocher ces cases ensemble")
                        } else if (checkbox3.checked) {
                            alert("Vous ne pouvez pas cocher ces cases ensemble")
                        } else if (checkbox4.checked) {
                            alert("Vous ne pouvez pas cocher ces cases ensemble")
                        } else {
                            alert("Vous pouvez passer à l'étape suivante")
                            // Affiche Page 6
                            document.getElementById("p6").style.display = 'block';

                            // Enleve Page 5
                            document.getElementById("p5").style.display = 'none'; 
                            
                            checkbox07 = document.getElementById('1check6')

                            // console.log(checkbox07)
                            if (checkbox06.checked) {
                                checkbox07.checked = true;
                            }
                          
                        }
                    }

                    // if (checkbox0.checked === true) {
                    //     alert("Sélectionnez une option");
                    // } else {
                    //     if (checkbox1.checked === false) {
                    //         alert("Sélectionnez une option");
                    //     }
                    // }

                    
                 
               
                    
                
                    
                    
   
                    
                
    // // Affiche Page 6
    // document.getElementById("p6").style.display = 'block';

    // // Enleve Page 5
    // document.getElementById("p5").style.display = 'none';



    
    // scrollp3 = document.getElementById("p3")

    // scrollp3.scrollIntoView();

}
Calendar = document.getElementById('Calendar1');
console.log(Calendar)
    


// PAGE 6 (SUIVANT)

function Page6SV(event){

    // empecher chargment du formulaire
    
    event.preventDefault();


    // Affiche Page 7
    document.getElementById("p7").style.display = 'block';

    // Enleve Page 6
    document.getElementById("p6").style.display = 'none';

    // scrollp3 = document.getElementById("p3")

    // scrollp3.scrollIntoView();

}


// PAGE 7 (SUIVANT)

function Page7SV(event){

    // empecher chargment du formulaire
    
    event.preventDefault();


    // Affiche Page 8
    document.getElementById("p8").style.display = 'block';

    // Enleve Page 7
    document.getElementById("p7").style.display = 'none';

    // scrollp3 = document.getElementById("p3")

    // scrollp3.scrollIntoView();

}









// PAGE 2 (PRECEDENT)

function Page1PD(event){

    // empecher chargment du formulaire
    
    event.preventDefault();
    
    // Enleve Page 2
    document.getElementById("p2").style.display = 'none';

    // Affiche Page 1
    document.getElementById("p1").style.display = 'block';

}

// PAGE 3 (PRECEDENT)

function Page2PD(event){

    // empecher chargment du formulaire
    
    event.preventDefault();

    // Enleve Page 3
    document.getElementById("p3").style.display = 'none';

    // Affiche Page 2
    document.getElementById("p2").style.display = 'block';

}

// PAGE 4 (PRECEDENT)

function Page3PD(event){

    // empecher chargment du formulaire
    
    event.preventDefault();

    // Enleve Page 4
    document.getElementById("p4").style.display = 'none';

    // Affiche Page 3
    document.getElementById("p3").style.display = 'block';

}

// PAGE 5 (PRECEDENT)

function Page4PD(event){

    // empecher chargment du formulaire
    
    event.preventDefault();

    // Enleve Page 5
    document.getElementById("p5").style.display = 'none';

    // Affiche Page 4
    document.getElementById("p4").style.display = 'block';

}

// PAGE 5 (PRECEDENT)

function Page5PD(event){

    // empecher chargment du formulaire
    
    event.preventDefault();

    // Enleve Page 6
    document.getElementById("p6").style.display = 'none';

    // Affiche Page 5
    document.getElementById("p5").style.display = 'block';

}


// PAGE 6 (PRECEDENT)

function Page6PD(event){

    // empecher chargment du formulaire
    
    event.preventDefault();

    // Enleve Page 7
    document.getElementById("p7").style.display = 'none';

    // Affiche Page 6
    document.getElementById("p6").style.display = 'block';

}














// PAGE 1 JS

// formulaire le boutons
const btCommunes = document.querySelectorAll("button.btComm");
const divCommune = document.querySelector("div.reponse");
const divListeComm = document.querySelector("div.listeC");
const divH = document.querySelector("div.hidden");

//console.log(btCommunes);

// boucle for

for (let i = 0; i < btCommunes.length; i++) {
    //console.log(i);

    btCommunes[i].addEventListener("click", commune);

    btCommunes[i].addEventListener("click", Tagscommune);
}

function Tagscommune(event) {
    if (divCommune.childElementCount < 5) {
        Tags = "<p class='Tags'> 5 Tags maximum autorisés et un tag par commune </p>"

        ErorPage1SV.innerHTML = Tags;
        

    } 
}

function commune(event) {
    //console.log(this);
    event.preventDefault();


    if (divCommune.childElementCount === 5) {
        Tags = "<p class='Tags'> Vous pouvez passer à l'étape suivante </p>"

        ErorPage1SV.innerHTML = Tags;
        false;  

    } else {

        divCommune.appendChild(this);
        this.classList.remove("btn-primary");
        this.classList.add("btn-warning");
        
        

        // ajouter champ caché 
        let inputC = document.createElement("input");
        inputC.setAttribute("type", "hidden");
        inputC.setAttribute("name", "inputCommune");
        inputC.value = this.innerHtml;
        divH.appendChild(inputC);

        // retirer une ou plusieurs communes
        const nbrC = divCommune.childElementCount;

        for (let c = 0; c < nbrC; c++) {
            divCommune.children[c].addEventListener("click", retirer_commune);
            console.log(retirer_commune);
        }
    }

    //retirer une ou plusieurs communes

}

function retirer_commune() {
    // retirer bouton
    divListeComm.appendChild(this);
    this.classList.add("btn-primary");
    this.classList.remove("btn-warning");

    // reload page pour fix bug
    window.location.reload();
}

// PAGE 1 JS FIN




    

// suiv1.addEventListener("click", valid1);

// function valid1(event) {

//     if (field.childElementCount > 0) {
//         false;
//     } else {
//             mserreur = "Choisissez au moins 1 commune"

//             Eror.innerHTML = mserreur;
//         }
        

// }


// console.log(field);
// console.log(suiv1);
// console.log(Eror);
