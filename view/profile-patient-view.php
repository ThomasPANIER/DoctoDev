<?php include "../view/template/header.php"; ?>

  <div class="row mb-5">

    <?php if($patient): ?>

      <div class="col-12 col-md-6 col-lg-4 mt-5 m-auto">
        <div class="card h-100 text-center">
          <div class="card-header">
            Patient
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><?php echo "Prénom : " . $patient->getFirstname() ; ?></li>
              <li class="list-group-item"><?php echo "Nom : " . $patient->getLastname() ; ?></li>
              <li class="list-group-item"><?php echo "Date d'anniversaire : " . $patient->getBirthdate() ; ?></li>
              <li class="list-group-item"><?php echo "Téléphone : " . $patient->getPhone() ; ?></li>
              <li class="list-group-item"><?php echo "Email : " . $patient->getMail() ; ?></li>
              <li class="list-group-item">
                <a class="alert alert-dark btn btn-dark mt-3" href="../controller/update-patient.php?id=<?php echo $patient->getId() ;?>">Modifier le profil du patient</a>
              </li>
            </ul>
          </div>
          <?php if($rendezvous): ?>
            <div class="row mb-3">
              <?php foreach($rendezvous as $index => $rendezvous) : ?>
              <div class="col-6">
                <div class="card h-100 text-center">
                  <div class="card-header">
                    Rendez-vous
                  </div>
                  <div class="card-body">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><?php echo "Date : " . $rendezvous->getDateHour() ; ?></li>
                    </ul>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
          <div class="card-footer">
            <form class="row justify-content-evenly" method="POST">
              <a class="btn btn-primary col-5 p-1" href="../controller/liste-patients.php">Retour</a>
              <input class="btn btn-danger col-5 p-1" name="delete" type="submit" value="Supprimer le patient">
              <?php if(isset($_POST["delete"])): ?>
                <form method="POST" action="">
                  <input class="btn btn-danger col-6 p-1" name="confirm" type="submit" value="Confirmer suppression">
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
