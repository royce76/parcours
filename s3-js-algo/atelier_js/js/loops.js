//Exemple of a standard while loop
var people = [
    "people1",
    "people2",
    "people3",
    "people4",
    "people5"
];

var i = 0;

while(i<5){
    console.log(people[i]);

    if(people[i]==="people5"){
        console.log("A bientôt en normandie");
    }
    i++;
}

//Exemple of for loop sens classique
console.log("-------boucle for-----");

for(var i=0;i<5;i++) {

    console.log(people[i]);
    if(people[i]==="people5"){
        console.log("A bientôt en normandie");
    }
}
// exemple of for loop sens inverse
console.log("-------boucle for-----");
for(var i=4;i>=0;i--) {

    console.log(people[i]);
    if(people[i]==="people5"){
        console.log("A bientôt en normandie");
    }
}

var dogs = [
    "toutou",
    "idefix",
    "medor",
    "lassie",
    "toby"
];

for (var i=0;i<dogs.length;i++){
    
    console.log("chien "+ i + " : "+ dogs[i]);
}

// exemple for of
console.log("------for of-----");

for(var dog of dogs){

    console.log(dog);
}

/*
for(var[index,dog] of dogs.entries()){

    console.log(index + " : " + dog);
}
*/

// loop for in
console.log("-----loop for in");

var building={
    type : "house",
    year : 1924,
    color : "green",
    surface : 110
};

console.log(building);

for(var prop in building){
    console.log(prop + " : " + building[prop]);
}