// ~~~~~~~~~~ Difficult version with form handling ~~~~~~~~~~~~~
// WARNING : the form handling you see here is not the most efficient way
// it represents whats a student with your skills can easely do
// There are better and more efficient ways, take a look at : FormData objects

function Piscine (longueur, largeur, profondeur, debit) {
  //Properties
  this.longueur = longueur;
  this.largeur = largeur;
  this.profondeur = profondeur;
  this.debit = debit;

  //Methodes
  this.remplissage= function() {
      var result = (this.longueur*this.largeur*this.profondeur)/this.debit;
      return result;
    };
  //Shows Piscine information il the HTML page
  this.displayInformation = function() {
    var longueur = document.getElementById("longueur");
    longueur.innerHTML = "Longueur : " + this.longueur + " m";
    var largeur = document.getElementById("largeur");
    largeur.innerHTML = "Largeur : " + this.largeur + " m";
    var profondeur = document.getElementById("profondeur");
    profondeur.innerHTML = "Profondeur : " + this.profondeur + " m";
    var debit = document.getElementById("debit");
    debit.innerHTML = "Debit : " + this.debit + " m3/minute";

    var result = document.getElementById("result");
    result.innerHTML = "Votre piscine se remplit en " + this.remplissage() + " minutes";
  };
}

//Object to handle the new Piscine creation
var piscineManager = {
  //retrieve the form data
  dataFormHandling: function() {
    this.longueurInput = document.getElementById("longueurInput").value;
    this.largeurInput = document.getElementById("largeurInput").value;
    this.profondeurInput = document.getElementById("profondeurInput").value;
    this.debitInput = document.getElementById("debitInput").value;
  },
  //Make a new Piscine based on the form data and display the information
  newPiscine: function() {
    this.dataFormHandling();
    var psn = new Piscine(this.longueurInput, this.largeurInput, this.profondeurInput, this.debitInput);
    psn.displayInformation();
  }
};

//Shows a random base Piscine on the screen
var psn = new Piscine(1, 1, 1, 1);
psn.displayInformation();



// ~~~~~~~~~~ Simple version without form handling ~~~~~~~~~~~~~
// function Piscine (longueur, largeur, profondeur, debit) {
//   //Properties
//   this.longueur = longueur;
//   this.largeur = largeur;
//   this.profondeur = profondeur;
//   this.debit = debit;
//
//   //Methodes
//   this.remplissage= function() {
//       var result = (this.longueur*this.largeur*this.profondeur)/this.debit;
//       return result;
//     };
//
//   this.displayInformation = function() {
//     var longueur = document.getElementById("longueur");
//     longueur.innerHTML = "Longueur : " + this.longueur + " m";
//     var largeur = document.getElementById("largeur");
//     largeur.innerHTML = "Largeur : " + this.largeur + " m";
//     var profondeur = document.getElementById("profondeur");
//     profondeur.innerHTML = "Profondeur : " + this.profondeur + " m";
//     var debit = document.getElementById("debit");
//     debit.innerHTML = "Debit : " + this.debit + " m3/minute";
//
//     var result = document.getElementById("result");
//     result.innerHTML = "Votre piscine se remplit en " + this.remplissage() + " minutes";
//   }
// }
//
// var psn = new Piscine(8, 10, 3, 2);
//
// psn.displayInformation();
