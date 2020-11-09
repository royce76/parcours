<?php
/**
 *
 */
class NissanSkyline
{
  //Constante
  const DOOR = [3,5];
  const COLOR =
    [
      "789654123" => "blue",
      "123456789" => "black",
      "147852369" => "red"
    ];

  //attributs
  protected int $door;
  protected string $color;
  protected static float $price;

  public function __construct(array $data, float $price)
  {
    self::setPrice($price);
    $this->hydrate($data);
  }

  //on hydrate nos skyline sans le prix hein!!!
  public function hydrate(array $data)
  {
    foreach ($data as $key => $value) {
      $method = 'set' . ucfirst($key);
      if (method_exists($this,$method)) {
        $this->$method($value);
      }
    }
  }

  //select color
  public function setColor(string $color):self
  {
    $array_color = self::COLOR;
    if (array_search($color, $array_color)) {
      $this->color = array_search($color, $array_color);
    }
    return $this;
  }

  public function getColor()
  {
    return $this->color;
  }

  //select doors number
  public function setDoor(int $door):self
  {
    $array_door = self::DOOR;
    if (in_array($door, $array_door,TRUE)) {
      $this->door = $door;
    }
    return $this;
  }

  public function getDoor()
  {
    return $this->door;
  }

  //slect a price for all cars
  public static function setPrice($price)
  {
    return self::$price = $price;
  }

  public static function getPrice()
  {
    return self::$price;
  }

  //afficher skyline
  public function showCar($key)
  {
    return "<p>Your skyline n°{$key}, {$this->getDoor()} doors, code color : {$this->getColor()}, cost " . self::getPrice() .' euro.</p>';
  }
}
