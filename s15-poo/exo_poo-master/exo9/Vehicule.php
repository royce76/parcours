<?php

/**
 *
 */
abstract class Vehicule
{

  protected string $id;
  protected string $color;

  public function setId($id):self {
    $this->id = $id;
    return $this;
  }

  public function getId() {
    return $this->id;
  }

  public function setColor($color):self {
    $this->color = $color;
    return $this;
  }

  public function getColor() {
    return $this->color;
  }

  public function hydrate(array $datas) {
    foreach ($datas as $key => $data) {
      // code...
    }
  }
}
