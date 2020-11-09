<?php
  class Student {
    protected string $name;
    protected int $age;

    public function setName($name) {
      if (!is_string($name)) {
        throw new Exception("holalalalala string\n");
      }
      if(strlen($name) < 2){
        throw new Exception("holalalalala 2 caractère\n");
      }
      $this->name = $name;
    }

    public function setAge($age) {
      if (!is_int($age)) {
        throw new Exception("holalalalala int\n");
      }
      if($age < 16 || $age >70) {
        throw new Exception("too young or too old\n");
      }
      $this->age = $age;
    }
  }



 ?>
