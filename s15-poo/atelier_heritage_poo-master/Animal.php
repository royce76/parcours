<?php


abstract class Animal {

  public string $name;

  abstract public function manger();

  public function __construct(string $name) {
    $this->name = $name;
  }

}
