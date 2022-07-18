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