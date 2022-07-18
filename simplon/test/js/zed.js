function Page2SV(event){

    event.preventDefault();

    const nomEl = document.querySelector('#nom');

const form = document.querySelector('#signup');

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
        
    }
}));

/*const frmC = document.querySelector(".nomm");
 // false
        if (frmC.classList.contains('success')) {

            document.getElementById("p3").style.display = 'block';

    // Enleve Page 2
             document.getElementById("p2").style.display = 'none';
    
        }*/

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