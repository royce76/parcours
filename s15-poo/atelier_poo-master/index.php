<?php
require "student.php";

// instanciation de l'objet student
$student = new Student("Billy", 19);
$student2 = new Student("Marie", 22);
$student3 = new Student();

// ajouter des attributs/propriétées
// $student->firstname = "Billy";
// $student->age = 19;
//
// $student2->firstname = "Marie";
// $student2->age = 22;

$student->setId("azerty123");

var_dump($student);
echo "<br>";
// var_dump($student2);
// echo "<br>";
// var_dump($student3);
// echo "<br>";
echo "<p>$student->firstname : " .$student->getId(). "</p>";

echo "<p>Base code : ".Student::$base ."</p>";
Student::setBase("9");
echo "<p>Base code : ".Student::$base ."</p>";
echo "<p>" . Student:: $number_static . "</p>";
echo "<p>Valeur max " . Student:: MAX . "</p>";
?>
