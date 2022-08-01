<!doctype html>
<html>
<head>
    <title>Gestion clientes</title>
    <link href="<?= base_url('bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css')?>" rel="stylesheet">

    <?= $this->renderSection('news_boot_css') ?>

</head>

<body>


<header>
  <nav class="navbar navbar-expand navbar-blue bg-white">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="<?= base_url('/noticies')?>">Noticies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/noticies/create')?>">Crear</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="<?= base_url('/contacte')?>">Contacte</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="<?= base_url('/registrar')?>">Register</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="<?= base_url('/login')?>">Log in</a>
          </li>
          
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="<?= base_url('/gestionUsuarios')?>">CRUD</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>




    <?= $this->renderSection('contingut') ?>
    <!-- <div>
        &copy;2021. DAW Codeigniter4 demo.
    </div> -->
</body>
</html>