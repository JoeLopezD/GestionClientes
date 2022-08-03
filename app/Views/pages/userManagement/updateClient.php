<?= $this->extend('layouts/generalLayout') ?>

<?= $this->section('contingut') ?>

<?= session()->getFlashdata('error'); ?>
<?= service('validation')->listErrors(); ?>

    <?= csrf_field(); ?>


<p>AAAAAAAAAAAAAA</p>
<h2>DNI: <?= esc($clients['DNI']) ?></h2>


<?= $this->endSection() ?>