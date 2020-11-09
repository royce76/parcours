<?php
  require "city.php";

  // $datas = [
  //   "city_first" => [
  //
  //     "nom" => "Paris",
  //     "département" => 75
  //   ],
  //   "city_second" =>[
  //
  //     "nom" => "Oissel",
  //     "département" => 76
  //   ]
  // ];

   // $city_first = new City("Paris",75);
   // $city_second = new City("Oissel",76);
   //
   // echo "<p>".$city_first->show_location()."</p>";
   // echo "<p>".$city_second->show_location()."</p>";

//pour aller plus loin
// foreach ($datas as $data) {
//   $city = new City($data);
//   var_dump(spl_object_id($city));
// }

//hydratation

$datas = [
  [
    "nom" => "Paris",
    "departement" => 75
  ],
  [
    "nom" => "Oissel",
    "departement" => 76
  ]
];
foreach ($datas as $data) {
  $city = new City($data);
  var_dump($city);
}
