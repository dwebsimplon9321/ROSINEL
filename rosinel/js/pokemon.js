/**
 * Mise en place api pokemon
 */

// balise html
const listePU = document.querySelector("ul.liste-poke");

// nbr dynamique de poke
const nbrPoke = 201;

// tableau de datas
let allPokemon = [];
let tableauFin = [];
let cpTab = [];

/* appel API pokemon */
function findPoke(){

    // url api pokemon
    fetch("https://pokeapi.co/api/v2/pokemon?limit="+nbrPoke)
        .then( reponse => reponse.json())
        .then((allPoke => {
            //console.log(allPoke);

            allPoke.results.forEach(pokemon => {

                // function pour affichage info complete
                fullInfoPoke(pokemon);
            })
        }))
}
// executer la fonction
findPoke();

// info sur 1 pokemon
function fullInfoPoke(iPokemon){

    let objetPokeFull = {};  // format json vide
    
    let urlPoke = iPokemon.url;
    let namePoke = iPokemon.name;

    //console.log(urlPoke);

    // recuperer information sur un pokemon
    fetch(urlPoke)

        // reponse appel sur urlPoke
        .then(reponse => reponse.json()) // sortie format json
        .then((dataPoke => {
            //console.log(dataPoke);

            // recuperer info que je souhaite
            /**
             * - name
             * - sprites (images)
             * son id (identif+iant
             */
            objetPokeFull.nom = dataPoke.name;
            objetPokeFull.id = dataPoke.id;
            objetPokeFull.imgF = dataPoke.sprites.front_default; // devant
            objetPokeFull.imgB = dataPoke.sprites.back_default; // arrière
            //console.log(objetPokeFull);

            //recuperer info sur la conleur du pokemon
            /**
             * url : https://pokeapi.co/api/v2/pokemon-species/
             * - id du pokemon
             */
            fetch("https://pokeapi.co/api/v2/pokemon-species/"+dataPoke.id)
            .then(reponse => reponse.json())
            .then((dataPoke => {
                // console.log(dataPoke);
                // recuperer couleur du pokemon
                /**
                 * - color.name = la couleur
                 * - names[4].name = nom en francais du pokemon
                 */

                objetPokeFull.couleur = dataPoke.color.name;
                objetPokeFull.nomF = dataPoke.names[4].name;

                //console.log(objetPokeFull);

                // ajouter objetPokeFull dans un tableau
                allPokemon.push(objetPokeFull);

                if(allPokemon.length === nbrPoke){
                    //console.log(allPokemon);

                    // trier les ids par ordre croissant

                    tableauFin = allPokemon.sort((a, b) => {
                        return a.id - b.id;
                    }).slice(0, 8);
                    

                    //console.log(tableauFin);
                    //creation des cartes en html
                    createCard(tableauFin);
                }
            }))
        }))
}


// creer les cartes html
function createCard(tab){
    console.log(tab);
    // lire contenu de la variable en paramettre tab

    for( let i=0; i < tab.length; i++){
        //console.log(tab[i]);

        // carte = li avec les couleurs
        const carte = document.createElement("li");
        let couleur = tab [i].couleur;

        carte.style.backgroundColor = couleur;

        // ajouter id du pokemon
        const idCarte = document.createElement("h3");
        idCarte.innerHTML = tab[i].id;

        // ajouter nom du pokemon
        const nomCarte = document.createElement("p");
        nomCarte.innerHTML = tab[i].nom;

        // ajouter image front du pokemon
        const imageF = document.createElement("img");
        imageF.src = tab[i].imgF;
        imageF.setAttribute("alt", tab[i].nom);
        /*const imgBCarte = document.createElement("img");
        imgBCarte.src = tab[i].imgB;*/


        // ajouter les li 
        carte.appendChild(idCarte);
        carte.appendChild(nomCarte);
        carte.appendChild(imageF);

        // ajouter Back image au rollhover sur li
        hoverLI(carte, tab[i].imgB, imageF, tab[i].imgF, nomCarte, tab[i].nomF, tab[i].nom);

        /*carte.appendChild(imgB);*/

        // ajouter dans ul les li
        listePU.appendChild(carte);

    }
}
// ecouteur sur hover
function hoverLI(carteLI, urlImgB, image, urlImgF, paragraphe, nomFr, nom) {
    

    carteLI.addEventListener("mouseover", () =>{
        //console.log(image)
        image.src = urlImgB;
        paragraphe.innerHTML = nomFr;

        // option 2 // reset de l'image
        setTimeout( () => {
            image.src =urlImgF;
            paragraphe.innerHTML = nom;
        }, 500 );
        

    });
        /* option 1 reset de l'image
    carteLI.addEventListener("mouseout", () =>{
        //console.log(image)
        image.src = urlImgF;

    });*/
}
// scroll infini
window.addEventListener("scroll", () => {
    /**
     * scrollTop : difference entre ce que l'on a scrolle depuis le haut de la page
     * scrollHeight : hauteur total
     * scrollClient : hauteur page actuel
     */
    const {scrollTop, scrollHeight, clientHeight} = document.documentElement;
    //console.log(scrollTop, scrollHeight, clientHeight);

if(clientHeight + scrollTop >= clientHeight - 20){
    addPoke(8);
}

   
});

let index = 8;

// ajouter des cartes au scroll
function addPoke(nbrAddCarte){


    // test fin chargement des cartes totales
    if (index > nbrPoke){
        return;
    }
    // tableau pour ajouter les cartes de 8 en 8
    //let tabtoAdd = allPokemon.slice(index, index+nbrAddCarte);
    const tabToAdd = allPokemon.slice(index, index+nbrAddCarte); //8+8+8..201*/
    console.log(tabToAdd);

    // ajouter tabToAdd au tableau existant
    createCard(tabToAdd);

    // actualisation de l'index (8+8+8+8........=201)
    index += nbrAddCarte; // 8+8+8+.........
}

//animation label et input
const inputL = document.querySelector("input#find");
inputL.addEventListener("input", (e) => {
    // verifier si input est vide ou pas
    if(e.target.value !== ''){
        //console.log(e.target.parentNode.parentNode);
        /**
         * e = evenement
         * e.target = input
         * e.target.parentNode = div
         * e.target.parentNode.parentNode = form
         */ 
        e.target.parentNode.parentNode.classList.add("active-input");

    } else if(e.target.value === ""){
        e.target.parentNode.parentNode.classList.remove("active-input")
    }
});

// notre systeme de recherche d'un pokemon
inputL.addEventListener("keyup", rechercher);

// fonction rechercher
function rechercher(){

    // ajouter tout les pokemons
    if(index < nbrPoke){
        addPoke(nbrPoke);
    }

    //
    let filter, allLi, titleValue, allTitles;

    // mettre en minuscule
    filter = inputL.value.toLowerCase();
    // recupere toutes les cartes
    allLi = document.querySelectorAll("li");
    // recupere tout les titres dans li (cartes)
    allTitles = document.querySelectorAll("li > p");

    //boucle
    for(let i=0; i < allLi.length; i++){
        
        // recupere chaque titre
        titleValue = allTitles[i].innerHTML;
        //console.log(titleValue);

        // si la recherche existe
        if(titleValue.toLocaleLowerCase().indexOf(filter) > -1){
            // affichage resultat
            allLi[i].style.display = "block";



        } else {
            allLi[i].style.display = "none";
        }
    }
}