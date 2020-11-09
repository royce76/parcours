<?php
class Chat {

  const SEXE = ["male", "femelle"];
  const COLOR = ["noir", "blanc", "gris"];

  protected string $name = "catlost";
  protected int $age = 0;
  protected string $sexe = "male";
  protected string $color = "noir";

  public function __construct(array $data)
  {
    $this->hydrate($data);
  }

  public function hydrate(array $data)
  {
    foreach ($data as $key => $value) {
      $method = 'set' . ucfirst($key);
      if (method_exists($this,$method)) {
        $this->$method($value);
      }
    }
  }

  public function setName(string $name = "catlost"):self {
    if (strlen($name) < 15 ) {
      $this->name = $name;
    }
    return $this;
  }

  public function getName() {
    return $this->name;
  }

  public function setAge(int $age = 0):self {
    if ($age >= 0 && $age <= 30) {
      $this->age = $age;
    }
    return $this;
  }

  public function getAge() {
    return $this->age;
  }

  public function setSexe(string $sexe = "male"):self {
    $array_sexe = self::SEXE;
    if (in_array($sexe,$array_sexe)) {
      $this->sexe = $sexe;
    }
    return $this;
  }

  public function getSexe() {
    return $this->sexe;
  }

  public function setColor(string $Color = "noir"):self {
    $array_color = self::COLOR;
    if (in_array($Color,$array_color)) {
      $this->color = $Color;
    }
    return $this;
  }

  public function getColor() {
    return $this->color;
  }

}
