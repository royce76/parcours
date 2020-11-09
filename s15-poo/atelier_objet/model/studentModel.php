<?php

class StudentModel {
  private $db;

  public function __construct() {
    $this->db = new PDO('mysql:host=localhost;dbname=test', 'root', 'ThomAdmin12');
  }

  public function getStudents():array {
    $query = $this->db->query("SELECT * FROM student");
    $students = $query->fetchAll(PDO::FETCH_ASSOC);
    // Parcours le tableau et transforme chaque tableau associatif en objet
    foreach ($students as $key => $value) {
      $students[$key] = new Student($value);
    }
    return $students;
  }

  public function addStudent(Student $student):bool {
    $query = $this->db->prepare(
      "INSERT INTO student(firstname, age)
      VALUES(:firstname, :age)"
    );
    $result = $query->execute([
      "firstname" => $student->getFirstname(),
      "age" => $student->getAge()
    ]);
    return $result;
  }
}
