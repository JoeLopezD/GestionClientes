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

    
    <p><a href="/productes/afegir/<?= esc($clients['DNI']) ?>" class="btn btn-primary">+</a></p>



    <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col"><h4>Num. Alvará</h4></th>
            <th scope="col"><h4>Data de compra</h4></th>
            <th scope="col"><h4>Funcions</h4></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($alvaranes as $alvaranes_item) : ?>
            <tr>
                <td>
                    <p><?= esc($alvaranes_item['num_factura']) ?></p>
                </td>
                <td>
                    <?= esc($alvaranes_item['created_at']) ?>
                </td>
                <td>
                <a href="/gestionUsuarios/delete/<?//= esc($users_item['id']) ?>" class="btn btn-danger">Delete</a>
                <!-- <a href="/gestionUsuarios/update/<?//= esc($users_item['id']) ?>" class="btn btn-primary">Update</a> -->
                </td>
                </tr>
        <?php endforeach ?>
    </tbody>
</table>


<?= $this->endSection() ?>