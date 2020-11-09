<?php

class Vache extends Animal {

  public bool $herbivore = TRUE;

  public function manger() {
    echo "mange de l'herbe";
  }

  public function __construct(string $name) {
    parent::__construct($name);
  }
}
