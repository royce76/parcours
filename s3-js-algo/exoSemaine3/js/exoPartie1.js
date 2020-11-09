//partie 1
//exo 3 
/*
var y = 30;
var userNumber ='';
while(userNumber !== y){
     userNumber = prompt("Devine le nombre que je pense");
    if(userNumber > y ){ 
               alert("plus petit");
    }
    else if(userNumber < y) {
                    alert("plus grand");
    }
    else{
        alert('trouve');
        break;
    }
    
}
*/
//exo4

//for(var i =1;i<101;i++){
//console.log(i);}
 //exo 5
 /*for(var i=1;i<101;i++)if(i%2===0){
     console.log(i);
 }
 */
//exo6
/*
function remplir(longueur,largeur,hauteur,debit) {
    return (debit/longueur*largeur*hauteur);
}
alert("La piscine va se remplir au bout de " + Math.round(remplir(100,10,5,3)) + " minutes.");
*/
// exo 7
/*
var rayon = prompt("rayon ?");
function airCercle(rayon) {
    return  Math.PI * rayon * rayon;
}
alert("l'air du cercle est de " + Math.round(airCercle(4)*100)/100 + "m²");

function periCercle(rayon) {
    return  2 * Math.PI * rayon ;
}
alert("le périmètre du cercle est de " + Math.round(periCercle(4)*100)/100 + "m²");
*/
//exo 8
/*
var pyramide ="";
var etoile = "";
for (var i = 0;i<6;i++){
     etoile +="*";
    pyramide = pyramide + etoile +"\n";
}
console.log(pyramide);
*/
//exo 9
/*
 for(var i = 1;i<101;i++){
    if(i%5===0 && i%3===0){
        console.log("FIZZBUZZ");
    }
    else if(i%3===0){
        console.log("FIZZ");
    }
    else if(i%5===0){
        console.log("BUZZ");
    }
    else{console.log(i);}
}
*/
//
//PARTIE 2
//
//exercice 1
/*
 var achtag1 = "#" + " ";
 var achtag2 = " " + "#"; 

    for(var i = 1;i<9;i++) {
        if(i%2===0) {
            console.log(achtag1.padEnd(16,'#'+' '));
        }
        else{console.log(achtag2.padEnd(16,' '+'#'));}
    }
*/
//
// exercice 2
//
//
//var matrix = "\n1\n"+"0\n"+"0\n"+"0\n"+'"-------"';
  //  console.log(matrix.repeat(4));
  /*
var i = [1,0,0,0,'"------"'];
    var join = i.join("\n");
        console.log(join);

var i2 = [0,1,0,0];
    var join2 = i2.join("\n");
        console.log(join2);

console.log('"-------"');
    
    var reversei2 = i2.reverse();
        console.log(reversei2.join("\n"));
        
    var reversei = i.reverse();
        console.log(reversei.join("\n"));
        
console.log('"-------"');
*/
var k = [0,0,0,0];
for(var i =1;i<5;i++){
    console.log(k.join("\n"));
    console.log("-------");
}