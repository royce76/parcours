<?php
require 'student.php';
require 'book.php';
?>
<?php
//exo1
$student = new Student();
// $student->name = "Timmy";
// $student->age = 35;
// var_dump($student);
//Une erreur
//propriété protected
// en dehors de la classe, on ne peut aps modifier les attributs.
//c'est un setter.
//on va pouvoir modifier l'attribut
//il lui manque un argument

// $student->setName("Timmy");

//non
//parce que le setter est public et lui appartient à la classe qui peut agir sur l'attribut
// Bien le développeur lambda extèrieur ne peux pas modifier mes attibuts sans passer par mon setter
// $student->setAge(18);
// var_dump($student);

//exo2
try {
  $student->setName("a");
} catch (\Exception $e) {
  echo 'Erreur: ' .$e->getMessage();
}

try {
  $student->setAge(1200);
} catch (\Exception $e) {
  echo 'Erreur: ' .$e->getMessage();
}

var_dump($student);
//non
//oui
//que les données soit cohérentes.
//dans le setter
// on peut lancer un if else

//exo3

// $book->setTitle("the rain");
// $book->setPages(246);
//il faudrait appelé a chaque fois les setters
// un constructeur
$data = [
  "title" => "The rain",
  "pages" => 246
];
$book = new Book($data);
$title= $book->getTitle();
$pages = $book->getPages();
echo "<br>" . $title . " has " . $pages . " pages";
//les valeurs des attributs
