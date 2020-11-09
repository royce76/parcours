<?php
require 'bird.php';
require 'otherbird.php';
 ?>
<?php
//exercice 1
$bird = new Bird();
$bird->type = "sparrow";
$bird->color = "gey";
$bird->age = 5;
$bird->areas = [
  "europe",
  "north america",
  "asia"
];

var_dump($bird);
//resultat ok
//non
//une méthode
// elle est appelé via -> sur l'instance

$chante = $bird->sing();

echo "$chante";
// sparrow $chante
//$this fait référence à linstance
// ha bonne question lol
echo $bird->fly("Paris");
$bird->age = 3;
echo $bird->fly("Paris");
 ?>
 <?php

//exercice2

// je remarque les deux _

//$otherbird = new Otherbird();

// l'echo s'est affiché.
//non
//c'est une méthode qui est appelé dès que la classe est instancié.
// à l'instanciation
// afficher les éléments importants de l'instance de la classe.

// $otherBird = new OtherBird("sparrow");
// var_dump($otherBird);

echo "<br><br>";
// l'attribut type a un nom
//$this fait référence à l'linstance
//$type correspond à l'argument passé dans le construct et "type" à l'attribut $type.
// On peut ainsi instancié d'autres oiseaux au calme avec différentes valeurs lors de l'instanciation.
$data = [
  "type" => "sparrow",
  "color" => "white",
  "age" => 2,
  "areas" => ["europe", "north america", "asia"],
];
$otherBirds = new OtherBird($data);
// c'est un tableau associatif avec pour clé les même noms que les attributs.
foreach ($otherBirds as $key => $values) {
  if ($key !== "areas") {
    echo '<p>' . $key . ' = ' . $values .  '</p>';
  }
  else {
    echo "Zone active :";
    foreach ($values as $value) {
      echo "<ul><li>$value</li></ul>";
    }
  }
}
  ?>
