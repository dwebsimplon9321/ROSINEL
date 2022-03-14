// c'est un commentaire

//variable

//Question : comment on déclare une variable ?
let a = ''; // let a=0;
const b = ''; // const b=0;

//Question : comment affecter une chaine de caractes à une variable ?
let c = 'Bonjour les gens !!';

//Question : comment changer une valeur dans une variable ?
c = 'Bonjour la DWEB !!!';

//Question : comment verifier le contenu d'une variable ?
//alert(c);

//Question : De quoi avons nous besoin pour faire une addition ?
let d = 5 + 6;
let e = 5; let f = 6;
let total = e + f;

//Question : De quoi avons nous besoin pour une concatenation ?
let section = "DWEB";
let salutation = "Bonjour";
//alert(salutation+section);

//Exercice
/**
 * - Créer 4 variables 3 numérique et une avec la chaine de caracteres suivante
 * - "Le total est :"
 * - Vous devez mettre en place une division, une multiplication, une soustraction et une addition
 * avec des chiffres differents et afficher pour chaque operation une alerte avec le resultat.
 */
//1
const résultat1 = "Le total est: ";

let g = 90;
let h = 56342;
let i = 576;
//alert(résultat1+(g+i)/(24+i));

//2
g = 654;
h = 3564;
i = 67485;
//alert(résultat1+((h/g+i^3)-6));

//3
g = 654748;
h = 356445;
i = 485;
//alert(résultat1+((h/(-g)+i^3)-645));

//4
g = 1;
h = 2;
i = 3;
//alert(résultat1+(g+h+i));

// Question : Comment changer le contenu d'un élément html
// Identifier element html h1

let bh1 = document.querySelector("h1");

bh1.innerHTML = "Bienvenue LA DWEB";

//Question : Comment changer le contenu d'un élément html et l'affecter dans un autre element
// Identifier élement html h2
let bh2 = document.querySelectorAll("h2");

// Identifier le 2ème element h2 et changer sont contenu

bh2[1].innerHTML = "Section en avant";

// affecter contenu du 2ème h2 dans h3

let bh3 = document.querySelector("h3");

let changeH2 = bh2[1].innerHTML = "Merci beaucoup"

bh3.innerHTML = changeH2;


let bh2s = document.querySelector("h2.ssh2");

bh2s.innerHTML = "Benjamin mal de tête";

console.log(bh2s);

// exercice
/**
 * Créer la variable 'paragraphe' puis recuperer l'element html p et ajouter le contenu suivant :
 * 'La DWEB est en vacance à partir du 1er mars 2022'
 */


let prgh = document.querySelector("p");

prgh.innerHTML = "La DWEB est en vacance à partir du 1er mars 2022"

console.log(prgh);

// Question : comment ajouter un element html en javascript ?
// Dans la did.info, ajouter un element html
// Cibler element parent
let divI = document.querySelector("div.info");

// Creation nouveau paragraphe
let pHtml = document.createElement("p");
let pText = document.createTextNode("La DWEB maitrise javascript.");

//ajouter texte dans la balise html p
pHtml.appendChild(pText);

//ajouter le paragraphe dans la div.info
divI.append(pHtml);

console.log(pHtml);

//Comment poser une question
//window.prompt("Poser une question");

//Comment recuperer une reponse à une question?

let reponse = document.querySelector("p.r");
//reponse.innerHTML = prompt("Comment va la DWEB ce matin");

// Exercice
/**
 * Questionnaire
 * Poser les questions correspondant aux textes des paragraphes présent dans la
 * division 'div.form'
 * Afficher pour CAQUE paragraphe, les réponses
 * Option : Mettre en majuscule le NOM et la ville
 */

/*let txt = document.querySelector("div.form");
 txt.children[0].append(""+prompt("Nom?").toUpperCase())
 txt.children[1].append(""+prompt("Prénom?"))
 txt.children[2].append(""+prompt("Sexe?"))
 txt.children[3].append(""+prompt("Date de naissance?"))
 txt.children[4].append(""+prompt("Lieux de naissance?"))
 txt.children[5].append(""+prompt("Adresse?"))
 txt.children[6].append(""+prompt("Code postal?"))
 txt.children[7].append(""+prompt("Ville?").toUpperCase())*/

//Question : comment verifier si une variable est vide ou pas?
/*let myNAME = ("");
if (myNAME != "") {
    alert("Pas vide");
} else if (myNAME == "") {
    alert("C'est vide")
}*/

// Question : comment stoker les 6 moi de l'annee dans une variable ?
//let semestre = "janvier, fevrier, mars, avril, mai, juin";
let annee = ["janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre"];
/*console.log(annee);*/

//compter le nombre d'élément d'un tableau
let nbrannee = annee.length;

// boucle for
//let i = 0;

/*si i est plus petit que nbrannee alors ajoute a i + 1
for(let i = 0; i < nbrannee; i++) {
    //test
    console.log(i)

    //afficher le mois de mars manuellement
    console.log(annee[2]);

    //pour afficher 1 fois le mois de mars
    if(annee[i] == "mars"){
        console.log(annee[i]);
    }
}*/

// autre boucle
annee.forEach(mois => {
    //console.log(mois);
    if(mois == "aout"){
        let message = "BEJAMIN est né au mois :" +mois;
        //alert(message);
    }
});

//Question : comment mettre place automatiquement 
function afficheNom(){
    let dA = document.querySelector("div.afficher");
    //dA.children[0].innerHTML = "ROSINEL";
    dA.children[0].innerHTML= prompt("Quel est votre prénom");
    return dA;
}

/* executer fonction afficheNom
afficheNom();*/

//Question : comment creer une horloge numerique
//Question : comment rendre l'horloge dynamique
function afficheHeure(){
    //recuperer element html
    let divA = document.querySelector("div.afficher");

    //recuperer et ecrire dans un paragraphe
    divA.children[0].innerHTML = "Afficher heure";

    //creer un objet date
    let objDate= new Date();

    /**
     * heure = getHours
     * minute = getMinutes
     * seconde = getSeconds
     */
    divA.children[0].innerHTML = objDate.getHours()+":"+objDate.getMinutes()+":"+objDate.getSeconds();
    //renvoi resultat
    return divA;
}
// executer afficheHeure
afficheHeure();