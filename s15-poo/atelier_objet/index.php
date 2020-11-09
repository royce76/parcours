<?php
require "model/entity/student.php";
require "model/studentModel.php";

// Instancie le modèle de Student
$studentModel = new StudentModel();

// Si le formulaire a été soumis
if(isset($_POST["new_student"])) {
  // Crée un nouvel étudiant avec les données du formulaire
  $student = new Student($_POST);
  // Enregistre l'étudiant en BDD
  $studentModel->addStudent($student);
}

$students = $studentModel->getStudents();

include "view/indexView.php";
