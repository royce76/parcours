//on récupère l'élément ciblé
let siteTitle = document.getElementsByTagName("h1")[0];
let articles = document.getElementsByTagName("article");



// On modifie l'élément.

siteTitle.innerText = "Un titre généré en JS";

// On modifie l'ensemble des articles à l'aide d'une boucle

for( let article of articles) {
    article.style.backgroundColor ="lightgrey";
}
//Création de la liste

const ITEMS = ["item1", "item2", "item3", "item4"];

//créer l'élément liste ul et son id

let mainContainer = document.getElementsByTagName("main")[0];
let liste = document.createElement("ul");
liste.id = "exemple";
console.log(liste);

//ajouter les li

for (let item of ITEMS) {
    let listeIteme = document.createElement("li");
    listeIteme.innerText = item;
    listeIteme.classList.add("list-item");
    liste.appendChild(listeIteme);
    console.log(listeIteme);
}

mainContainer.prepend(liste);

// fonction déclenché par le bouton help
function showHelp() {
    //on récupère et on modifie le paragraphe d'aide.
    let helpText = document.getElementById("helpText");
    helpText.innerText = "Lorem ispum dolor sit";
}
function coucou(){
    this.style.textDecoration = "line-through";
}
let listItems = document.getElementsByClassName("list-item");
for(let listItem of listItems) {
    listItem.addEventListener("click",coucou);
} 

//gestion du formulaire

function submit() {
    let input = document.getElementsByTagName("input")[0];
    let p = document.getElementById("content");
    p.innerText = input.value;
    input.value = "";
}

//Affichage diffféré
//variable stop sotcck la fonction pour pouvoir l'arreter avec cleartimeout
let stop = setTimeout(function(){
    siteTitle.style.opacity = 1;
},2000 );

let headerP = document.querySelector("header p.lead");

setTimeout(function(){
    headerP.style.opacity = 1;
},4500 );

//Affichage a intervalle régulier
let timer = document.getElementById("timer");
let sec = 0;

setInterval(function(){
    sec++;
    timer.innerText = sec;
}, 4000);