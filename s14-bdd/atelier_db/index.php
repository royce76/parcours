<?php
session_start();
if (!isset($_SESSION["user"]) || empty($_SESSION["user"])) {
  header("Location: login.php");
}
  //Connect to database
  try {
    $db = new PDO('mysql:host=localhost;dbname=banque_php', 'BanquePHP', 'banque76');
  } catch (\Exception $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
  }

$result = FALSE;
// if the new account form has been submited
if (!empty($_POST) && isset($_POST["new_account"])) {
  $query = $db->prepare(
    "INSERT INTO Account(amount,opening_date,account_type,user_id)
    VALUES(:amount, NOW(), :account_type, 1)"
  );
  //On peut la stocker dans une varibale result et result sock vraiou faux et
  //on passe grace a ca un message d'erreur
  $result = $query->execute([
    "amount" => $_POST["amount"],
    "account_type" => $_POST["account_type"]
  ]);
}
  $message = ($result) ? "message envoyé" : "" ;
  // send the query to mysql
  $query = $db->query("SELECT * FROM Account");
  //Extract data from the query as associative array.
  $accounts = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<h1>Ma première base de données</h1>
<a href="login.php">login</a>
<form action="" method="post">
  <div>
    <p>Montant :</p>
    <input type="number" name="amount">
  </div>
  <div>
    <p>Type de compte :</p>
    <select name="account_type">
      <option value="Compte courant">Compte courant</option>
      <option value="Livret A">Livret A</option>
    </select>
  </div>
  <div>
    <br> <input type="submit" name="new_account" value="Envoyer">
  </div>
</form>

<h2>Les comptes</h2>
<?php
  if (isset($message)):
  echo $message;
  endif;
?>
<?php
  foreach ($accounts as $key => $account) {
    echo "<p>" . $account['account_type'] . " : " . $account["amount"] ."</p>";
  }
?>
