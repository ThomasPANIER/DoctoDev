<?php include "../view/template/header.php"; ?>

<h2 class="text-center">Rechercher un patient</h2>

<form class="mt-5" role="search" action = "../controller/searchForm.php" method = "POST">
  <div class="mt-3">
    <label class="form-label">Recherche</label>
    <input class="form-control  my-3 p-3" name='terme' type="search" aria-label="Search" placeholder="Rechercher">
    <?php if(isset($error)) : ?>
      <aside class="text-danger"><?php echo $error; ?></aside>
    <?php endif; ?>
  </div>
  <input class="form-control btn btn-dark text-white my-2" type="submit" name="search" value="Rechercher">
</form>

<?php if($patients): ?>

<div class="row">
  <?php foreach($patients as $index => $patient) : ?>
    <div class="col-6 col-md-4 col-lg-3 my-5">
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
            <a class="btn btn-primary col-6 p-1" href="../controller/profil-patient.php?id=<?php echo $patient->getId() ; ?>">Consulter</a>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<?php elseif (isset($_POST['search'])): ?>
    <div class="alert alert-secondary text-center" role="alert">
      <?php echo "Le patient n'existe pas essayez une nouvelle recherche";?>
      <p class="mt-4">Ajouter un nouveau patient</p>
      <a class="btn btn-success text-white" href="../controller/ajout-patient.php">Ajouter un patient</a>
    </div>

<?php endif; ?>

<?php include "../view/template/footer.php"; ?>


