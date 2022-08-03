<?= $this->extend('layouts/generalLayout') ?>

<?= $this->section('contingut') ?>

<?= session()->getFlashdata('error'); ?>
<?= service('validation')->listErrors(); ?>

    <?= csrf_field(); ?>


    <h2>DNI: <?= esc($clients['DNI']) ?></h2>
    <p><b>Nom:</b> <?= esc($clients['name']) ?> <?= esc($clients['surname']) ?></p>
    <p><b>Tlfn.:</b> <?= esc($clients['phone']) ?> <b> Email:</b> <?= esc($clients['email']) ?></p>
    <p><b>Població:</b> <?= esc($clients['location']) ?>,<?= esc($clients['population']) ?></p>
    <p><b>Adreça:</b> <?= esc($clients['address']) ?></p>
    <p><b>Data de naixement: </b><?= esc($clients['birth_date']) ?></p>
    <p><b>Client registrat en la data de:</b> <?= esc($clients['created_at']) ?></p>

    

<p><a href="/" class="btn btn-primary">Tornar a la pagina principal</a></p>


<?= $this->endSection() ?>