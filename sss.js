// Cacher les pages
// document.getElementById("p1").style.display = 'none';
document.getElementById("p2").style.display = 'none'; 
document.getElementById("p3").style.display = 'none';
document.getElementById("p4").style.display = 'none';
document.getElementById("p5").style.display = 'none';
document.getElementById("p6").style.display = 'none';
document.getElementById("p6bis").style.display = 'none'
document.getElementById("p7").style.display = 'none';
document.getElementById("p8").style.display = 'none';





// Hidden boutons
document.getElementById("hiddenp1").style.display = 'none';
document.getElementById("hiddenp2").style.display = 'none';
document.getElementById("hiddenp3").style.display = 'none';





// Classe pour ajouter bouton suivant
const btns1 = document.getElementById("Addp2");
const btns2 = document.getElementById("Addp3");
const btns3 = document.getElementById("Addp4");
const btns4 = document.getElementById("Addp5");
const btns5 = document.getElementById("Addp6");
const btns6 = document.getElementById("Addp7");
const btns6bis = document.getElementById("Addp7bis");
const btns7 = document.getElementById("Addp8");




// Variables Hidden Bouton
const hiddenp1 = document.getElementById("hiddenp1");
const hiddenp2 = document.getElementById("hiddenp2");
const hiddenp3 = document.getElementById("hiddenp3");


// Classe pour ajouter bouton précédent
const btnp0 = document.getElementById("Del1");
const btnp1 = document.getElementById("Del2");
const btnp2 = document.getElementById("Del3");
const btnp3 = document.getElementById("Del4");
const btnp4 = document.getElementById("Del5");
const btnp5 = document.getElementById("Del6");
const btnp5bis = document.getElementById("Del6bis");
const btnp6 = document.getElementById("Del7");


// ajout ecouteur à la classe addbtn 

btns1.addEventListener("click", Page1SV);
btns2.addEventListener("click", Page2SV);
btns3.addEventListener("click", Page3SV);
btns4.addEventListener("click", Page4SV);
btns5.addEventListener("click", Page5SV);
btns6.addEventListener("click", Page6SV);
btns6bis.addEventListener("click", Page6SVbis);
btns7.addEventListener("click", Page7SV);




// ajout ecouteur à la classe addbtn 

btnp1.addEventListener("click", Page1PD);
btnp2.addEventListener("click", Page2PD);
btnp3.addEventListener("click", Page3PD);
btnp4.addEventListener("click", Page4PD);
btnp5.addEventListener("click", Page5PD);
btnp5bis.addEventListener("click", Page5PDbis);
btnp6.addEventListener("click", Page6PD);


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
            mserreur = "<p class='ErorPage1SV'> Taguez au moins 1 commune </p>"

            ErorPage1SV.innerHTML = mserreur;
        }




    document.getElementById("hiddenp1").addEventListener("click", clickh1);

    function clickh1(event){
        event.preventDefault();


        // alert('TEST')
    }


    document.getElementById("hiddenp1").click();
    // scrollp2 = document.getElementById("p2")

    // scrollp2.scrollIntoView();


    // document.getElementById("Addp3").style.pointerEvents = "none";
}




// PAGE 2 (SUIVANT)
    Name = document.getElementById("nomId");
    Prename = document.getElementById("prenomId");
    Tel = document.getElementById("numId");
    Post = document.getElementById("postId");
    Mail = document.getElementById("gerId");
    form = document.getElementById("formp2");
    Cat = document.getElementById("cat"); 
    Rgpd = document.getElementById("rgpd");
    Password = document.getElementById("password1");
    Passwordd = document.getElementById("password2");

    form.addEventListener("change", clickh);

    function clickh(event) {

        
        nametest =  /^[-a-zA-Z0-9 .]+$/;
        
        if (Name.value.match(nametest)){

            document.querySelector("div.nm").innerHTML = "<p class='Tags'> Nom valide ! </p>";

            Namev = 1;
            

        } else {
            document.querySelector("div.nm").innerHTML = "<p class='p2Error'> Saisissez un nom valide ! </p>";
           
            // Name.focus()
            
            Namev = -1;
            
        }


        prenametest = /^[-a-zA-Z0-9 .]+$/;

        if (Prename.value.match(prenametest)){

            document.querySelector("div.pn").innerHTML = "<p class='Tags'> Prénom valide ! </p>";

            Prenamev = 1;

        } else {
            document.querySelector("div.pn").innerHTML = "<p class='p2Error'> Saisissez un prénom valide ! </p>";
          
            // Prename.focus()
            
            Prenamev = -1;
        }


        teltest = /^(?:(?:\+|00)690|0)\s*[1-9](?:[\s.-]*\d{2}){4}$/;

        if (Tel.value.match(teltest)){

            document.querySelector("div.tl").innerHTML = "<p class='Tags'> Numéro valide ! </p>";

            Telv = 1;

        } else {
            document.querySelector("div.tl").innerHTML = "<p class='p2Error'> Saisissez un numéro valide ! </p>";
           
            Telv = -1;
            // teltest.focus()
            
        }

        pass1test = /^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/;

        if (Password.value.match(pass1test)){

            document.querySelector("div.pass").innerHTML = "<p class='Tags'> Mot de passe valide ! </p>";

            Passwordev = 1;

        } else {
            document.querySelector("div.pass").innerHTML = "<p class='p2Error'> Saisissez un mot de passe valide valide ! </p>";
          
            
            Passwordev = -1;
        }

        pass2test = pass1test;

        if (Passwordd.value === Password.value) {

            document.querySelector("div.passc").innerHTML = "<p class='Tags'> Mot de passe valide ! </p>";

            Passworddev = 1;

        } else {

            document.querySelector("div.passc").innerHTML = "<p class='p2Error'> Les mots de passes ne sont pas identique </p>";
          
            
            Passworddev = -1;
        }

      
        
        
    }


    form.addEventListener("change", clickh2);
    
    
    function clickh2(event) {

        mailtest = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;        
        

        if (Mail.value.match(mailtest)){

            document.querySelector("div.gr").innerHTML = "<p class='Tags'> Mail valide ! </p>";

            Mailv = 1;

        } else {
            document.querySelector("div.gr").innerHTML = "<p class='p2Error'> Saisissez une addresse e-mail valide ! </p>";
          
            // Mail.focus()
            Mailv = -1;
        }

        Posttest = /[0-9]+[ |[a-zà-ú.,-]* ((highway)|(autoroute)|(north)|(nord)|(south)|(sud)|(east)|(est)|(west)|(ouest)|(avenue)|(lane)|(voie)|(ruelle)|(road)|(rue)|(route)|(drive)|(boulevard)|(circle)|(cercle)|(street)|(cer\.)|(cir\.)|(blvd\.)|(hway\.)|(st\.)|(aut\.)|(ave\.)|(ln\.)|(rd\.)|(hw\.)|(dr\.)|(a\.))([ .,-]*[a-zà-ú0-9]*)*/i;

        if (Post.value.match(Posttest)){

            document.querySelector("div.ps").innerHTML = "<p class='Tags'> Addresse valide ! </p>";

            Postv = 1;

        } else {
            document.querySelector("div.ps").innerHTML = "<p class='p2Error'> Saisissez une addresse valide ! </p>";
          
            // Posttest.focus()
            Postv = -1;
        }


        


        
    }

    Cat.addEventListener("change", cat);

    function cat(event) {

        if (Cat.value != 0){
            document.querySelector('div.catf2').innerHTML = "<p class='Tags'> Catégorie sélectionnée ! </p>";

            Catv = 1;
        } else {
            document.querySelector('div.catf2').innerHTML = "<p class='p2Error'> Catégorie invalide ! </p>";

            Catv = -1;
        }
    }

    form.addEventListener("change", rgpD);

    function rgpD(event){
        if (Rgpd.checked == 1) {
            document.querySelector('div.rg').innerHTML = "<p class='Tags'> Case cochée ! </p>";

            Rgpdv = 1;
        } else {
            document.querySelector('div.rg').innerHTML = "<p class='p2Error'> Case non cochée ! </p>";

            Rgpdv = -1;
        }
    }

    form.addEventListener("change", allform);

    function allform(event){
        if (Namev + Prenamev + Telv + Postv + Mailv + Catv + Rgpdv + Passwordev + Passworddev  == 9) {
            document.querySelector('div.erp2').innerHTML = "<p class='Tags'> Vous pouvez passer à l'étape suivante ! </p>"
        } else {
                document.querySelector('div.erp2').innerHTML = "<p class='p2Error'> Remplissez tout le formulaire ! </p>";
        }
    }



    
    



function Page2SV(event){

    
    // console.log(Name);

    document.getElementById("hiddenp2").addEventListener("click", clickh);

    function clickh(event){ 

        event.preventDefault();
    }


    
    document.getElementById("hiddenp2").click();

    
    if (Name.value === '' || Name.value == null) {
        document.querySelector('div.erp2').innerHTML = "<p class='p2Error'> Remplissez tout le formulaire ! </p>";
    } else {
        
    }

    if (Prename.value === '' || Prename.value == null) {
        document.querySelector('div.erp2').innerHTML = "<p class='p2Error'> Remplissez tout le formulaire ! </p>";
    } else {
        
    }

    if (Tel.value === '' || Tel.value == null) {
        document.querySelector('div.erp2').innerHTML = "<p class='p2Error'> Remplissez tout le formulaire ! </p>";
    } else {
       
    }

    if (Post.value === '' || Post.value == null) {
        document.querySelector('div.erp2').innerHTML = "<p class='p2Error'> Remplissez tout le formulaire ! </p>";
    } else {
        
    }

    if (Mail.value === '' || Mail.value == null) {
        document.querySelector('div.erp2').innerHTML = "<p class='p2Error'> Remplissez tout le formulaire ! </p>";
    } else {
        
    } 

    if (Password.value === '' || Password.value == null) {
        document.querySelector('div.erp2').innerHTML = "<p class='p2Error'> Remplissez tout le formulaire ! </p>";
    } else {
        
    } 

    if (Passwordd.value === '' || Passwordd.value == null) {
        document.querySelector('div.erp2').innerHTML = "<p class='p2Error'> Remplissez tout le formulaire ! </p>";
    } else {
        
    } 

    
    // Champ INPUT Début
    if (Name.value.match(nametest)) {
       Namev = 1;
    } else {
        document.querySelector('div.erp2').innerHTML = "<p class='p2Error'> Le formulaire comporte des erreurs ! </p>";

        Namev = -1;
    }

    if (Prename.value.match(prenametest)) {
        Prenamev = 1;
    } else {
        document.querySelector('div.erp2').innerHTML = "<p class='p2Error'> Le formulaire comporte des erreurs ! </p>";

        Prenamev = -1;
    }

    if (Tel.value.match(teltest)) {
        Telv = 1;
    } else {
        document.querySelector('div.erp2').innerHTML = "<p class='p2Error'> Le formulaire comporte des erreurs ! </p>";

        Telv = -1;
    }

    if (Post.value.match(Posttest)) {
        Postv = 1;
    } else {
        document.querySelector('div.erp2').innerHTML = "<p class='p2Error'> Le formulaire comporte des erreurs ! </p>";

        Postv = -1;
    }

    if (Mail.value.match(mailtest)) {
        Mailv = 1;
    } else {
        document.querySelector('div.erp2').innerHTML = "<p class='p2Error'> Le formulaire comporte des erreurs ! </p>";

        Mailv = -1;
    }

    if (Password.value.match(mailtest)) {
        Passwordev = 1;
    } else {
        document.querySelector('div.erp2').innerHTML = "<p class='p2Error'> Le formulaire comporte des erreurs ! </p>";

        Passwordev = -1;
    }

    if (Passwordd.value.match(mailtest)) {
        Passworddev = 1;
    } else {
        document.querySelector('div.erp2').innerHTML = "<p class='p2Error'> Le formulaire comporte des erreurs ! </p>";

        Passworddev = -1;
    }
    // Champ INPUT Fin
    


    if (Cat.value == 0){
        document.querySelector('div.catf2').innerHTML = "<p class='p2Error'> Catégorie invalide ! </p>";

        Catv = -1;
       
    } else {
        document.querySelector('div.catf2').innerHTML = "<p class='Tags'> Catégorie sélectionnée ! </p>";

        Catv = 1;
    }

    if (Rgpd.checked == 1) {
        document.querySelector('div.rg').innerHTML = "<p class='Tags'> Case cochée ! </p>";

        Rgpdv= 1;
    } else {
        document.querySelector('div.rg').innerHTML = "<p class='p2Error'> Case non cochée ! </p>";

        Rgpdv= -1;
    }


    if (Namev + Prenamev + Telv + Postv + Mailv + Catv + Rgpdv + Passwordev + Passworddev  == 9) {
            // Affiche Page 3
        document.getElementById("p3").style.display = 'block';

            // Enleve Page 2
        document.getElementById("p2").style.display = 'none';
    } else {
        document.querySelector('div.erp2').innerHTML = "<p class='p2Error'> Le formulaire comporte des erreurs ! </p>"
    }

    event.preventDefault();


}


    
Fiche = document.getElementById('Fiche');
MailGMB = document.getElementById("emailId");
form3 = document.getElementById("formp3");
checkboxp3 = document.getElementById('checkboxGG');
const isEmpty = str => !str.trim().length;

// form3.addEventListener("change", fiche);

// function fiche(event) {

   
    

//     fichegmb = /^[a-zA-Z0-9,;()].{10,163}$/;

//     if (Fiche.value === "" || Fiche.value == null){

//         document.querySelector("div.gmbname").innerHTML = "<p class='Tags'> Entreprise GMB trouvée ! </p>";

//         // NMgmb = 1;

        
        

//     } else {
//         document.querySelector("div.gmbname").innerHTML = "<p class='p2Error'> Nom d'entreprise non trouvée ! </p>";


      
//         // Mail.focus()
//         // NMgmb = -1;
//     }

    

// }


form3.addEventListener("change", emailgmb);




function emailgmb(event) {
    mailgmb = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;        
        

    if (MailGMB.value.match(mailgmb)){

        document.querySelector("div.gmbml").innerHTML = "<p class='Tags'> Mail GMB valide !</p>";      

    } else {
        document.querySelector("div.gmbml").innerHTML = "<p class='p2Error'> Saisissez une addresse e-mail GMB valide ! </p>";
        
    } 
    
}



// document.getElementById('checkboxGG').style.pointerEvents = "none";


form3.addEventListener("change", fichegmb);



function fichegmb(event) {



    if (isEmpty(Fiche.value || MailGMB.value)){
        document.getElementById('checkboxGG').style.display = "block";
    } else {
        document.getElementById('checkboxGG').style.display = "none";
    }

}



checkboxp3.addEventListener('click', checkp3);

function checkp3(event) {

    
    
    if (checkboxp3.checked = true) {
        MailGMB.click();
        

        document.getElementById('Fiche').style.pointerEvents = "none";

        document.getElementById("emailId").style.pointerEvents = "none";

      

      
    } else {
        // document.getElementById('Fiche').style.pointerEvents = "auto";

        // document.getElementById("emailId").style.pointerEvents = "auto";
        
    }



    // if (checkboxp3.checked != true) {
    //     MailGMB.click();
        

    //     document.getElementById('Fiche').style.pointerEvents = "auto";

    //     document.getElementById("emailId").style.pointerEvents = "auto";

      

      
    // } else {
    //     // document.getElementById('Fiche').style.pointerEvents = "none";

    //     // document.getElementById("emailId").style.pointerEvents = "none";
        
    // }

    
}





// PAGE 3 (SUIVANT)

function Page3SV(event){


    
    // empecher chargment du formulaire
    


    document.getElementById("hiddenp3").addEventListener("click", clickp3);


    function clickp3(event){ 
        
        event.preventDefault()
    }

    document.getElementById("hiddenp3").click();
   


    fichegmb = /^[a-zA-Z0-9,;()].{10,163}$/;

    if (Fiche.value.match(fichegmb)){

        document.querySelector("div.gmbname").innerHTML = "<p class='Tags'> Entreprise GMB trouvée ! </p>";

        NMgmb = 1;

    } else {
        document.querySelector("div.gmbname").innerHTML = "<p class='p2Error'> Nom d'entreprise non trouvée ! </p>";
      
       
        NMgmb = -1;
    }


    mailgmb = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;        
        

    if (MailGMB.value.match(mailgmb)){

        document.querySelector("div.gmbml").innerHTML = "<p class='Tags'> Mail GMB valide !</p>";

        MlSgmb = 1;

    } else {
        document.querySelector("div.gmbml").innerHTML = "<p class='p2Error'> Saisissez une addresse e-mail GMB valide ! </p>";
      
       
        MlSgmb = -1;


    }

    
    if ( NMgmb + MlSgmb == 2) {
             // Affiche Page 4
        document.getElementById("p4").style.display = 'block';

            // Enleve Page 3
        document.getElementById("p3").style.display = 'none';
    }


    if (checkboxp3.checked) {

        document.querySelector("div.gmbname").innerHTML = "<p class='Tags'></p>";

        document.querySelector("div.gmbml").innerHTML = "<p class='Tags'></p>";
       
        // Affiche Page 4
        document.getElementById("p4").style.display = 'block';

            // Enleve Page 3
        document.getElementById("p3").style.display = 'none';


      

      
    } else {
        // document.getElementById('Fiche').style.pointerEvents = "none";

        // document.getElementById("emailId").style.pointerEvents = "none";
        
    }


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

        
    
        if (checkbox1.checked) {
            
         

            // alert("checked");
    
            
            // Affiche Page 5
        
            document.getElementById("p5").style.display = 'block';
    
            // Enleve Page 4
    
            document.getElementById("p4").style.display = 'none';




            // Page 5 Evenements selection individuelle

            checkboxS = document.getElementById("0Check6"); // Sélection libre
            checkboxE = document.getElementById("0Check5"); // Évènement phare
            // console.log(checkbox0);
            checkbox1 = document.getElementById("1Check5");
            checkbox2 = document.getElementById("2Check5");
            checkbox3 = document.getElementById("3Check5");
            checkbox4 = document.getElementById("4Check5");





            checkbox1.addEventListener("click", check1);

            checkbox2.addEventListener("click", check2);

            checkbox3.addEventListener("click", check3);

            checkbox4.addEventListener("click", check4);





            


            function check1(event) {
                if (checkbox1.checked){

                checkbox2.checked = false;
                checkbox3.checked = false;
                checkbox4.checked = false;
                
                // NoelD = "01/12/2022"

                // dateDebut.value = NoelD

                // NoelF = "25/12/2022"

                // dateFIn.value = NoelF
                
                } else {

                }


                if (checkbox1.checked){

                    checkboxS.checked = false;
                
                } else {
                
                }
            }


            function check2(event) {
                if (checkbox2.checked){

                    checkbox1.checked = false;
                    checkbox3.checked = false;
                    checkbox4.checked = false; 

                    // MereD = "03/06/2023"

                    // dateDebut.value = NoelD
                
                    // MereF = "03/06/2023"
                
                    // dateFIn.value = NoelF

                
                    } else {
                
                    }

                    if (checkbox2.checked){

                        checkboxS.checked = false;
                    
                    } else {
                    
                    }
            }

            function check3(event) {
                if (checkbox3.checked){

                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox4.checked = false; 
                    } else {
                
                    }



                if (checkbox3.checked){

                    checkboxS.checked = false;
                
                } else {
                
                }  
                    
            }

            function check4(event) {
                if (checkbox4.checked){

                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox3.checked = false; 
                    } else {
                
                    }
                
                if (checkbox4.checked){

                    checkboxS.checked = false;

                } else {

                }    
            }


            checkboxS.addEventListener("click", checkS);


            checkboxE.addEventListener("click", checkE);


            function checkS(event) {
                
                if(checkboxS.checked){
                    
                    checkboxE.checked = false;
                    
                } else {
                    // Affiche Page 6bis
                    document.getElementById("p6bis").style.display = 'block';

                    // Enleve Page 5
                    document.getElementById("p5").style.display = 'none'; 
                } 

                if(checkboxS.checked){
                    
                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox3.checked = false; 
                    checkbox4.checked = false; 
                    
                } else {
                    
                }
            }

            function checkE(event) {
                
                if(checkboxE.checked){
                
                    checkboxS.checked = false;
                    
                    
                } else {

                }
            }



                    


            function check1(event) {
                if (checkbox1.checked){

                checkbox2.checked = false;
                checkbox3.checked = false;
                checkbox4.checked = false;
                
                // NoelD = "01/12/2022"

                // dateDebut.value = NoelD

                // NoelF = "25/12/2022"

                // dateFIn.value = NoelF
                
                } else {

                }


                if (checkbox1.checked){

                    checkboxS.checked = false;
                
                } else {
                
                }
            }


            function check2(event) {
                if (checkbox2.checked){

                    checkbox1.checked = false;
                    checkbox3.checked = false;
                    checkbox4.checked = false; 

                    // MereD = "03/06/2023"

                    // dateDebut.value = NoelD
                
                    // MereF = "03/06/2023"
                
                    // dateFIn.value = NoelF

                
                    } else {
                
                    }

                    if (checkbox2.checked){

                        checkboxS.checked = false;
                    
                    } else {
                    
                    }
            }

            function check3(event) {
                if (checkbox3.checked){

                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox4.checked = false; 
                    } else {
                
                    }



                if (checkbox3.checked){

                    checkboxS.checked = false;
                
                } else {
                
                }  
                    
            }

            function check4(event) {
                if (checkbox4.checked){

                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox3.checked = false; 
                    } else {
                
                    }
                
                if (checkbox4.checked){

                    checkboxS.checked = false;

                } else {

                }    
            }


            checkboxS.addEventListener("click", checkS);


            checkboxE.addEventListener("click", checkE);


            function checkS(event) {
                
                if(checkboxS.checked){
                    
                    checkboxE.checked = false;
                    
                } else {
                    // Affiche Page 6bis
                    document.getElementById("p6bis").style.display = 'block';

                    // Enleve Page 5
                    document.getElementById("p5").style.display = 'none'; 
                } 

                if(checkboxS.checked){
                    
                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox3.checked = false; 
                    checkbox4.checked = false; 
                    
                } else {
                    
                }
            }

            function checkE(event) {
                
                if(checkboxE.checked){
                
                    checkboxS.checked = false;
                    
                    
                } else {

                }
            }

    
            
            
    
            // ErorPage4SV.style.display = "block";
    
    
        } else if (checkbox2.checked) { 

                
        
            // Affiche Page 5
            document.getElementById("p5").style.display = 'block';
    
            // Enleve Page 4
    
            document.getElementById("p4").style.display = 'none';




             // Page 5 Evenements selection individuelle

             checkboxS = document.getElementById("0Check6"); // Sélection libre
             checkboxE = document.getElementById("0Check5"); // Évènement phare
             // console.log(checkbox0);
             checkbox1 = document.getElementById("1Check5");
             checkbox2 = document.getElementById("2Check5");
             checkbox3 = document.getElementById("3Check5");
             checkbox4 = document.getElementById("4Check5");
 
 
 
 
 
             checkbox1.addEventListener("click", check1);
 
             checkbox2.addEventListener("click", check2);
 
             checkbox3.addEventListener("click", check3);
 
             checkbox4.addEventListener("click", check4);
 
 
 
 
 
             
 
 
             function check1(event) {
                 if (checkbox1.checked){
 
                 checkbox2.checked = false;
                 checkbox3.checked = false;
                 checkbox4.checked = false;
                 
                 // NoelD = "01/12/2022"
 
                 // dateDebut.value = NoelD
 
                 // NoelF = "25/12/2022"
 
                 // dateFIn.value = NoelF
                 
                 } else {
 
                 }
 
 
                 if (checkbox1.checked){
 
                     checkboxS.checked = false;
                 
                 } else {
                 
                 }
             }
 
 
             function check2(event) {
                 if (checkbox2.checked){
 
                     checkbox1.checked = false;
                     checkbox3.checked = false;
                     checkbox4.checked = false; 
 
                     // MereD = "03/06/2023"
 
                     // dateDebut.value = NoelD
                 
                     // MereF = "03/06/2023"
                 
                     // dateFIn.value = NoelF
 
                 
                     } else {
                 
                     }
 
                     if (checkbox2.checked){
 
                         checkboxS.checked = false;
                     
                     } else {
                     
                     }
             }
 
             function check3(event) {
                 if (checkbox3.checked){
 
                     checkbox1.checked = false;
                     checkbox2.checked = false;
                     checkbox4.checked = false; 
                     } else {
                 
                     }
 
 
 
                 if (checkbox3.checked){
 
                     checkboxS.checked = false;
                 
                 } else {
                 
                 }  
                     
             }
 
             function check4(event) {
                 if (checkbox4.checked){
 
                     checkbox1.checked = false;
                     checkbox2.checked = false;
                     checkbox3.checked = false; 
                     } else {
                 
                     }
                 
                 if (checkbox4.checked){
 
                     checkboxS.checked = false;
 
                 } else {
 
                 }    
             }
 
 
             checkboxS.addEventListener("click", checkS);
 
 
             checkboxE.addEventListener("click", checkE);
 
 
             function checkS(event) {
                 
                 if(checkboxS.checked){
                     
                     checkboxE.checked = false;
                     
                 } else {
                     // Affiche Page 6bis
                     document.getElementById("p6bis").style.display = 'block';
 
                     // Enleve Page 5
                     document.getElementById("p5").style.display = 'none'; 
                 } 
 
                 if(checkboxS.checked){
                     
                     checkbox1.checked = false;
                     checkbox2.checked = false;
                     checkbox3.checked = false; 
                     checkbox4.checked = false; 
                     
                 } else {
                     
                 }
             }
 
             function checkE(event) {
                 
                 if(checkboxE.checked){
                 
                     checkboxS.checked = false;
                     
                     
                 } else {
 
                 }
             }
 
 
 
                     
 
 
             function check1(event) {
                 if (checkbox1.checked){
 
                 checkbox2.checked = false;
                 checkbox3.checked = false;
                 checkbox4.checked = false;
                 
                 // NoelD = "01/12/2022"
 
                 // dateDebut.value = NoelD
 
                 // NoelF = "25/12/2022"
 
                 // dateFIn.value = NoelF
                 
                 } else {
 
                 }
 
 
                 if (checkbox1.checked){
 
                     checkboxS.checked = false;
                 
                 } else {
                 
                 }
             }
 
 
             function check2(event) {
                 if (checkbox2.checked){
 
                     checkbox1.checked = false;
                     checkbox3.checked = false;
                     checkbox4.checked = false; 
 
                     // MereD = "03/06/2023"
 
                     // dateDebut.value = NoelD
                 
                     // MereF = "03/06/2023"
                 
                     // dateFIn.value = NoelF
 
                 
                     } else {
                 
                     }
 
                     if (checkbox2.checked){
 
                         checkboxS.checked = false;
                     
                     } else {
                     
                     }
             }
 
             function check3(event) {
                 if (checkbox3.checked){
 
                     checkbox1.checked = false;
                     checkbox2.checked = false;
                     checkbox4.checked = false; 
                     } else {
                 
                     }
 
 
 
                 if (checkbox3.checked){
 
                     checkboxS.checked = false;
                 
                 } else {
                 
                 }  
                     
             }
 
             function check4(event) {
                 if (checkbox4.checked){
 
                     checkbox1.checked = false;
                     checkbox2.checked = false;
                     checkbox3.checked = false; 
                     } else {
                 
                     }
                 
                 if (checkbox4.checked){
 
                     checkboxS.checked = false;
 
                 } else {
 
                 }    
             }
 
 
             checkboxS.addEventListener("click", checkS);
 
 
             checkboxE.addEventListener("click", checkE);
 
 
             function checkS(event) {
                 
                 if(checkboxS.checked){
                     
                     checkboxE.checked = false;
                     
                 } else {
                    
                 } 
 
                 if(checkboxS.checked){
                     
                     checkbox1.checked = false;
                     checkbox2.checked = false;
                     checkbox3.checked = false; 
                     checkbox4.checked = false; 
                     
                 } else {
                     
                 }
             }
 
             function checkE(event) {
                 
                 if(checkboxE.checked){
                 
                     checkboxS.checked = false;
                     
                     
                 } else {
 
                 }
             }
 

        
        } else if (checkbox3.checked) { 

                

             // Affiche Page 5
             document.getElementById("p5").style.display = 'block';
    
             // Enleve Page 4
     
             document.getElementById("p4").style.display = 'none';


            
            // Page 5 Evenements selection individuelle

            checkboxS = document.getElementById("0Check6"); // Sélection libre
            checkboxE = document.getElementById("0Check5"); // Évènement phare
            // console.log(checkbox0);
            checkbox1 = document.getElementById("1Check5");
            checkbox2 = document.getElementById("2Check5");
            checkbox3 = document.getElementById("3Check5");
            checkbox4 = document.getElementById("4Check5");





            checkbox1.addEventListener("click", check1);

            checkbox2.addEventListener("click", check2);

            checkbox3.addEventListener("click", check3);

            checkbox4.addEventListener("click", check4);





            


            function check1(event) {
                if (checkbox1.checked){

                checkbox2.checked = false;
                checkbox3.checked = false;
                checkbox4.checked = false;
                
                // NoelD = "01/12/2022"

                // dateDebut.value = NoelD

                // NoelF = "25/12/2022"

                // dateFIn.value = NoelF
                
                } else {

                }


                if (checkbox1.checked){

                    checkboxS.checked = false;
                
                } else {
                
                }
            }


            function check2(event) {
                if (checkbox2.checked){

                    checkbox1.checked = false;
                    checkbox3.checked = false;
                    checkbox4.checked = false; 

                    // MereD = "03/06/2023"

                    // dateDebut.value = NoelD
                
                    // MereF = "03/06/2023"
                
                    // dateFIn.value = NoelF

                
                    } else {
                
                    }

                    if (checkbox2.checked){

                        checkboxS.checked = false;
                    
                    } else {
                    
                    }
            }

            function check3(event) {
                if (checkbox3.checked){

                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox4.checked = false; 
                    } else {
                
                    }



                if (checkbox3.checked){

                    checkboxS.checked = false;
                
                } else {
                
                }  
                    
            }

            function check4(event) {
                if (checkbox4.checked){

                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox3.checked = false; 
                    } else {
                
                    }
                
                if (checkbox4.checked){

                    checkboxS.checked = false;

                } else {

                }    
            }


            checkboxS.addEventListener("click", checkS);


            checkboxE.addEventListener("click", checkE);


            function checkS(event) {
                
                if(checkboxS.checked){
                    
                    checkboxE.checked = false;
                    
                } else {
                    // Affiche Page 6bis
                    document.getElementById("p6bis").style.display = 'block';

                    // Enleve Page 5
                    document.getElementById("p5").style.display = 'none'; 
                } 

                if(checkboxS.checked){
                    
                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox3.checked = false; 
                    checkbox4.checked = false; 
                    
                } else {
                    
                }
            }

            function checkE(event) {
                
                if(checkboxE.checked){
                
                    checkboxS.checked = false;
                    
                    
                } else {

                }
            }



                    


            function check1(event) {
                if (checkbox1.checked){

                checkbox2.checked = false;
                checkbox3.checked = false;
                checkbox4.checked = false;
                
                // NoelD = "01/12/2022"

                // dateDebut.value = NoelD

                // NoelF = "25/12/2022"

                // dateFIn.value = NoelF
                
                } else {

                }


                if (checkbox1.checked){

                    checkboxS.checked = false;
                
                } else {
                
                }
            }


            function check2(event) {
                if (checkbox2.checked){

                    checkbox1.checked = false;
                    checkbox3.checked = false;
                    checkbox4.checked = false; 

                    // MereD = "03/06/2023"

                    // dateDebut.value = NoelD
                
                    // MereF = "03/06/2023"
                
                    // dateFIn.value = NoelF

                
                    } else {
                
                    }

                    if (checkbox2.checked){

                        checkboxS.checked = false;
                    
                    } else {
                    
                    }
            }

            function check3(event) {
                if (checkbox3.checked){

                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox4.checked = false; 
                    } else {
                
                    }



                if (checkbox3.checked){

                    checkboxS.checked = false;
                
                } else {
                
                }  
                    
            }

            function check4(event) {
                if (checkbox4.checked){

                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox3.checked = false; 
                    } else {
                
                    }
                
                if (checkbox4.checked){

                    checkboxS.checked = false;

                } else {

                }    
            }


            checkboxS.addEventListener("click", checkS);


            checkboxE.addEventListener("click", checkE);


            function checkS(event) {
                
                if(checkboxS.checked){
                    
                    checkboxE.checked = false;
                    
                } else {
                  
                } 

                if(checkboxS.checked){
                    
                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox3.checked = false; 
                    checkbox4.checked = false; 
                    
                } else {
                    
                }
            }

            function checkE(event) {
                
                if(checkboxE.checked){
                
                    checkboxS.checked = false;
                    
                    
                } else {

                }
            }


        } else if (checkbox4.checked) { 
            
                

             // Affiche Page 5
             document.getElementById("p5").style.display = 'block';
    
             // Enleve Page 4
     
             document.getElementById("p4").style.display = 'none';


             // Page 5 Evenements selection individuelle

            checkboxS = document.getElementById("0Check6"); // Sélection libre
            checkboxE = document.getElementById("0Check5"); // Évènement phare
            // console.log(checkbox0);
            checkbox1 = document.getElementById("1Check5");
            checkbox2 = document.getElementById("2Check5");
            checkbox3 = document.getElementById("3Check5");
            checkbox4 = document.getElementById("4Check5");





            checkbox1.addEventListener("click", check1);

            checkbox2.addEventListener("click", check2);

            checkbox3.addEventListener("click", check3);

            checkbox4.addEventListener("click", check4);





            


            function check1(event) {
                if (checkbox1.checked){

                checkbox2.checked = false;
                checkbox3.checked = false;
                checkbox4.checked = false;
                
                // NoelD = "01/12/2022"

                // dateDebut.value = NoelD

                // NoelF = "25/12/2022"

                // dateFIn.value = NoelF
                
                } else {

                }


                if (checkbox1.checked){

                    checkboxS.checked = false;
                
                } else {
                
                }
            }


            function check2(event) {
                if (checkbox2.checked){

                    checkbox1.checked = false;
                    checkbox3.checked = false;
                    checkbox4.checked = false; 

                    // MereD = "03/06/2023"

                    // dateDebut.value = NoelD
                
                    // MereF = "03/06/2023"
                
                    // dateFIn.value = NoelF

                
                    } else {
                
                    }

                    if (checkbox2.checked){

                        checkboxS.checked = false;
                    
                    } else {
                    
                    }
            }

            function check3(event) {
                if (checkbox3.checked){

                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox4.checked = false; 
                    } else {
                
                    }



                if (checkbox3.checked){

                    checkboxS.checked = false;
                
                } else {
                
                }  
                    
            }

            function check4(event) {
                if (checkbox4.checked){

                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox3.checked = false; 
                    } else {
                
                    }
                
                if (checkbox4.checked){

                    checkboxS.checked = false;

                } else {

                }    
            }


            checkboxS.addEventListener("click", checkS);


            checkboxE.addEventListener("click", checkE);


            function checkS(event) {
                
                if(checkboxS.checked){
                    
                    checkboxE.checked = false;
                    
                } else {
                    // Affiche Page 6bis
                    document.getElementById("p6bis").style.display = 'block';

                    // Enleve Page 5
                    document.getElementById("p5").style.display = 'none'; 
                } 

                if(checkboxS.checked){
                    
                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox3.checked = false; 
                    checkbox4.checked = false; 
                    
                } else {
                    
                }
            }

            function checkE(event) {
                
                if(checkboxE.checked){
                
                    checkboxS.checked = false;
                    
                    
                } else {

                }
            }



                    


            function check1(event) {
                if (checkbox1.checked){

                checkbox2.checked = false;
                checkbox3.checked = false;
                checkbox4.checked = false;
                
                // NoelD = "01/12/2022"

                // dateDebut.value = NoelD

                // NoelF = "25/12/2022"

                // dateFIn.value = NoelF
                
                } else {

                }


                if (checkbox1.checked){

                    checkboxS.checked = false;
                
                } else {
                
                }
            }


            function check2(event) {
                if (checkbox2.checked){

                    checkbox1.checked = false;
                    checkbox3.checked = false;
                    checkbox4.checked = false; 

                    // MereD = "03/06/2023"

                    // dateDebut.value = NoelD
                
                    // MereF = "03/06/2023"
                
                    // dateFIn.value = NoelF

                
                    } else {
                
                    }

                    if (checkbox2.checked){

                        checkboxS.checked = false;
                    
                    } else {
                    
                    }
            }

            function check3(event) {
                if (checkbox3.checked){

                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox4.checked = false; 
                    } else {
                
                    }



                if (checkbox3.checked){

                    checkboxS.checked = false;
                
                } else {
                
                }  
                    
            }

            function check4(event) {
                if (checkbox4.checked){

                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox3.checked = false; 
                    } else {
                
                    }
                
                if (checkbox4.checked){

                    checkboxS.checked = false;

                } else {

                }    
            }


            checkboxS.addEventListener("click", checkS);


            checkboxE.addEventListener("click", checkE);


            function checkS(event) {
                
                if(checkboxS.checked){
                    
                    checkboxE.checked = false;
                    
                } else {
                    
                } 

                if(checkboxS.checked){
                    
                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox3.checked = false; 
                    checkbox4.checked = false; 
                    
                } else {
                    
                }
            }

            function checkE(event) {
                
                if(checkboxE.checked){
                
                    checkboxS.checked = false;
                    
                    
                } else {

                }
            }

        
        } else if (checkbox5.checked) { 

               

             // Affiche Page 5
             document.getElementById("p5").style.display = 'block';
    
             // Enleve Page 4
     
             document.getElementById("p4").style.display = 'none';


             // Page 5 Evenements selection individuelle

            checkboxS = document.getElementById("0Check6"); // Sélection libre
            checkboxE = document.getElementById("0Check5"); // Évènement phare
            // console.log(checkbox0);
            checkbox1 = document.getElementById("1Check5");
            checkbox2 = document.getElementById("2Check5");
            checkbox3 = document.getElementById("3Check5");
            checkbox4 = document.getElementById("4Check5");





            checkbox1.addEventListener("click", check1);

            checkbox2.addEventListener("click", check2);

            checkbox3.addEventListener("click", check3);

            checkbox4.addEventListener("click", check4);





            


            function check1(event) {
                if (checkbox1.checked){

                checkbox2.checked = false;
                checkbox3.checked = false;
                checkbox4.checked = false;
                
                // NoelD = "01/12/2022"

                // dateDebut.value = NoelD

                // NoelF = "25/12/2022"

                // dateFIn.value = NoelF
                
                } else {

                }


                if (checkbox1.checked){

                    checkboxS.checked = false;
                
                } else {
                
                }
            }


            function check2(event) {
                if (checkbox2.checked){

                    checkbox1.checked = false;
                    checkbox3.checked = false;
                    checkbox4.checked = false; 

                    // MereD = "03/06/2023"

                    // dateDebut.value = NoelD
                
                    // MereF = "03/06/2023"
                
                    // dateFIn.value = NoelF

                
                    } else {
                
                    }

                    if (checkbox2.checked){

                        checkboxS.checked = false;
                    
                    } else {
                    
                    }
            }

            function check3(event) {
                if (checkbox3.checked){

                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox4.checked = false; 
                    } else {
                
                    }



                if (checkbox3.checked){

                    checkboxS.checked = false;
                
                } else {
                
                }  
                    
            }

            function check4(event) {
                if (checkbox4.checked){

                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox3.checked = false; 
                    } else {
                
                    }
                
                if (checkbox4.checked){

                    checkboxS.checked = false;

                } else {

                }    
            }


            checkboxS.addEventListener("click", checkS);


            checkboxE.addEventListener("click", checkE);


            function checkS(event) {
                
                if(checkboxS.checked){
                    
                    checkboxE.checked = false;
                    
                } else {
                    // Affiche Page 6bis
                    document.getElementById("p6bis").style.display = 'block';

                    // Enleve Page 5
                    document.getElementById("p5").style.display = 'none'; 
                } 

                if(checkboxS.checked){
                    
                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox3.checked = false; 
                    checkbox4.checked = false; 
                    
                } else {
                    
                }
            }

            function checkE(event) {
                
                if(checkboxE.checked){
                
                    checkboxS.checked = false;
                    
                    
                } else {

                }
            }



                    


            function check1(event) {
                if (checkbox1.checked){

                checkbox2.checked = false;
                checkbox3.checked = false;
                checkbox4.checked = false;
                
                // NoelD = "01/12/2022"

                // dateDebut.value = NoelD

                // NoelF = "25/12/2022"

                // dateFIn.value = NoelF
                
                } else {

                }


                if (checkbox1.checked){

                    checkboxS.checked = false;
                
                } else {
                
                }
            }


            function check2(event) {
                if (checkbox2.checked){

                    checkbox1.checked = false;
                    checkbox3.checked = false;
                    checkbox4.checked = false; 

                    // MereD = "03/06/2023"

                    // dateDebut.value = NoelD
                
                    // MereF = "03/06/2023"
                
                    // dateFIn.value = NoelF

                
                    } else {
                
                    }

                    if (checkbox2.checked){

                        checkboxS.checked = false;
                    
                    } else {
                    
                    }
            }

            function check3(event) {
                if (checkbox3.checked){

                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox4.checked = false; 
                    } else {
                
                    }



                if (checkbox3.checked){

                    checkboxS.checked = false;
                
                } else {
                
                }  
                    
            }

            function check4(event) {
                if (checkbox4.checked){

                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox3.checked = false; 
                    } else {
                
                    }
                
                if (checkbox4.checked){

                    checkboxS.checked = false;

                } else {

                }    
            }


            checkboxS.addEventListener("click", checkS);


            checkboxE.addEventListener("click", checkE);


            function checkS(event) {
                
                if(checkboxS.checked){
                    
                    checkboxE.checked = false;
                    
                } else {
                 
                } 

                if(checkboxS.checked){
                    
                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox3.checked = false; 
                    checkbox4.checked = false; 
                    
                } else {
                    
                }
            }

            function checkE(event) {
                
                if(checkboxE.checked){
                
                    checkboxS.checked = false;
                    
                    
                } else {

                }
            }

        
        } else if (checkbox6.checked) { 

                

             // Affiche Page 5
             document.getElementById("p5").style.display = 'block';
    
             // Enleve Page 4
     
             document.getElementById("p4").style.display = 'none';


             // Page 5 Evenements selection individuelle

            checkboxS = document.getElementById("0Check6"); // Sélection libre
            checkboxE = document.getElementById("0Check5"); // Évènement phare
            // console.log(checkbox0);
            checkbox1 = document.getElementById("1Check5");
            checkbox2 = document.getElementById("2Check5");
            checkbox3 = document.getElementById("3Check5");
            checkbox4 = document.getElementById("4Check5");





            checkbox1.addEventListener("click", check1);

            checkbox2.addEventListener("click", check2);

            checkbox3.addEventListener("click", check3);

            checkbox4.addEventListener("click", check4);





            


            function check1(event) {
                if (checkbox1.checked){

                checkbox2.checked = false;
                checkbox3.checked = false;
                checkbox4.checked = false;
                
                // NoelD = "01/12/2022"

                // dateDebut.value = NoelD

                // NoelF = "25/12/2022"

                // dateFIn.value = NoelF
                
                } else {

                }


                if (checkbox1.checked){

                    checkboxS.checked = false;
                
                } else {
                
                }
            }


            function check2(event) {
                if (checkbox2.checked){

                    checkbox1.checked = false;
                    checkbox3.checked = false;
                    checkbox4.checked = false; 

                    // MereD = "03/06/2023"

                    // dateDebut.value = NoelD
                
                    // MereF = "03/06/2023"
                
                    // dateFIn.value = NoelF

                
                    } else {
                
                    }

                    if (checkbox2.checked){

                        checkboxS.checked = false;
                    
                    } else {
                    
                    }
            }

            function check3(event) {
                if (checkbox3.checked){

                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox4.checked = false; 
                    } else {
                
                    }



                if (checkbox3.checked){

                    checkboxS.checked = false;
                
                } else {
                
                }  
                    
            }

            function check4(event) {
                if (checkbox4.checked){

                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox3.checked = false; 
                    } else {
                
                    }
                
                if (checkbox4.checked){

                    checkboxS.checked = false;

                } else {

                }    
            }


            checkboxS.addEventListener("click", checkS);


            checkboxE.addEventListener("click", checkE);


            function checkS(event) {
                
                if(checkboxS.checked){
                    
                    checkboxE.checked = false;
                    
                } else {
                    // Affiche Page 6bis
                    document.getElementById("p6bis").style.display = 'block';

                    // Enleve Page 5
                    document.getElementById("p5").style.display = 'none'; 
                } 

                if(checkboxS.checked){
                    
                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox3.checked = false; 
                    checkbox4.checked = false; 
                    
                } else {
                    
                }
            }

            function checkE(event) {
                
                if(checkboxE.checked){
                
                    checkboxS.checked = false;
                    
                    
                } else {

                }
            }



                    


            function check1(event) {
                if (checkbox1.checked){

                checkbox2.checked = false;
                checkbox3.checked = false;
                checkbox4.checked = false;
                
                // NoelD = "01/12/2022"

                // dateDebut.value = NoelD

                // NoelF = "25/12/2022"

                // dateFIn.value = NoelF
                
                } else {

                }


                if (checkbox1.checked){

                    checkboxS.checked = false;
                
                } else {
                
                }
            }


            function check2(event) {
                if (checkbox2.checked){

                    checkbox1.checked = false;
                    checkbox3.checked = false;
                    checkbox4.checked = false; 

                    // MereD = "03/06/2023"

                    // dateDebut.value = NoelD
                
                    // MereF = "03/06/2023"
                
                    // dateFIn.value = NoelF

                
                    } else {
                
                    }

                    if (checkbox2.checked){

                        checkboxS.checked = false;
                    
                    } else {
                    
                    }
            }

            function check3(event) {
                if (checkbox3.checked){

                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox4.checked = false; 
                    } else {
                
                    }



                if (checkbox3.checked){

                    checkboxS.checked = false;
                
                } else {
                
                }  
                    
            }

            function check4(event) {
                if (checkbox4.checked){

                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox3.checked = false; 
                    } else {
                
                    }
                
                if (checkbox4.checked){

                    checkboxS.checked = false;

                } else {

                }    
            }


            checkboxS.addEventListener("click", checkS);


            checkboxE.addEventListener("click", checkE);


            function checkS(event) {
                
                if(checkboxS.checked){
                    
                    checkboxE.checked = false;
                    
                } else {
                    
                } 

                if(checkboxS.checked){
                    
                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox3.checked = false; 
                    checkbox4.checked = false; 
                    
                } else {
                    
                }
            }

            function checkE(event) {
                
                if(checkboxE.checked){
                
                    checkboxS.checked = false;
                    
                    
                } else {

                }
            }


        } else if (checkbox7.checked) { 

                

             // Affiche Page 5
             document.getElementById("p5").style.display = 'block';
    
             // Enleve Page 4
     
             document.getElementById("p4").style.display = 'none';

             // Page 5 Evenements selection individuelle

            checkboxS = document.getElementById("0Check6"); // Sélection libre
            checkboxE = document.getElementById("0Check5"); // Évènement phare
            // console.log(checkbox0);
            checkbox1 = document.getElementById("1Check5");
            checkbox2 = document.getElementById("2Check5");
            checkbox3 = document.getElementById("3Check5");
            checkbox4 = document.getElementById("4Check5");





            checkbox1.addEventListener("click", check1);

            checkbox2.addEventListener("click", check2);

            checkbox3.addEventListener("click", check3);

            checkbox4.addEventListener("click", check4);





            


            function check1(event) {
                if (checkbox1.checked){

                checkbox2.checked = false;
                checkbox3.checked = false;
                checkbox4.checked = false;
                
                // NoelD = "01/12/2022"

                // dateDebut.value = NoelD

                // NoelF = "25/12/2022"

                // dateFIn.value = NoelF
                
                } else {

                }


                if (checkbox1.checked){

                    checkboxS.checked = false;
                
                } else {
                
                }
            }


            function check2(event) {
                if (checkbox2.checked){

                    checkbox1.checked = false;
                    checkbox3.checked = false;
                    checkbox4.checked = false; 

                    // MereD = "03/06/2023"

                    // dateDebut.value = NoelD
                
                    // MereF = "03/06/2023"
                
                    // dateFIn.value = NoelF

                
                    } else {
                
                    }

                    if (checkbox2.checked){

                        checkboxS.checked = false;
                    
                    } else {
                    
                    }
            }

            function check3(event) {
                if (checkbox3.checked){

                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox4.checked = false; 
                    } else {
                
                    }



                if (checkbox3.checked){

                    checkboxS.checked = false;
                
                } else {
                
                }  
                    
            }

            function check4(event) {
                if (checkbox4.checked){

                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox3.checked = false; 
                    } else {
                
                    }
                
                if (checkbox4.checked){

                    checkboxS.checked = false;

                } else {

                }    
            }


            checkboxS.addEventListener("click", checkS);


            checkboxE.addEventListener("click", checkE);


            function checkS(event) {
                
                if(checkboxS.checked){
                    
                    checkboxE.checked = false;
                    
                } else {
                    // Affiche Page 6bis
                    document.getElementById("p6bis").style.display = 'block';

                    // Enleve Page 5
                    document.getElementById("p5").style.display = 'none'; 
                } 

                if(checkboxS.checked){
                    
                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox3.checked = false; 
                    checkbox4.checked = false; 
                    
                } else {
                    
                }
            }

            function checkE(event) {
                
                if(checkboxE.checked){
                
                    checkboxS.checked = false;
                    
                    
                } else {

                }
            }



                    


            function check1(event) {
                if (checkbox1.checked){

                checkbox2.checked = false;
                checkbox3.checked = false;
                checkbox4.checked = false;
                
                // NoelD = "01/12/2022"

                // dateDebut.value = NoelD

                // NoelF = "25/12/2022"

                // dateFIn.value = NoelF
                
                } else {

                }


                if (checkbox1.checked){

                    checkboxS.checked = false;
                
                } else {
                
                }
            }


            function check2(event) {
                if (checkbox2.checked){

                    checkbox1.checked = false;
                    checkbox3.checked = false;
                    checkbox4.checked = false; 

                    // MereD = "03/06/2023"

                    // dateDebut.value = NoelD
                
                    // MereF = "03/06/2023"
                
                    // dateFIn.value = NoelF

                
                    } else {
                
                    }

                    if (checkbox2.checked){

                        checkboxS.checked = false;
                    
                    } else {
                    
                    }
            }

            function check3(event) {
                if (checkbox3.checked){

                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox4.checked = false; 
                    } else {
                
                    }



                if (checkbox3.checked){

                    checkboxS.checked = false;
                
                } else {
                
                }  
                    
            }

            function check4(event) {
                if (checkbox4.checked){

                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox3.checked = false; 
                    } else {
                
                    }
                
                if (checkbox4.checked){

                    checkboxS.checked = false;

                } else {

                }    
            }


            checkboxS.addEventListener("click", checkS);


            checkboxE.addEventListener("click", checkE);


            function checkS(event) {
                
                if(checkboxS.checked){
                    
                    checkboxE.checked = false;
                    
                } else {
                    
                } 

                if(checkboxS.checked){
                    
                    checkbox1.checked = false;
                    checkbox2.checked = false;
                    checkbox3.checked = false; 
                    checkbox4.checked = false; 
                    
                } else {
                    
                }
            }

            function checkE(event) {
                
                if(checkboxE.checked){
                
                    checkboxS.checked = false;
                    
                    
                } else {

                }
            }

             
        } else {
            


            alert("Sélectionnez au moins une catégorie");



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

        

  
   
} 




// Page 5 Evenements selection individuelle

checkboxS = document.getElementById("0Check6"); // Sélection libre
checkboxE = document.getElementById("0Check5"); // Évènement phare
// console.log(checkbox0);
checkbox1 = document.getElementById("1Check5");
checkbox2 = document.getElementById("2Check5");
checkbox3 = document.getElementById("3Check5");
checkbox4 = document.getElementById("4Check5");





checkbox1.addEventListener("click", check1);

checkbox2.addEventListener("click", check2);

checkbox3.addEventListener("click", check3);

checkbox4.addEventListener("click", check4);





dateDebut = document.getElementById('DateDebut');
// console.log(dateDebut);

dateFIn = document.getElementById('DateFin');



function check1(event) {
    if (checkbox1.checked){

    checkbox2.checked = false;
    checkbox3.checked = false;
    checkbox4.checked = false;
    
    NoelD = "01/12/2022"

    dateDebut.value = NoelD

    NoelF = "25/12/2022"

    dateFIn.value = NoelF
    
    } else {

    }


    if (checkbox1.checked){

        checkboxS.checked = false;
    
    } else {
    
    }
}


function check2(event) {
    if (checkbox2.checked){

        checkbox1.checked = false;
        checkbox3.checked = false;
        checkbox4.checked = false; 

        MereD = "03/06/2023"

        dateDebut.value = MereD
    
        MereF = "03/06/2023"
    
        dateFIn.value = MereF

       
        } else {
    
        }

        if (checkbox2.checked){

            checkboxS.checked = false;
        
        } else {
        
        }
}

function check3(event) {
    if (checkbox3.checked){

        checkbox1.checked = false;
        checkbox2.checked = false;
        checkbox4.checked = false; 



        ValentD = "30/01/2023"

        dateDebut.value = ValentD
    
        ValentF = "14/02/2023"
    
        dateFIn.value = ValentF


        } else {
    
        }



    if (checkbox3.checked){

        checkboxS.checked = false;
    
    } else {
    
    }  
        
}

function check4(event) {
    if (checkbox4.checked){

        checkbox1.checked = false;
        checkbox2.checked = false;
        checkbox3.checked = false; 


        PaqueD = "14/03/2023"

        dateDebut.value = PaqueD
    
        PaqueF = "10/04/2023"
    
        dateFIn.value = PaqueF


        } else {
    
        }
    
    if (checkbox4.checked){

        checkboxS.checked = false;

    } else {

    }    
}


checkboxS.addEventListener("click", checkS);


checkboxE.addEventListener("click", checkE);


function checkS(event) {
    
    if(checkboxS.checked){
        
        checkboxE.checked = false;
        
    } else {
       
    } 

    if(checkboxS.checked){
        
        checkbox1.checked = false;
        checkbox2.checked = false;
        checkbox3.checked = false; 
        checkbox4.checked = false; 
        
    } else {
        
    }
}

function checkE(event) {
    
    if(checkboxE.checked){
       
        checkboxS.checked = false;
        
        
    } else {

    }
}



function Page5SV(event){

  
    

    // empecher chargment du formulaire
    
    event.preventDefault();

    

    dateDebut = document.getElementById('DateDebut');
    

    dateFIn = document.getElementById('DateFin');



    if (checkboxE.checked){
        if (checkbox1.checked) {
            // Affiche Page 6bis
            document.getElementById("p6bis").style.display = 'block';

            // Enleve Page 5
            document.getElementById("p5").style.display = 'none'; 

           
           
        } else if (checkbox2.checked){
            // Affiche Page 6bis
            document.getElementById("p6bis").style.display = 'block';

            // Enleve Page 5
            document.getElementById("p5").style.display = 'none'; 
        } else if (checkbox3.checked){
            // Affiche Page 6bis
            document.getElementById("p6bis").style.display = 'block';

            // Enleve Page 5
            document.getElementById("p5").style.display = 'none'; 
        } else if (checkbox4.checked){
            // Affiche Page 6bis
            document.getElementById("p6bis").style.display = 'block';

            // Enleve Page 5
            document.getElementById("p5").style.display = 'none'; 
        }
    }


    checkboxE2 = document.getElementById('1check10');


    if (checkboxS.checked){
        //  checkboxE2.checked = true;
        // Affiche Page 6
        document.getElementById("p6").style.display = 'block';

        // Enleve Page 5
        document.getElementById("p5").style.display = 'none'; 
    }



    

}


Calendar = document.getElementById('Calendar1');
// console.log(Calendar)
    
function Page6SVbis(event){

    // empecher chargment du formulaire
    
    event.preventDefault();


    // Affiche Page 7
    document.getElementById("p7").style.display = 'block';

    // Enleve Page 6
    document.getElementById("p6bis").style.display = 'none';

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

payment = document.querySelector('div#payment');
credit = document.getElementById('credit');
paypal = document.getElementById('paypal');


credit.addEventListener('click', crd);

function crd(event){

    if (credit.checked) {
        paypal.checked = false;
        document.querySelector('div.payiment').innerHTML = "<p class='Tags'> Passez à l'étape suivante ! </p>";
        cred = 1;
    } else {
        cred = 0;
    }
}

paypal.addEventListener('click', pyp);

function pyp(event){

    if (paypal.checked){
        credit.checked = false;
        document.querySelector('div.payiment').innerHTML = "<p class='Tags'> Passez à l'étape suivante ! </p>";
        pay = 1;
    } else {
        pay = 0;
    }
}

payment.addEventListener('change', mser);

function mser(event){
    if (cred + pay == 0) {
        document.querySelector('div.payiment').innerHTML = "<p class='p2Error'> Sélectionnez un moyen de paiement ! </p>";
    } else {
        
    }
}




function Page7SV(event){

    
    
    if (credit.checked) {
           
    
        cred = 1;
    } else {
        cred = 0;
    }




    if (paypal.checked){
     

        pay = 1;
    } else {
        pay = 0;
    }
   

    

    if (cred + pay == 0) {

        document.querySelector('div.payiment').innerHTML = "<p class='p2Error'> Sélectionnez un moyen de paiement ! </p>";
    } else {
        event.preventDefault();


        // Affiche Page 8
        document.getElementById("p8").style.display = 'block';

        // Enleve Page 7
        document.getElementById("p7").style.display = 'none';
    }

    
    // empecher chargment du formulaire
    
    event.preventDefault();


    // Affiche Page 8
    // document.getElementById("p8").style.display = 'block';

    // // Enleve Page 7
    // document.getElementById("p7").style.display = 'none';

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





function Page5PDbis(event){

    // empecher chargment du formulaire
    
    event.preventDefault();

    // Enleve Page 6bis
    document.getElementById("p6bis").style.display = 'none';

    // Affiche Page 5
    document.getElementById("p5").style.display = 'block';



    // dateDebut.value = "??";

    // dateFIn.value = "??";
    
}



// PAGE 6 (PRECEDENT)

function Page6PD(event){

    // empecher chargment du formulaire
    
    event.preventDefault();

    // Enleve Page 7
    document.getElementById("p7").style.display = 'none';

    // Affiche Page 6
    document.getElementById("p5").style.display = 'block';

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
