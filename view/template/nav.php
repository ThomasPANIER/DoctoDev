<nav class="navbar navbar-expand-lg bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="../asset/img/injection.png" alt="Logo" width="36" height="30" class="d-inline-block align-text-top">
      DoctoDev
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../controller/liste-patients.php">Liste des patients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../controller/liste-rendezvous.php">Liste des rendez-vous</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../controller/searchForm.php">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../controller/ajout-patient.php">Nouveau patient</a></li>
            <li><a class="dropdown-item" href="../controller/ajout-rendezvous.php">Nouveau rendez-vous</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../controller/ajout-patient-rendez-vous.php">Ajouter un nouveau patient et son rendez-vous</a></li>
          </ul>
        </li>

      </ul>
      <button class="d-flex btn btn-outline-dark">
        <a class="dropdown-item" href="../controller/searchForm.php">Rechercher un patient</a>
      </button>
    </div>
  </div>
</nav>
