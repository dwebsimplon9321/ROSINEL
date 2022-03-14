/* //Calcul TVA
let tva_clc1 = (250*8.5)/100;
let tva_clc2 = 250 + tva_clc1; 
let totl = tva_clc2
//console.log(totl);


let replc = document.querySelector("th.ttl")

console.log(replc);

replc.innerHTML = tva_clc2;

let fk = 8.5;

let ro = document.querySelector("th.lol");

ro.append(fk);*/

//Comment recuperer le sous-total ?
let sstotal = document.querySelector("td.sstotal");

// recuperer le montant ht (sstotal.innerHtml)
const tvaDom = 8.50;

// calcul de la tva (prix ht * 8.50/100)
//let montantTVA = sstotal.innerHTML * tvaDom / 100;
let montantTVA = parseFloat(sstotal.innerHTML *tvaDom / 100).toFixed(2)

console.log(sstotal.innerHTML);

//conversion avec decimal (n.00)

//CALCUL TTC
let tcc = parseInt(sstotal.innerHTML) +montantTVA;

console.log(Number.parseFloat(ttc).toFixed(2));

//let ttc = parseInt (sstotal.innerHTML + montantTVA);
let ttc = parseFloat(sstotal.innerHTML +montantTVA).toFixed(2);

//mettre a jour elemnt html de la facture

let tdTVA = document.querySelectorAll("td.tva");
tdTVA.innerHTML = "$"+Number.parseFloat(montantTVA).toFixed(2);

let tdTotal = document.querySelector("td.total");
tdTotal.innerHTML = "$"+Number.parseFloat(ttc).toFixed(2);

sstotal.innerHTML = "$"+sstotal.innerHTML;
console.log(ttc);