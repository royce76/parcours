// fonction exemple

function makeExemple(){
        console.log("This is the makeExemple function speaking");
        for(let i=0;i<5;i++){
          console.log(i);
        }
}

makeExemple(); //tjrs mettre les parenthèses

// function one action, one argument 

var customers = [
    "customer 1",
    "customer 2",
    "customer 3",
    "customer 4"
];
var fruits=[
    "banane",
    "peche",
    "orange"
];

function showArrayItems(data){  //data va appeler customers
        
    for (var item of data){
            
        console.log(item);
    }
}

showArrayItems(customers);
showArrayItems(fruits);

// function with multiple arguments and return value
console.log("-----function multiplearguement-----")
var ages = [
    12,
    14,
    8,
    22,
    1
];

function getSum(data=false){

    var sum =0;
    if(data){

        for(var value of data){
        sum += value;
        }
    }    
    return sum;
    
}
var sum = getSum(ages);
console.log(sum);

sum = getSum();
console.log(sum);

if(!sum){
    console.log("Attention nous n'avons pas pu calculer l'age total");
}

//function native
console.log("\n----fonction native et objet------\n");
/*
var dog = {
    name : "medor",
    age : 4,
    color : "brown",
    welcome : function(){
        console.log(this.name + " comes and say hello");
    },
    run : function(){
        console.log("dog run");
    }
};
*/
function Dog(name,age,color){
    this.name = name,
    this.age = age,
    this.color = color ,
    this.welcome = function(text){
        console.log(this.name + " comes and say hello" + text);
    },
    this.run = function(){
        console.log("dog run");
    }
}

var dog1 = new Dog("medor",4,"brown");
console.log(dog1);
dog1.welcome(" hello");
var dog2 = new Dog("rex",2,"grey");
console.log(dog2);
dog2.welcome(" wouaf wouaf");

//le parametre text envoye dans la focntion objet
//est référence dans l'appel de fonction en bas
// attention les parametres dans function dog pour generé les donnée du chien sont
//pas les meme que celle envoyé dans la fonction comme text.
// tableau associatif en objet cest = et pas :

console.log("----push---");

var colors=["green","red","black"];
console.log(colors);
colors.push("yellow");
console.log(colors);