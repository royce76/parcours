<?php
  if(isset($_GET["param"]) && !empty($_GET["param"])){
    $content = htmlspecialchars($_GET["param"]);
  }
  $site_title = "info";

  require_once "data/people.php";
  include "template/header.php";
 ?>
<a href="index.php">accueil</a>
<h2>A propos de nous</h2>
<?php
if(isset($content)) {
  echo "<p>.$content.</p>";
}
 ?>

 <h3>L'équipe</h3>
<?php
  foreach ($people as $key => $value) :
?>
    <p>Nom : <?php echo $value['name']; ?> ||  Poste : <?php echo $value['status']; ?> </p>
    <a href='single.php?name= <?php echo $value["name"]; ?>'>Voir</a>"
<?php
endforeach;
 ?>
<?php
  include "template/footer.php";
?>
