<?php include "../view/template/header.php"; ?>

<div class="row justify-content-center">

  <div class="col-12 col-md-6 p-5">

    <h2 class="text-center">Enregistrer un nouveau rendez-vous</h2>

    <form class="mt-5" action="../controller/ajout-rendezvous.php" method="POST">
      <div class="mt-3">
        <label class="form-label">Date du rendez-vous</label>
        <?php echo inputDateTime('dateHour');  ?>
        <?php if(isset($error)) : ?>
          <aside class="text-danger"><?php echo $error; ?></aside>
        <?php endif; ?>
      </div>
      <div class="mt-3">
        <label class="form-label">Nom du patient</label>
          <select class='form-control my-3 p-3' name="idPatients" id="$idPatients" required>
            <?php if($patients): ?>
            <?php foreach($patients as $index => $patient) : ?>
            <option value="<?php echo $patient->getLastname() ; ?>"><?php echo $patient->getLastname() . " " . $patient->getFirstname() ; ?></option>
            <?php endforeach; ?>
            <?php else : ?>
            <option value="" disabled><?php echo "Aucun patient n'est enregistré"; ?></option>
          </select>
      </div>
      <div class="alert alert-secondary mt-3 text-center" role="alert">
        <p><?php echo "Aucun patient n'est enregistré"; ?><br>Pourquoi ne pas retourner a l'accueil</p>
        <a class="btn btn-dark text-white" href="../controller/index.php">Accueil</a>
        <p class="mt-4">Ajouter un nouveau patient</p>
        <a class="btn btn-success text-white" href="../controller/ajout-patient.php">Ajouter un patient</a>
      </div>
      <?php endif; ?>
      <input class="form-control btn btn-dark text-white my-2" name="addRendezvous" type="submit" value="Enregistrer">
    </form>
    <div class="mt-3">
      <a class="btn btn-primary col-5 p-1" href="../controller/liste-rendezvous.php">Retour</a>
    </div>

  </div>

</div>

<?php include "../view/template/footer.php"; ?>
