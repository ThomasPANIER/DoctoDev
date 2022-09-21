
<?php include "../view/template/header.php"; ?>

<div class="row justify-content-center">

  <div class="col-12 col-md-6 p-5">

    <h2 class="text-center">Modifier un patient</h2>

    <?php if($patient): ?>

    <?php if(isset($_POST["updatePatient"])): ?>
      <div class="mt-3 text-center">
        <p class="form-control my3 bg-success">Modification effectuée avec succès</p>
        <a class="btn btn-dark col-5 p-1 " href="../controller/profil-patient.php?id=<?php echo $patient->getId() ; ?>">Retour au profil du patient</a>
      </div>
    <?php endif; ?>

    <form class="mt-5" action="../controller/update-patient.php" method="POST">
      <div class="mt-3 hidden">
        <label class="form-label" >id</label>
        <input class='form-control my-3 p-3' name='id' id='$id' type='text' value=<?php echo $patient->getId() ; ?> >
      </div>
      <div class="mt-3">
        <label class="form-label">Prénom</label>
        <input class='form-control my-3 p-3' name='firstname' id='$firstname' type='text' value=<?php echo $patient->getFirstname() ; ?> required>
        <?php if(isset($error1)) : ?>
          <aside class="text-danger"><?php echo $error1; ?></aside>
        <?php endif; ?>
      </div>
      <div class="mt-3">
        <label class="form-label">Nom</label>
        <input class='form-control my-3 p-3' name='lastname' id='$lastname' type='text' value=<?php echo $patient->getLastname() ; ?> required>
        <?php if(isset($error2)) : ?>
          <aside class="text-danger"><?php echo $error2; ?></aside>
        <?php endif; ?>
      </div>
      <div class="mt-3">
        <label class="form-label">Date de naissance</label>
        <input class='form-control my-3 p-3' name='birthdate' id='$birthdate' type='date' value=<?php echo $patient->getBirthdate() ; ?> required>
        <?php if(isset($error3)) : ?>
          <aside class="text-danger"><?php echo $error3; ?></aside>
        <?php endif; ?>
      </div>
      <div class="mt-3">
        <label class="form-label">Téléphone</label>
        <input class='form-control my-3 p-3' name='phone' id='$phone' type='tel' value=<?php echo $patient->getPhone() ; ?> required>
        <?php if(isset($error4)) : ?>
          <aside class="text-danger"><?php echo $error4; ?></aside>
        <?php endif; ?>
      </div>
      <div class="mt-3">
        <label class="form-label">Adresse email</label>
        <input class='form-control my-3 p-3' name='mail' id='$mail' type='mail' value=<?php echo $patient->getMail() ; ?> required>
        <?php if(isset($error5)) : ?>
          <aside class="text-danger"><?php echo $error5; ?></aside>
        <?php endif; ?>
      </div>
      <input class="form-control btn btn-dark text-white my-2" name="updatePatient" type="submit" value="Enregistrer">
      <div class="mt-3 text-center">
        <a class="btn btn-primary col-5 p-1" href="../controller/profil-patient.php?id=<?php echo $patient->getId() ; ?>">Retour</a>
      </div>
    </form>

    <?php endif; ?>

  </div>

</div>

<?php include "../view/template/footer.php"; ?>
