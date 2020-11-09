let body = document.getElementsByTagName("body")[0];

let main = document.createElement("main");
body.appendChild(main); 
main.id = "mainId";
main.innerText = "coucou";
let mainId = document.getElementById("mainId");
console.log(mainId);


/* let section = document.createElement("section");
section.id = "sectionId";
main.appendChild(section);
console.log(section);

let title = document.createElement("h2");
title.id = "titleId";
console.log(title);

let liste = document.createElement("ul");
liste.id = "listeId";
console.log(liste);

let form = document.createElement("form");
form.id = "formId";
console.log(form);

let input = document.createElement("input");
input.type = "text";
input.id = "saisie";
console.log(input); */


// Create children for elements

/* let mainChild = mains.appendChild(sections);
let sectionChildFirst = sections.appendChild(titles);
let sectionChildSecond = sections.appendChild(listes);
let sectionChildThird = sections.appendChild(forms);
let formChild = forms.appendChild(inputs);
let sectionChildFourth = sections.appendChild(buttons); */
/* 

inputs.addEventListener("keyup", function(event){
    let x = event.keyCode;
    console.log(x);
    if (x === 13) {
        let newItemes = listes.appendChild(document.createElement("li").getElementsByTagName('li'));
        newItemes.innerText = document.getElementById("saisie").value;
        document.getElementById("saisie").value = "";
    }
});

let buttons = document.createElement("button");
buttons.type = "button";
buttons.innerText = "Ajoutez";
buttons.onclick = function() {ajouter()};

function ajouter() {
    let newItem = listes.appendChild(document.createElement("li").getElementsByTagName('li'));
    newItem.innerText = document.getElementById("saisie").value;
    document.getElementById("saisie").value = "";
}
 */



