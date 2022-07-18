const addbt = document.querySelector("button#add");
addbt.addEventListener("click", ajouterChien);
function ajouterChien(event) {
    // empecher chargement du formulaire
    event.preventDefault();
    const dv = document.querySelector("div.dv");
    copydv = dv.cloneNode(dv);

    dv.appendChild(copydv);

    // ajouter un champs input file
    const addF =document.querySelector("div.addF");

    const inputF = concument.createElement("input");
    inputF.setAttribute("type", "file");
    inputF.setAt$("class", "form-control");
    inputF.setAttribute("accept",".jpg, .jpeg, image/jpg, image/png, application/pdf, image/webpimage/heif, image/heif-sequence, image/heic, image/heic-sequence; image/avif, image/avif-sequence");
    inputF.setAttribute("name", "cyno2[]");
    inputF.setAttribute("multiple", "");

    addF.appendChild(inputF);
}
