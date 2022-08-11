<?= $this->extend('layouts/generalLayout') ?>

<?= $this->section('contingut') ?>

<?= session()->getFlashdata('error'); ?>
<?= service('validation')->listErrors(); ?>

    <?= csrf_field(); ?>





    <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-12 text-center">
                <div class="card">
                    <h5 class="text-center mb-4">Dades de la nova compra</h5>
                    <form class="form-card" action="/clientsDetall/<?= esc($clients['DNI']) ?>" method="POST">

                        <div class="row justify-content-center text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">DNI<span class="text-danger"> *</span></label> <input type="text" id="dni" name="dni" placeholder="DNI del client"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nom<span class="text-danger"> *</span></label> <input type="text" id="name" name="name" placeholder="Nom del client"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Cognom<span class="text-danger"> *</span></label> <input type="text" id="surname" name="surname" placeholder="Cognom del client"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Numero de telefon<span class="text-danger"> *</span></label> <input type="text" id="phone" name="phone" placeholder="Numero de telefon del client"></div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Correu electronic<span class="text-danger"> *</span></label> <input type="mail" id="email" name="email" placeholder="Correu electronic del client"></div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Adreça<span class="text-danger"> *</span></label> <input type="text" id="address" name="address" placeholder="Adreça del client"> </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Població<span class="text-danger"> *</span></label> <input type="text" id="population" name="population" placeholder="Població del client. Per exemple: Lleida"></div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Localitat<span class="text-danger"> *</span></label> <input type="text" id="location" name="location" placeholder="Localitat del client. Per exemple: Alcarrás"></div>
                        </div>

                        <div class="row justify-content-center text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Data de naixement<span class="text-danger"> *</span></label> <input type="date" data-date-format="DD MMMM YYYY" id="birth" name="birth" value="2000-01-01"> </div>
                        </div>

                        </br>
                        <div class="row justify-content-center">
                            <div class="form-group col-sm-6"> <input type="submit" class="btn btn-primary" value="Afegir client"> </div>
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