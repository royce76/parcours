<?php
class Otherbird {
  public string $type;
  public string $color;
  public int $age;
  public array $areas;

  public function __construct(array $datas) {
    $this->type = $datas["type"];
    $this->color = $datas["color"];
    $this->age = $datas["age"];
    $this->areas = $datas["areas"];
  }

  public function sing() {
    echo "<br>$this->type : Cui cui<br>";
  }

  public function fly(string $ville) :string {
    if ($this->age > 4) {
      return '<p>'.$this->type .' is flying to '.$ville.'.</p>';
    }
    else {
      return '<p>'.$this->type . ' sis too young to fly.</p>';
    }
  }
}
 ?>
