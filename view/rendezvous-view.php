<?php include "../view/template/header.php"; ?>

  <div class="row mb-5">

    <?php if($rendezvous): ?>

      <div class="col-12 col-md-6 col-lg-4 mt-5 m-auto">
        <div class="card h-100 text-center">
          <div class="card-header">
            Rendez-vous
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><?php echo "date : " . $rendezvous->getDateHour() ; ?></li>
              <li class="list-group-item"><?php echo "Nom du patient : " . $rdvPatient->getFirstname(). " " . $rdvPatient->getLastname() ; ?></li>
              <li class="list-group-item">
                <a class="alert alert-dark btn btn-dark mt-3" href="../controller/update-rendezvous.php?id=<?php echo $rendezvous->getId() ;?>">Modifier le rendez-vous</a>
              </li>
            </ul>
          </div>
          <div class="card-footer">
            <form class="row justify-content-evenly" method="POST">
              <a class="btn btn-primary col-4 p-1" href="../controller/liste-rendezvous.php">Retour</a>
              <input class="btn btn-danger col-6 p-1" name="delete" type="submit" value="Supprimer le rendez-vous">
              <?php if(isset($_POST["delete"])): ?>
                <form method="POST" action="">
                  <input class="btn btn-danger col-5 p-1" name="confirm" type="submit" value="Confirmer suppression">
                </form>
              <?php endif; ?>
            </form>
          </div>
        </div>
      </div>

    <?php else : ?>
    <div class="alert alert-secondary text-center" role="alert">
      <?php echo $error; ?>
      <p>Pourquoi ne pas retourner a l'accueil</p>
      <a class="btn btn-dark text-white" href="../controller/index.php">Accueil</a>
    </div>
    <?php endif; ?>

  </div>

<?php include "../view/template/footer.php"; ?>
