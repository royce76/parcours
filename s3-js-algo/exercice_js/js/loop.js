v/*
console.log("boucle");

// excercice 1
var i = 0;
while (i<=9){
    console.log("one run of the loop");
    i+=2;
}
// elle s'affiche que 1 fois. A cause du navigateur. non
// boucle infinie.

// exercice 2

for(var i=0;i<=9;i++){
    console.log("One run of the loop");
}
// pareil que dans l'exercice 1
//idem
//boucle infini
//ils sont pareils
//for permet une plus belle lisibilité et 
//while ...

// exercice 3

for(var i=0;i<=99;i++){
    if(i%2==0){
        console.log(i);
    }
}
*/
//exercice 4
/*
for(var i=0;i<=99;i++){
    if(i%2==0){
        console.log(i+" is even");
    }
    else{
        console.log(i+" is odd");
    }
}
*/

//exercice 5
/*
var items =[
    "firstItem",
    "secondItem",
    "thirdItem",
    "fourthItem"
];

for(var i=0;i<5;i++){
    
     console.log(items[i]);
}
//les elements s'affichent.i est une variable
// i correspond au numéro de l'index du tableau.
//afficher les élément d'un tableau.
// la 5 eme valeur est indefini.
*/
//exercice 6
/*

customers = [
    "Albin Term",
    "Anna Sandgrove",
    "John Doe",
    "Terrance Head",
    "Yan Mock",
    "Zoe Durst"
  ];
  console.log("list of customers : ");
  for (i=0;i < customers.length; i++) {
    console.log(customers[i] );
  }
  */

  //exercice 7
/*
  var items =[
    "firstItem",
    "secondItem",
    "thirdItem",
    "fourthItem"
];
for(var item of items){
    console.log(item);
}
*/
//on a pas les index avec for of. 
//for of est ideal pour afficher les éléments sans passer par un comptage

// exercice 8

var citizen = {
    firstName : "john",
    lastName : "Doe",
    age : 45,
    income : 60000,
    sexe : 0
};

console.log(citizen);
console.log("citizen identity :");

for(var prop in citizen){
   
    if(citizen.sexe===1  ){
        
      citizen.sexe="female";
}
    else if(citizen.sexe===0){
      
      citizen.sexe="male";
}

     console.log(prop + " : " + citizen[prop]);
    
}

//exo 9
/*

var citizens = [
    {
      firstname : "John",
      lastname : "Doe"
    },
    {
      firstname : "Anna",
      lastname : "Molner"
    },
    {
      firstname : "Harry",
      lastname : "Trueman"
    },
    {
      firstname : "Cecile",
      lastname : "Mercier"
    }
  ];

    for(var citizen of citizens){
        console.log("citizen : ");
        for(var prop in citizen){
            console.log(prop + " : " + citizen[prop]);

        console.log(citizen);
  }
 }
*/