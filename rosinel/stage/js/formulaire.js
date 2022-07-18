


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

// https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Building_blocks/Events



// PAGE 1 (SUIVANT)

function Page1SV(event){

    // empecher chargment du formulaire
    
    event.preventDefault();

    // Affiche Page 2
    document.getElementById("p2").style.display = 'block';

    // Enleve Page 1
    document.getElementById("p1").style.display = 'none';




    // scrollp2 = document.getElementById("p2")

    // scrollp2.scrollIntoView();

}




// PAGE 2 (SUIVANT)

function Page2SV(event){
    
   

        // empecher chargment du formulaire
    
    event.preventDefault();


    // Affiche Page 3
    document.getElementById("p3").style.display = 'block';

    // Enleve Page 2
    document.getElementById("p2").style.display = 'none';

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

    // empecher chargment du formulaire
    
    event.preventDefault();


    // Affiche Page 5
    document.getElementById("p5").style.display = 'block';

    // Enleve Page 4
    document.getElementById("p4").style.display = 'none';

    // scrollp3 = document.getElementById("p3")

    // scrollp3.scrollIntoView();

}

// PAGE 5 (SUIVANT)

function Page5SV(event){

    // empecher chargment du formulaire
    
    event.preventDefault();


    // Affiche Page 6
    document.getElementById("p6").style.display = 'block';

    // Enleve Page 5
    document.getElementById("p5").style.display = 'none';

    // scrollp3 = document.getElementById("p3")

    // scrollp3.scrollIntoView();

}


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
}
function commune(event) {
    //console.log(this);
    event.preventDefault();

    if (divCommune.childElementCount === 5) {

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
}
