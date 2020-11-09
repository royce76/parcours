<?php

class Student {

  const MAX = 20;

  // Propriétés de l'objet
  protected ?string $firstname;
  protected ?int $age;
  protected ?string $id;

  public static $base;
  public static $number_student = 0;

  // Méthodes de l'objet
  public function __construct(array $data) {
    $this->hydrate($data);
    // $this->setFirstname($data["firstname"]);
    // $this->setAge($data["age"]);
    // if(isset($data["id"])) {
    //   $this->setId($data["id"]);
    // }

    self::$base = "12";
    self::$number_student ++;
  }

  private function hydrate(array $data) {
    // [
    //   "firstname" => "Claire"
    //   "age" => "25"
    // ]
    foreach ($data as $key => $value) {
      $method = "set" . ucfirst($key);
      if(method_exists($this, $method)) {
        $this->$method($value);
      }
    }
  }

  // Donne une valeur à id
  public function setId(string $id) {
      $this->id = $id;
  }
  // Récupérer la valeur de id
  public function getId() {
    return $this->id;
  }


  public function setFirstname(string $firstname):Student {
      $this->firstname = $firstname;
      return $this;
  }

  public function getFirstname():string {
    return $this->firstname;
  }

  public function setAge(int $age):Student {
      $this->age = $age;
      return $this;
  }

  public function getAge():int {
    return $this->age;
  }

  public static function setBase(string $base_int) {
    if(intval($base_int) <= self::MAX) {
      self::$base = $base_int;
    }
  }

  // public function getBase() {
  //   return self::$base;
  // }
}
