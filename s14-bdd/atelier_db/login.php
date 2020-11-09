<?php
try {
  $db = new PDO('mysql:host=localhost;dbname=banque_php', 'BanquePHP', 'banque76');
} catch (\Exception $e) {
  print "Erreur !: " . $e->getMessage() . "<br/>";
  die();
}
//filter email pour nettoyer les email
if (!empty($_POST) && isset($_POST['login'])) {

  $query = $db->prepare(
    "SELECT * FROM User
    WHERE email = :email"
  );
  $query->execute([
    "email" => $_POST["email"]
  ]);
  $user = $query->fetch(PDO::FETCH_ASSOC);
  //if a user has been found
  if($user) {
    //if password match
    if (password_verify($_POST["password"], $user["password"])) {
      session_start();
      $_SESSION["user"] = $user;
      header("Location: index.php");
    }
  }
}

?>

<h1>Vous connectez</h1>
<a href="index.php">acceuil</a>

<form class="" action="" method="post">
  <div class="">
    <input type="email" name="email">
  </div>
  <div class="">
    <input type="password" name="password">
  </div>
  <div class="">
    <input type="submit" name="login" value="Se connecter">
  </div>
</form>
