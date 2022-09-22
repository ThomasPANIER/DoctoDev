<?php include "../view/template/header.php"; ?>

  <h2 class="text-center">Liste des patients</h2>

  <div class="row ">

    <?php if($patients): ?>

    <?php foreach($patients as $index => $patient) : ?>
      <div class="col-12 col-md-6 col-lg-4 my-5">
        <div class="card h-100 text-center">
          <div class="card-header">
            Patient
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><?php echo "Prénom : " . $patient->getFirstname() ; ?></li>
              <li class="list-group-item"><?php echo "Nom : " . $patient->getLastname() ; ?></li>
            </ul>
          </div>
          <div class="card-footer">
            <div class="row justify-content-evenly">
              <a class="btn btn-primary col-3 p-1" href="../controller/profil-patient.php?id=<?php echo $patient->getId() ; ?>">Consulter</a>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

      <div class="alert alert-secondary text-center" role="alert">
        <p>Ajouter un nouveau patient</p>
        <a class="btn btn-success text-white" href="../controller/ajout-patient.php">Ajouter un patient</a>
      </div>

    <?php else : ?>
      <div class="alert alert-secondary text-center" role="alert">
        <?php echo $error; ?>
        <p>Pourquoi ne pas retourner a l'accueil</p>
        <a class="btn btn-dark text-white" href="../controller/index.php">Accueil</a>
        <p class="mt-4">Ajouter un nouveau patient</p>
        <a class="btn btn-success text-white" href="../controller/ajout-patient.php">Ajouter un patient</a>
      </div>
    <?php endif; ?>

  </div>


<?php include "../view/template/footer.php"; ?>
