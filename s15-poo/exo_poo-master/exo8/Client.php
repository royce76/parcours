<?php

/**
 *
 */
class Client extends Personne
{

  protected string $adress;

  public function __construct(string $lastname, string $firstname, string $adress) {
    $this->setAdress($adress);

    parent::__construct($lastname,$firstname);
  }

  public function setAdress(string $adress):self {
    $this->adress = $adress;
    return $this;
  }

  public function getAdress() {
    return $this->adress;
  }

  public function getCoord():string {
    return $this->getLastname() . ' ' . $this->getFirstname() . ' habite au ' . $this->getAdress();
  }
}
