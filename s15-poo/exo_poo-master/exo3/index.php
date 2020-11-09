<?php
  require 'personnage.php';

$datas = [
  [
    "nom" => "royce",
    "prenom" => "stevenson",
    "adress" => "rue pierre Semard"
  ],
  [
    "nom" => "stevenson",
    "prenom" => "royce",
    "adress" => "rue afpa"
  ]
];

foreach ($datas as $key => $data) {
  $personnage = new Personnage($data);
  echo '<p>'.$personnage->getCoord().'</p>';
}
