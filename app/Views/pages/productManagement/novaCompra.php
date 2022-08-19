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
                    <form class="form-card" action="/nouproducte/<?= esc($clients['DNI']) ?>" method="POST">

                        <div class="row justify-content-center text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Alvará<span class="text-danger"> *</span></label> <input type="text" id="alvara_num" name="alvara_num" placeholder="Numero de alvara"> </div>
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





        <!-- <p>
            Per afegir un nou producte, apreta el botó de "+"
        </p>
        <button onClick="generarProducte()">
            +
        </button>
        <form  id="GFG_DOWN" class="form-card" action="/clients/create" method="POST">

        </form> -->
        <!-- <script>

            var down = document.getElementById("GFG_DOWN");

            function generarProducte() {
               
                // Create a form dynamically
                // var form = document.createElement("form");
                // form.setAttribute("method", "post");
                // form.setAttribute("action", "submit.php");
 
                // Create an input element for emailID
                var ID = document.createElement("input");
                ID.setAttribute("type", "text");
                ID.setAttribute("name", "emailID");
                ID.setAttribute("placeholder", "E-Mail ID");
 
                // Create an input element for password
                var PWD = document.createElement("input");
                PWD.setAttribute("type", "password");
                PWD.setAttribute("name", "password");
                PWD.setAttribute("placeholder", "Password");
 
                var saltoLinea = document.createElement("br");

                // // Create a submit button
                // var s = document.createElement("input");
                // s.setAttribute("type", "submit");
                // s.setAttribute("value", "Submit");
 
                // Append the email_ID input to the form
                down.append(ID);
               
                // Append the password to the form
                down.append(PWD);
               
                // Append the button to the form
                // form.append(s);
                
                down.append(saltoLinea);

                document.getElementsByTagName("body")[0]
               .appendChild(form);
            }
        </script> -->




    <!-- <form id="Items" method="post">
        <label id="ItemLabel">Item 1: </label>
        <input type="text" name="Items[]"><br/>
        <button type="button" class="moreItems_add">+</button>

        <input type="hidden" name="tickerID" id="tickerID" value="<?//php echo $ticker['ticker'] ?>">
        <input type="submit" name="saveTickerItems" value="Save Ticker Items">  
    </form>


<script type="text/javascript">
$("button.moreItems_add").on("click", function(e) {
// var tickerID = $('#tickerID').val();
//   var numItems = $("input[type='text']", $(this).closest("form")).length;
//   if (numItems < 10) {
    var html = '<label class="ItemLabel">Item ' + (numItems + 1) + ': </label>';
    html += '<input type="text" name="Items[]"/><br/>';
    $(this).before(html);
    console.log(tickerID);
//   }
}); -->
<!-- </script> -->




<?= $this->endSection() ?>