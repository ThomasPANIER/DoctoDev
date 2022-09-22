<?php include "../view/template/header.php"; ?>

<div class="row justify-content-center">

  <div class="col-12 col-md-6 p-5">

    <h2 class="text-center <?php if(isset($_POST["updateRendezvous"])): ?>hidden<?php endif; ?>">Modifier un rendez-vous</h2>

    <?php if($rendezvous): ?>

      <?php if(isset($_POST["updateRendezvous"])): ?>
        <div class="mt-3 text-center">
          <p class="form-control my3 bg-success">Modifications effectuées avec succès</p>
          <a class="btn btn-dark col-5 p-1 " href="../controller/rendezvous.php?id=<?php echo $rendezvous->getId() ; ?>">Retour sur les détails du rendez-vous</a>
        </div>
      <?php endif; ?>

      <form class="<?php if(isset($_POST["updateRendezvous"])): ?>hidden<?php endif; ?>" action="../controller/update-rendezvous.php" method="POST">
        <div class="mt-3 hidden">
          <label class="form-label" >id</label>
          <input class='form-control my-3 p-3' name='id' id='$id' type='text' value=<?php echo $rendezvous->getId() ; ?> >
        </div>
        <div class="mt-3">
          <label class="form-label">Date du rendez-vous</label>
          <input class='form-control my-3 p-3' name='dateHour' id='$dateHour' type='datetime-local' value="<?php echo $rendezvous->getDateHour() ; ?>" required>
          <?php if(isset($error1)) : ?>
            <aside class="text-danger"><?php echo $error1; ?></aside>
          <?php endif; ?>
        </div>
        <div class="mt-3">
          <label class="form-label">Nom du patient</label>
          <select class='form-control my-3 p-3' name="idPatients" id="$idPatients" required>
            <?php if($rdvPatient): ?>
              <option selected value="<?php echo $rdvPatient->getLastname() ; ?>"><?php echo $rdvPatient->getLastname() . " " . $rdvPatient->getFirstname() ; ?></option>
            <?php endif; ?>
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

        <input class="form-control btn btn-dark text-white my-2" name="updateRendezvous" type="submit" value="Enregistrer">
        <div class="mt-3 text-center">
          <a class="btn btn-primary col-5 p-1" href="../controller/rendezvous.php?id=<?php echo $rendezvous->getId() ; ?>">Retour</a>
        </div>
      </form>

    <?php endif; ?>

  </div>

</div>

<?php include "../view/template/footer.php"; ?>
