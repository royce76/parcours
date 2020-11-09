<?php
include 'view/template/nav.php';
include 'view/template/header.php';
?>

<section class="container">
  <div class="row">
    <h3 class="col-10 mx-auto my-4 text-center">Détails du livre</h3>
    <?php if ($error !== ""): ?>
      <div class="alert alert-danger col-10 mx-auto my-4 text-center" role="alert">
        <?=$error?>
      </div>
    <?php endif; ?>
    <?php if ($field !== ""): ?>
      <div class="alert alert-danger col-10 mx-auto my-4 text-center" role="alert">
        <?=$field?>
      </div>
    <?php endif; ?>
    <div class="card col-10 mx-auto my-4" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?=$book->getTitle()?></h5>
        <p class="card-text"><?=$book->getSummary()?></p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Auteur : <?=$book->getAuthor()?></li>
        <li class="list-group-item">Editeur : <?=$book->getPublisher()?></li>
        <li class="list-group-item">Sortie : <?=$book->getPublicationYear()?></li>
        <li class="list-group-item">Pages : <?=$book->getPagesNumber()?></li>
        <li class="list-group-item">Quantité : <?=$book->getQuantity()?></li>
        <li class="list-group-item">Type : <?=$book->getBookType()?></li>
        <li class="list-group-item">Genre : <?=$book->getBookNature()?></li>
        <li class="list-group-item">Identité : <?=$book->getIdentificationBook()?></li>
      </ul>
      <div class="card-body">
        <?php if ($book->getUserId() !== null): ?>
          <form action="" method="POST">
            <div class="form-group">
              <input type="submit" class="btn btn-primary" name="delete" value="Supprimer" disabled>
              <div class="">
                <ul>
                  <li><?="L'abonné : {$book->getUserLend()->getLastName()} {$book->getUserLend()->getFirstname()} a emprunté ce livre"?></li>
                  <li><?="Identifiant : {$book->getUserLend()->getidentificationUser()}"?></li>
                </ul>
              </div>
            </div>
          </form>
          <form action="" method="POST">
            <div class="form-group">
              <label for="userId">Statut :</label>
              <select class="form-control" id="userId" name="userId">
                <option value="">--Mettre à jour--</option>
                <option value=null>Rendu</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary mb-2" name="bookBack">Mettre à jour</button>
          </form>
        <?php else: ?>
          <div class="">
            <small><?="Aucun emprunt en cours"?></small>
          </div>
          <form action="" method="POST">
            <div class="form-group">
              <input type="submit" class="btn btn-primary" name="delete" value="Supprimer">
            </div>
          </form>
          <form action="" method="POST">
            <div class="form-group">
              <label for="identificationUser">Entrez l'identifiant de l'emprunteur :(9 chiffres)</label>
              <input type="text" class="form-control" id="identificationUser " placeholder="Identifiant abonné" name="identificationUser">
            </div>
            <button type="submit" class="btn btn-primary mb-2" name="bookLending">Valider l'emprunt</button>
          </form>
        <?php endif; ?>
        <a href="index.php" class="btn btn-primary">Retour</a>
      </div>
    </div>
  </div>
</section>

<?php
include 'view/template/footer.php';
 ?>
