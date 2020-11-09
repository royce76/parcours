<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>les chats</title>
  </head>
  <body>
    <form action="" method="POST">
      <div class="form-group">
        <label for="name">Nom du chat</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="form-group">
        <label for="age">Age du chat</label>
        <input type="number" class="form-control" id="age" name="age">
      </div>
      <div class="form-group">
        <label for="sexe">Choix du sexe</label>
        <select class="form-control" id="sexe" name="sexe">
          <!-- <option selected>-Sexe-</option> -->
          <option value="male">male</option>
          <option value="femelle">femelle</option>
        </select>
      </div>
      <div class="form-group">
        <label for="color">Example select</label>
        <select class="form-control" id="color" name="color">
          <!-- <option selected>-Couleur-</option> -->
          <option value="noir">noir</option>
          <option value="blanc">blanc</option>
          <option value="gris">gris</option>
        </select>
      </div>
      <div class="form-group">
        <input type="submit" name="save_chat" value="Enregistrer">
      </div>
    </form>
    <?php foreach ($chats as $key => $chat) {
      echo "<p>{$chat->getName()}";
    } ?>
  </body>
</html>
