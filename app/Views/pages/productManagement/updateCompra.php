<?= $this->extend('layouts/generalLayout') ?>

<?= $this->section('contingut') ?>

<?= service('validation')->listErrors(); ?>

    <?= csrf_field(); ?>




    <div style="color:red">
        <?= session()->getFlashdata('error'); ?>
    </div>
    <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-12 text-center">
                <div class="card">
                    <h5 class="text-center mb-4">Dades de la nova compra</h5>
                    <form class="form-card" action="/updateProducte/<?= esc($DNI) ?>" method="POST">

                        <div class="row justify-content-center text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Alvará<span class="text-danger"> *</span></label> <input readonly type="text" id="alvara_num" name="alvara_num" value="<?= esc($alvara_num) ?>"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Producte<span class="text-danger"> *</span></label> <input type="text" id="product" name="product" placeholder="Nom del producte"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Codi de referencia<span class="text-danger"> *</span></label> <input type="text" id="ref_code" name="ref_code" placeholder="Codi de referencia del producte"> </div>
                        </div>
                        
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Descripcio del producte<span class="text-danger"> *</span></label> <textarea type="text" id="desc" name="desc" placeholder="Petita descripció del producte"></textarea> </div>
                        </div>
                        <div class="row justify-content-center text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Preu del producte<span class="text-danger"> *</span></label> <input type="number" step="0.01" id="price" name="price" min="1"></div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nom del metge<span class="text-danger"> *</span></label> <input type="text" id="doc_name" name="doc_name" placeholder="Nom del metge"></div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Seguro<span class="text-danger"> *</span></label> <input type="text" id="seguro" name="seguro" placeholder="Numero del seguro"></div>
                        </div>

                        <div class="row justify-content-center text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Numero factura<span class="text-danger"> *</span></label> <input type="text" id="num_factura" name="num_factura" placeholder="Numero de factura"> </div>
                        </div>

                        </br>
                        <div class="row justify-content-center">
                            <div class="form-group col-sm-6"> <input type="submit" class="btn btn-primary" value="Afegir producte"> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?= $this->endSection() ?>