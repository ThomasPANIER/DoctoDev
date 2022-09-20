<?php include "../view/template/header.php"; ?>

<div class="row justify-content-center">

  <div class="col-12 col-md-6 p-5">

    <h2 class="text-center">Enregistrer un nouveau patient</h2>

    <form class="mt-5" action="../controller/ajout-patient.php" method="POST">
      <div class="mt-3">
        <label class="form-label">Nom</label>
        <?php echo inputText('lastname');  ?>
        <?php if(isset($error1)) : ?>
          <aside class="text-danger"><?php echo $error1; ?></aside>
        <?php endif; ?>
      </div>
      <div class="mt-3">
        <label class="form-label">Prénom</label>
        <?php echo inputText('firstname');  ?>
        <?php if(isset($error2)) : ?>
          <aside class="text-danger"><?php echo $error2; ?></aside>
        <?php endif; ?>
      </div>
      <div class="mt-3">
        <label class="form-label">Date de naissance</label>
        <?php echo inputDate('birthdate');  ?>
        <?php if(isset($error3)) : ?>
          <aside class="text-danger"><?php echo $error3; ?></aside>
        <?php endif; ?>
      </div>
      <div class="mt-3">
        <label class="form-label">Téléphone</label>
        <?php echo inputTel('phone');  ?>
        <?php if(isset($error4)) : ?>
          <aside class="text-danger"><?php echo $error4; ?></aside>
        <?php endif; ?>
      </div>
      <div class="mt-3">
        <label class="form-label">Adresse email</label>
        <?php echo inputEmail('mail');  ?>
        <?php if(isset($error5)) : ?>
          <aside class="text-danger"><?php echo $error5; ?></aside>
        <?php endif; ?>
      </div>
      <input class="form-control btn btn-dark text-white my-2" name="addPatient" type="submit" value="Enregistrer">
    </form>
    <div class="mt-3">
      <a class="btn btn-primary col-5 p-1" href="../controller/liste-patients.php">Retour</a>
    </div>

  </div>

</div>

<?php include "../view/template/footer.php"; ?>
