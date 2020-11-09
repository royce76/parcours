<?php
require 'customer.php';
 ?>
 <?php

 //Exercice 1
$customer = new Customer();
var_dump($customer);
//un objet issue de Customer.
//il affiche un tableau associatif
// on a donné une propriété à l'instance de la classe Customer
// $name est un attribut
//public nous permet de changer de l'extèrieur de la classe sa valeur
// oui.
$customer2 = new Customer();
var_dump($customer2);
// la différence est l'indice associé.
// cette fois çi les objets ont des attributsd en commun par la classe Customer et non attribué à la main.
// on gagne en maintenabilité.
// on type l'attribut.
// si on ne respecte pas le typage des attributs en leur donnant des valeurs
// une erreur survient qui met en défaut l'attribut et donc n'affiche plus la page vu que c'est require.

// Exercice2
$customer->name = strtoupper($customer->name);
echo "<br>";
var_dump($customer);
$customer->firstname = strtoupper($customer->firstname);
$customer->payments[] = "cash";
echo "<br>";
var_dump($customer);

echo '<p>'.$customer->name .' '.$customer->firstname.' is '.$customer->age.' years old.</p>
<p>He has the following means of payement :</p>';
foreach ($customer->payments as $key => $payment) {
  echo '<ul><li>'.$payment.'</li></ul>';
};
  ?>
