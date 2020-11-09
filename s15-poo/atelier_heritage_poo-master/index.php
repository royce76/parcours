<?php
require 'Animal.php';
require "Chien.php";
require "Vache.php";

$chien = new Chien("medor");
// $chien->name = "medor";
$vache = new Vache("marguerite");
// $vache->name = "marguerite";

// class Chienne extends Chien {
//   public bool $antenne = TRUE;
// }
// $chienne = new Chienne();
// var_dump($chienne);
// // $animal = new Animal();
// var_dump($animal);

// var_dump($chien->manger());
// var_dump($vache->manger());

var_dump($chien);
var_dump($vache);
