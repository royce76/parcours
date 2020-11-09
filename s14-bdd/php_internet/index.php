<?php
  $content = "rien a affiche";
  if(!empty($_POST["content"]) && isset($_POST["content"])) {
    $content = htmlspecialchars($_POST["content"]);
  }
  $site_title = "Accueil";
  require_once "template/header.php";
 ?>

<h2>Bienvenue sur mon site</h2>
<section>
  <h3>Remplissez le formulaire</h3>
  <div class="">
    <form action="" method="post">
      <label for="content">Votre contenue :</label>
      <input id="content" type="text" name="content">
      <div>
        <input type="submit" name="my_form" value="Envoyer">
      </div>
    </form>
  </div>
  <div>
    <h4>Vous avez écrit : </h4>
    <?php
      echo $content;
     ?>
  </div>
</section>
<a href="info.php?param=Du texte transmis par url">page info.php</a>
<?php
  include "template/footer.php";
?>
