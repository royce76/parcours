<?php
class Personnage {
  protected string $nom;
  protected string $prenom;
  protected string $adress;

  public function setNom(string $nom) {
    $this->nom = $nom;
  }
  public function setPrenom(string $prenom) {
    $this->prenom = $prenom;
  }
  public function setAdress( string $adress) {
    $this->adress = $adress;
  }

  public function getNom() {
    return $this->nom;
  }
  public function getPrenom() {
    return $this->prenom;
  }
  public function getAdress() {
    return $this->adress;
  }
  public function getCoord() {
    return $this->nom .' '. $this->prenom . " vit à "  . $this->adress;
  }

  public function hydrate(array $data) {
    foreach ($data as $key => $value) {
      $method = 'set'.ucfirst($key);
      if (method_exists($this,$method)) {
        $this->$method($value);
      }
    }
  }

  public function __construct(array $data) {
    $this->hydrate($data);
  }
}
