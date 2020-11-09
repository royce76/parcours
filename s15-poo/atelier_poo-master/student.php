<?php

class Student {

  const MAX = 20;

  // Propriété de l'objet (protected)
  public ?string $firstname;
  public ?int $age;
  protected ?string $id;
  public static $base;
  public static $number_static = 0;

  // Méthodes de l'objet (public)
  public function __construct(string $firstname=null, int $age=null) {
    self::$base ="12";
    $this->firstname = $firstname;
    $this->age = $age;
    self::$number_static ++;
  }

  // Donne une valeur à id
  public function setId(string $id) {
    if (strlen($id) > 3) {
      $this->id = $id;
    }
  }

  // Récupérer la valeur de id
  public function getId() {
    return $this->id;
  }

  public static function setBase(string $base_int) {
    if (intval($base_int) <= self::MAX) {
      self::$base = $base_int;
    }
  }
}

?>
