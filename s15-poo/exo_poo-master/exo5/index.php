<?php
require 'NissanSkyline.php';

$datas =
  [
    [
      "door" => NissanSkyline::DOOR[0],
      "color" => NissanSkyline::COLOR["789654123"]
    ],
    [
      "door" => NissanSkyline::DOOR[1],
      "color" => NissanSkyline::COLOR["123456789"]
    ],
    [
      "door" => NissanSkyline::DOOR[1],
      "color" => NissanSkyline::COLOR["147852369"]
    ]
  ];

foreach ($datas as $key => $data) {
  $skyline = new NissanSkyline($data, 56000);
  //The ID for the first and the third object are the same why ?
  var_dump($skyline);
  $id = spl_object_id($skyline);

  echo $id . ': '.$skyline->showCar($key);
}


echo "<h2>BLACK FRIDAY :</h2>";
  NissanSkyline::setPrice(99000);
  echo $skyline->showCar($key);
