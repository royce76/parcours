<?php

  // class City {
  //   protected string $nom;
  //   protected int $departement;
  //
  //   function __construct(array $data) {
  //       $this->set_nom($data["nom"]);
  //       $this->set_departement($data["département"]);
  //   }
  //
  //   public function set_nom(string $nom) {
  //     $this->nom = $nom;
  //   }
  //
  //   public function set_departement(int $departement) {
  //     $this->departement = $departement;
  //   }
  //
  //   public function get_nom() {
  //     return $this->nom;
  //   }
  //
  //   public function get_departement() {
  //     return $this->departement;
  //   }
  //
  //   public function show_location() {
  //     return 'la ville de ' . $this->get_nom() . ' est dans le departement n° ' . $this->get_departement();
  //   }
  //
  // }

//hydratation

class City {
  protected string $nom;
  protected int $departement;

  function __construct(array $data) {
      $this->hydrate($data);
  }

  //on hydrate et on evoie ainsi au construct les données du tableau.
  //attention vaut mieux que les cléfs porte le même nom que les après préfix des setteurs.
  public function hydrate(array $data) {
    foreach ($data as $key => $value) {
      $method = 'set'.ucfirst($key);
      if (method_exists($this, $method)) {
        $this->$method($value);
      }
    }
  }

  public function setNom(string $nom) {
    $this->nom = $nom;
  }

  public function setDepartement(int $departement) {
    $this->departement = $departement;
  }

  public function getNom() {
    return $this->nom;
  }

  public function getDepartement() {
    return $this->departement;
  }

  public function showLocation() {
    return 'la ville de ' . $this->get_nom() . ' est dans le departement n° ' . $this->get_departement();
  }

}
