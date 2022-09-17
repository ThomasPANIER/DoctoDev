<?php include "view/template/header.php"; ?>

  <div class="row mb-5">

    <?php if($showPatient): ?>

    <div class="col-12 col-md-6 col-lg-4 my-5 m-auto">
      <div class="card h-100">
        <div class="card-header">
          Patient
        </div>
        <div class="card-body">
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><?php echo "Prénom : " . $showPatient->getFirstname() ; ?></li>
            <li class="list-group-item"><?php echo "Nom : " . $showPatient->getLastname() ; ?></li>
            <li class="list-group-item"><?php echo "Date d'anniversaire : " . $showPatient->getBirthdate() ; ?></li>
            <li class="list-group-item"><?php echo "Téléphone : " . $showPatient->getPhone() ; ?></li>
            <li class="list-group-item"><?php echo "Email : " . $showPatient->getMail() ; ?></li>
          </ul>
        </div>
      </div>
      <div class="card-footer">
          <form class="row justify-content-around" method="POST">
            <a class="btn btn-primary col-5 p-1 mb-3" href="liste-patients.php">Retour</a>
            <input class="btn btn-primary col-5 p-1 mb-3" name="delete" type="submit" value="Supprimer le patient">
            <?php if(isset($_POST["delete"])): ?>
              <form method="POST" action="">
                <input class="btn btn-danger col-5 p-1 mb-3" name="confirm" type="submit" value="Confirmer suppression">
              </form>
            <?php endif; ?>
          </form>
      </div>
    </div>

    <?php else : ?>
    <div class="alert alert-secondary text-center" role="alert">
      <?php echo $error; ?>
      <p>Pourquoi ne pas retourner a l'accueil</p>
      <a class="btn btn-dark text-white" href="index.php">Accueil</a>
    </div>
    <?php endif; ?>

  </div>

<?php include "view/template/footer.php"; ?>
