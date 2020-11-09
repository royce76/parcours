<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <main>
    <h1>recoucou</h1>
    <?php
    echo "coucou";

    // $title = "<h2>coucou, php c'est nul.</h2>";
    // echo $title;
    //
    // $user_name = "Bryan Cornner";
    //
    // if($user_name) {
    //   echo "Bonjour : $user_name.";
    // }

    ?>
    <h3>Nos utilisateurs</h3>

    <?php
    echo "coucou";
    // $users = [
    //   [
    //     "pseudo" => "boubou59",
    //     "age" => 45,
    //     "mdp" => "Admin"
    //   ],
    //   [
    //     "pseudo" => "boubou76",
    //     "age" => 452,
    //     "mdp" => "coucou"
    //   ],
    //   [
    //     "pseudo" => "boubou94",
    //     "age" => 445,
    //     "mdp" => "test"
    //   ]
    // ];
    // foreach ($users as $user) {
    //   // var_dump($user);
    //   foreach ($user as $key => $value) {
    //     echo "<p>$key : $value</p>";
    //   }
    //   echo "<br>";
    // }
    // for ($i=0; $i < sizeof($users); $i++) {
    //   echo "<p>$users[$i]</p>";
    // }
    ?>

    <h3>Exemple de fonction</h3>

    <?php
    echo "coucou";

    // $grades = [15,12,8,18];
    // $ages = [5,2,3,8];
    // function show_first(Array $element = [6]):int {
    //   return $element[0];
    // }
    // echo show_first($grades);

    ?>
    <div>
      <h2>exo seri une intermédiaire</h2>
      <h2>exercice1 chaussure</h2>
      <?php

      $chaussure_prix = 70;
      $jean_prix = 59;
      $tshirt_prix = 20;
      $reduction_prix = 20;
      $total = $chaussure_prix + $jean_prix + $tshirt_prix;
      echo "$total prix sans réduction<br>";
      $prix_total_reduit = $total - $total*$reduction_prix/100;
      echo "$prix_total_reduit prix avec promotion de 20%";
      ?>
      <h2>excercice 2 multpile de 3</h2>
      <?php
      for ($i=0; $i <101 ; $i++) {
        if($i%2 !== 0 AND $i%3 === 0) {
          echo "$i<br>";
        }
      }
      ?>
      <h2>EXO 3 le profil</h2>
      <?php

      $user = [
        "lastname" => "Doe",
        "firstname" => "John",
        "nickname" => "",
        "age" => "42",
        "hobby" => "",
        "sport" => ""
      ];

      foreach ($user as $key => $value) {
        if($value === "") {
          $user[$key]= "No information provided.";
        }
      }
      var_dump($user);

      ?>
      <h2>exo 4 nettoyage</h2>
      <?php
      $texte = "B0nj0ur les n0uveau, démarr0ns la pr0grammati0n";
      print_r(str_replace("0","o",$texte));
      ?>
      <h2>exo 5 déclarer son texte </h2>
      <?php
      $texte = "coucou";
      $nombre_tiret = 10;
      $sentence = "j'attends des tirets";
      function add_dash(string $text, int $dash ) : string {
        $result = "";
        for ($i=0; $i < $dash ; $i++) {
          $result = $result."*"."-";
        }
        return $result.$text;
      }
      echo add_dash($texte,$nombre_tiret);
      ?>
    </div>
    <div class="exo serie deux">
      <h2>exo serie deux</h2>
      <h3>exo 1</h3>
      <?php
      $numbers = [4, 15, 2, 145, 42, 5, 78, 12];

      ?>
    </div>
  </main>


  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

</body>

</html>
