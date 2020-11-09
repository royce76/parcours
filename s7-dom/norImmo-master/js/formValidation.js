function validateInput(validation, element, samllHelp, helpText) {
    if (validation) {
        element.classList.add("border", "border-success"); //border et border-succes sont des classes bootstrap
        element.classList.remove("border-danger");
        samllHelp.innerText = "";
    }
    else {
        element.classList.add("border", "border-danger");
        element.classList.remove("border-success");
        smallHelp.innerText = helpText;
    }
}

//Récupérer l'input firstname
let firstname = document.getElementById("phone");

//Déclencher une fonction quand l'utilisateur qui l'input
firstname.addEventListener("focusout", function(){
    let help = document.getElementById("phoneHelp");
    let validation = this.value.length > 2 && this.value.length <= 50;
    validateInput(validation, this, help, "attention le nom doit...");
});

//Récupérer l'input phone
let phone = document.getElementById("phone");

//Déclencher une fonction quand l'utilisateur qui l'input
phone.addEventListener("focusout", function(){
    let help = document.getElementById("phoneHelp");
    let validation = this.value.test(/^0[6,7]{1}[0-9]{8}$/g);
    validateInput(validation, this, help, "attention le numéro doit...");
    


