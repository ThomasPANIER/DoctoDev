<?php include "../view/template/header.php"; ?>

<h2 class="text-center">Liste des prochains rendez-vous</h2>

<div class="row ">

  <?php if($rendezvous): ?>

    <?php foreach($rendezvous as $index => $rendezvous) : ?>
      <div class="col-12 col-md-6 col-lg-4 my-5">
        <div class="card h-100 text-center">
          <div class="card-header">
            Rendez-vous
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><?php echo "Date : " . $rendezvous->getDateHour() ; ?></li>
            </ul>
          </div>
          <div class="card-footer">
            <div class="row justify-content-evenly">
              <a class="btn btn-primary col-6 p-1" href="../controller/rendezvous.php?id=<?php echo $rendezvous->getId() ; ?>">Voir les détails</a>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

  <?php else : ?>
    <div class="alert alert-secondary text-center" role="alert">
      <?php echo $error; ?>
      <p class="mt-4">Ajouter un nouveau rendez-vous</p>
      <a class="btn btn-success text-white" href="../controller/ajout-rendezvous.php">Ajouter un rendez-vous</a>
    </div>
  <?php endif; ?>

</div>

<?php include "../view/template/footer.php"; ?>
