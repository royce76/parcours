<?php

  class City {
    protected $nom;
    protected $departement;

    public function set_nom(string $nom):City {
      $this->nom = $nom;
      return $this;
    }

    public function set_dept(int $departement):City {
      $this->departement = $departement;
      return $this;
    }

    public function get_nom() {
      return $this->nom;
    }

    public function get_dept() {
      return $this->departement;
    }

    public function show_location() {
      return 'la ville de ' . $this->get_nom() . ' est dans le departement n° ' . $this->get_dept();
    }
  }
