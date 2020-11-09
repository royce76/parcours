function test() {
    console.log(txt);
}
let txt = "vdsv";
test();

let hello = "bonjour";

if(true) {
    let hello = "helo world";
    console.log(hello);
}

console.log(hello);

const MIN_AGE = [18];
MIN_AGE.push(20);
console.log(MIN_AGE);

console.log("exemple de map");
const REF = [1,2,3,4,5];
/*
let copyREF = REF.map(function(value){
    return value * 2
});
console.log(copyREF);
*/
//ou
let copyREF = REF.map(value => value*2);
let sum = REF.reduce((accumulator,value) => accumulator + value);
console.log(copyREF);
console.log(`La somme est : ${sum} super ça marche`);

let exemple = REF.map(value => value * 2).reduce((accumulator,value) => accumulator + value);
console.log(exemple);//ca double le tableau et fait la somme
