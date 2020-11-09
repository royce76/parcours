<?php
  $site_title = "Single";
  require_once "template/header.php";
 ?>

<h2>Vous avez cliqué sur...</h2>

<?php
  if(isset($_GET["name"]) && !empty($_GET["name"])) {
    echo htmlspecialchars($_GET["name"]);
    echo "<br><a href= index.php>retour index</a>";
  }
 ?>

<a href="info.php?param=Du texte transmis par url"><br>page info.php</a>
<?php
  include "template/footer.php";
?>
