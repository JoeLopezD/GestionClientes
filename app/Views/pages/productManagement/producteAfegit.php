<?= $this->extend('layouts/generalLayout') ?>

<?= $this->section('contingut') ?>

<p>Producte afegit Correctament!</p>


<p><a href="/clientsDetall/<?= esc($DNI) ?>">Tornar a la pagina principal</a></p>


<?= $this->endSection() ?>