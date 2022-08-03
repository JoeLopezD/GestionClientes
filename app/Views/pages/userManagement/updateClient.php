<?= $this->extend('layouts/generalLayout') ?>

<?= $this->section('contingut') ?>

<?= session()->getFlashdata('error'); ?>
<?= service('validation')->listErrors(); ?>

    <?= csrf_field(); ?>
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-12 text-center">
                <div class="card">
                    <h5 class="text-center mb-4">Dades del client</h5>
                    <form class="form-card" action="/clients/update" method="POST">

                        <div class="row justify-content-center text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">DNI<span class="text-danger"> *</span></label> <input type="text" id="dni" name="dni" value="<?= esc($clients['DNI']) ?>" placeholder="DNI del client"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nom<span class="text-danger"> *</span></label> <input type="text" id="name" name="name" value="<?= esc($clients['name']) ?>" placeholder="Nom del client"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Cognom<span class="text-danger"> *</span></label> <input type="text" id="surname" name="surname" value="<?= esc($clients['surname']) ?>" placeholder="Cognom del client"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Numero de telefon<span class="text-danger"> *</span></label> <input type="text" id="phone" name="phone" value="<?= esc($clients['phone']) ?>" placeholder="Numero de telefon del client"></div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Correu electronic<span class="text-danger"> *</span></label> <input type="mail" id="email" name="email" value="<?= esc($clients['email']) ?>" placeholder="Correu electronic del client"></div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Adreça<span class="text-danger"> *</span></label> <input type="text" id="address" name="address" value="<?= esc($clients['address']) ?>" placeholder="Adreça del client"> </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Població<span class="text-danger"> *</span></label> <input type="text" id="population" name="population" value="<?= esc($clients['population']) ?>" placeholder="Població del client. Per exemple: Lleida"></div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Localitat<span class="text-danger"> *</span></label> <input type="text" id="location" name="location" value="<?= esc($clients['location']) ?>" placeholder="Localitat del client. Per exemple: Alcarrás"></div>
                        </div>

                        <div class="row justify-content-center text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Data de naixement<span class="text-danger"> *</span></label><input type="text" id="birth" name="birth" value="<?= esc($clients['birth_date']) ?>" placeholder="Data de naixement del client."></div>  
                            <!-- <input type="date" data-date-format="YYYY MMMM DD" id="birth" name="birth" value="<?//= esc($clients['birth_date']) ?>"> </div> -->
                        </div>

                        </br>
                        <div class="row justify-content-center">
                            <div class="form-group col-sm-6"> <input type="submit" class="btn btn-primary" value="Actualitzar les dades del client"> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- </div> -->

<p><a href="/" class="btn btn-primary">Tornar a la pagina principal</a></p>

<?= $this->endSection() ?>