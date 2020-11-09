<?php

/**
 *
 */
final class Chien extends Animal {

  public bool $carnivor = TRUE;

  public function manger() {
    echo " mange de la viande";
  }

  public function __construct(string $name) {
    parent::__construct($name);
  }
}
