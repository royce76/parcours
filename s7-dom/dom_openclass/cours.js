var h = document.head; // La variable h contient l'objet head du DOM
console.log(h);

var b = document.body; // La variable b contient l'objet body du DOM
console.log(b);

if (document.body.childNodes[1].nodeType === document.ELEMENT_NODE) {
    console.log("Body est un noeud élément");
} else {
    console.log("Body est un noeud textuel");
}

let k = document.body.childNodes;
console.log(k);

for(let i = 0; i < k.length; i++) {
    console.log(document.body.childNodes[i]);
}