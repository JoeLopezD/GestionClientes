<?= $this->extend('layouts/generalLayout') ?>

<?= $this->section('contingut') ?>

<?= session()->getFlashdata('error'); ?>
<?= service('validation')->listErrors(); ?>

    <?= csrf_field(); ?>

                    
<p><a href="/clientsDetall/<?=esc($DNI) ?>" class="btn btn-primary bi bi-arrow-90deg-left"> Retrocedir</a></p>


    <h2>Numero Alvará: <?= esc($Alvara) ?></h2>


<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col"><h4>Nom del producte</h4></th>
            <th scope="col"><h4>Codi de referencia</h4></th>
            <th scope="col"><h4>Detalls</h4></th>
            <th scope="col"><h4>Nom del Metge</h4></th>
            <th scope="col"><h4>Seguro</h4></th>
            <th scope="col"><h4>Numero de factura</h4></th>
            <th scope="col"><h4>Preu</h4></th>
            <th scope="col"><h4>Total</h4></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($productes as $productes_item) : ?>
            <tr>
                <td>
                    <p><?= esc($productes_item['product_name']) ?></p>
                </td>
                <td>
                    <?= esc($productes_item['ref_code']) ?>
                </td>
                <td>
                    <?= esc($productes_item['details']) ?>
                </td>
                <td>
                    <?= esc($productes_item['doc_name']) ?>
                </td>
                <td>
                    <?= esc($productes_item['seguro']) ?>
                </td>
                <td>
                    <?= esc($productes_item['num_factura']) ?>
                </td>
                <td>
                    <?= esc($productes_item['price']) ?>€
                </td>
                <td>
                <!-- <a href="/gestionUsuarios/delete/<?//= esc($users_item['id']) ?>" class="btn btn-danger">Delete</a> -->
                <!-- <a href="/productes/update/<?//= esc($clients['DNI']) ?>/<?//= esc($alvaranes_item['num_factura']) ?>" class="btn btn-primary bi bi-pen">Afegir</a>
                <a href="/productes/veure/<?//= esc($alvaranes_item['num_factura']) ?>" class="btn btn-primary bi bi-eye-fill">Veure</a> -->

                </td>
        </tr>
                
        <?php endforeach ?>
        <tr>
            <td>
            </td>
            <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        <?= esc($total) ?>€
        </td>
        </tr>
        
    </tbody>
</table>

<?= $this->endSection() ?>