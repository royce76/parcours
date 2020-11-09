<?php
  require "city.php";

  $paris = new City();
  $oissel = new City();

  $paris->set_dept(75);
  $paris->set_nom("Paris");
  echo "<p>".$paris->show_location()."</p>";
  $oissel->set_dept(76);
  $oissel->set_nom("oissel");
  echo "<p>".$oissel->show_location()."</p>";
