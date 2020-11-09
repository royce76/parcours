//exercice 1

/*var items = new Array();
console.log(items);*/

/*items = new Array[];
console.log(items);
//new array [] don't work

items = ();
console.log(items);
//var array = () don't work*/

// Add a,b
/*items = [
    "a",
    "b"
];
console.log(items);
*/

//exercice 2
/*
var items = [
    "firstElement",
    "secondElement",
    "thirdElement",
    "fourthElement"
];
console.log(items);
console.log(items[1]);
//secondElement
console.log(items[3]);
//fourthElement
console.log(items[0]);
//firstElement
*/

//excercice 3
/*
var player = [
    "John",
    "Doe",
    34,
    true
];
console.log(player);
console.log(player[0]);
console.log(player[1]);
console.log(player[0]+" "+player[1]);
//console.log(player[2]+6);
player[2] += 6;
console.log(player[2]);
console.log(player[3]);
*/
// non c'est pas pratique 40 caractéristiques avec []

//exercice 4
/*
var player = {
    firstName : "John",
    lastName : "Doe",
    age : 34,
    isAdult : true
};
console.log(player);
console.log(player.firstName);
console.log(player.lastName);
console.log(player.firstName + " " + player.lastName);
player.age += 6;
console.log(player.age);
if (player.age > 18) {
    console.log(player.isAdult)
}
else {
    console.log( "he is not adult");
}
// Array {} is better cause it is easier to manipulate the variable.
*/

//excercice 5
/*
var car = {
    type : "Clio",
    brand : "Renault",
    date : "2006",
    color : "orange",
    passenger : [
        "Mike",
        "Claire",
        "Anna",
        "Louis"
        ]
};
console.log(car);
car.color = "noir";
console.log(car.passenger.length);

console.log(
    "Une " + car.brand +" "+ car.type + 
" de couleur " + car.color + ", modèle " + car.date +
" a été aperçue avec à son bord " + car.passenger.length + " passagers ?" 
);
//index passenger numeric array
console.log(car.passenger[0]);
// mike s'affiche. en premier on index car avec passenger puis on index passenger avec 0
console.log(
    car.passenger.length + " individus ont été aperçu à son bord : " +
    car.passenger[3] + ", " + 
    car.passenger[1] + ", " +
    car.passenger[0] + " et " +
    car.passenger[2] + " ?"
);
*/

// exercice 6

var a = 14;
var b = 38;

var product = [];

console.log(a + b + product);
/*
product = [
    a,
    b, , , , , ,50

];*/
//but
product[0] = a;
product[1] = b;
product[7] = 50;
console.log(product);