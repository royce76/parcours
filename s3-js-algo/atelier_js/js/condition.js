/*var year= 2020;

/*if (false===false) {
    console.log("la condition est vérifiée");
}
else {
    console.log("la condition n'est pas vérifiée");
}
//=== et non = dans la condition
if (year===2020) {
    console.log("la condition est vérifiée");
}
else {
    console.log("la condition n'est pas vérifiée");
}
// == verifie que la valeur
//=== verifie strictement valeur et type (string ou number)

if (year<=3000) {
    console.log("Nous ne sommes pas encore en l'an 3000");
}
else {
    console.log("Nous sommes en l'an 3000");
}*/

//deux varibales
/*
var password = "cocolasticot";
var storedPassword = "cocacola";

if (password===storedPassword){
    console.log("Bienvenue");
}
else {
    console.log("Erreur, mot de passe incorrect");
}
*/
//complexe condition exemple with arrays
/*
var data = {
    pseudo : "toto",
    password :"cocolasticot"
};
var user={
    pseudo : "toto",
    password :"cocacola"
};

if (data.pseudo===user.pseudo || data.password===user.password){
    console.log("Bienvenue");
}
else {
    console.log("Erreur, mot de passe incorrect");
}
*/
// || veut dire ou && veut dire et

//Else if exemple
/*
var city ="bernay";

if(city==="rouen"){
    console.log("bienvenue en ville");
}
else if (city==="bernay"){
    console.log("bienvenue à la campagne");
}
else {
    console.log ("Vous êtes perdu.");
}
*/

var status = "visitor";

if(status!=="admin"){
    console.log("Access denied");
}
else{
    console.log("access granted");
}