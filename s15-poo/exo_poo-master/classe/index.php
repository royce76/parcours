<!-- Exercice 1 -->
<?php
  require 'dog.php';

  // require_once ou include
  // require = une erreur et la page ne s'affiche plus.
  // include = une erreur sur le code n'influe pas sur le reste et la page s'affiche.
  // Oui.

  $dog1 = new Dog();
  //une instanciation.
  var_dump($dog1);
  // un objet, l'instance de la classe Dog.
  //la classe Dog est le moule qui fabrique l'instance.
  $dog2 = new Dog();
  var_dump($dog2);
  //non, ils ne sont pas identiques.
  //On remarque que leur identité est différente.

  $dog3 = $dog2;
  var_dump($dog3);
  //il est sotcké les informations de $dog2.
  //On ne fait que copier $dog2.
  // il vaut mieux utiliser des instances de classes que les copiers.
  // Sinon quand on va changer les données de $dog2, $dog3 suivra. Or l'interêt de la copie est perdu.
 ?>

<!--Exercice 2-->
<?php
require 'customer.php';

$customer = new Customer();
var_dump($customer);
// La classe est vide.
//oui.
//non.
$customer->name = "Doe";
var_dump($customer);
echo "<br>";
// $customer contient un tableau associatif avec une clé name et valeur Doe.
$customer->firstname = "john";
$customer->age = 42;
$customer->payment = ["visa", "mastercard","paypal"];
var_dump($customer);
//Oui
//type string, bool, number, array, etc...
$customer2 = new Customer();
echo "<br>";
var_dump($customer2);
//il est vide.
// on ne profite pas de la puissance de la classe qui pourrait recevoir ces attributs et les associés à toute nouvelles instances de cette classe.
$customer->dog = $dog1;
echo "<br>";
var_dump($customer);
// il contient l'instance de la classe Dog.
// on a réalisé un héritage.
 ?>
