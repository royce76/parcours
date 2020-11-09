<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Atelier objet</title>
  </head>
  <body>
    <h1>Application de gestion des étudiants</h1>
    <h2>Liste des étudiants</h2>
    <ul>
      <?php
        foreach($students as $student) {
          echo "<li>" . $student->getId() . " : " . $student->getFirstname() ."</li>";
        }
      ?>
    </ul>
    <h3>Enregistrer un étudiant</h3>
    <form action="" method="post">
      <div class="">
        <input type="text" name="firstname" value="">
      </div>
      <div class="">
        <input type="number" name="age" value="">
      </div>
      <div class="">
        <input type="submit" name="new_student" value="Enregistrer">
      </div>
    </form>
  </body>
</html>
