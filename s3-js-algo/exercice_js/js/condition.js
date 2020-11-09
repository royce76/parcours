console.log("condition");

// exercice 1

if (true){
    console.log("condition is working !");
}
// true is true, condition print

if (false){
    console.log("Condition is working !");
}
// false is not true, condition not print
else{
    console.log("condition is not working !");
}
//as false is not true, else is true.

if (false===false){
    console.log("Condition is working !");
}
// false is false so it is true.
// we realise what is true or not.

// exercice 3

var price = "forty five";

if (price===45){
    console.log("the price is a number");
}
else if (price==45){
    console.log("the price is a string");
}
else {
    console.log("the price is something else");
}
// price is number, price===45 verified, type and number verified.
// price is a string, price is verified by only number and not type
// price is not a number, and we don't ask if it is a string

//exercice 2

var data = 123;

if(data){
    console.log("condition is ok");
}
else{
    console.log("Conditionis KO");
}
//content osbelete
//condition ok, content is true
// condition ko, content is false
//condition ok, content is true even there is "texte"
// conditon ok, content is true even it is number

//exercice 4

var age = 18;

if (age <=17){
    console.log("Entry not allowed");
}
else{
    console.log("Entry allowed");
}
// age =19, 19>18 allowed
// age=17, 17=17 not allowed
//age=18, 18 allowed

//exercice 5

var store = [
    "walmart",
    "Colrado",
    "Souh-park",
    483
];

if (store[0]==="wallmart" && store[2]==="South-park"){
    console.log("the Wallmart in South-Park has " + store[3]+ " employes.");
}
else if (store[0]==="wallmart" && store[1]==="Colorado"){
    console.log("Hum this is an other " + store[0]+ " from "+store[1]+".");
}
else if (store[0]==="wallmart"){
    console.log("Too bad this is just a "+store[0]+".");
}
else{
    console.log("I do not know what this is.");
}

//exercice 6

var student = {
        Name : "John Doe",
        Grade : -5
}

if(student.Grade<10){
    console.log("Recalé");
}
else if(student.Grade<=12){
    console.log("Passable");
}
else if(student.Grade<=14){
    console.log("Moyen");
}
else if(student.Grade<=16){
    console.log("Bien");
}
else{
    console.log("Très bien");
}

//exercice 7

var meal ={
    foodType : "meat",
    cookedAt : 81,
    temperature :80
};

if (meal.cookedAt===meal.temperature){
    meal.status = "cooked";
    console.log(meal);
}
else if(meal.cookedAt<meal.temperature){
    meal.status = "uncooked";
    console.log(meal);
}
else{
    meal.status = "overcooked";
    console.log(meal);
}

//excercice 8

var number = -5;

if (number>0 && number%2===0){
    console.log("number is even");
}
else if(number>0 && number%2!==0){
    console.log("number is odd");
}
else{
    console.log("please enter a number at least greater than 0");
}