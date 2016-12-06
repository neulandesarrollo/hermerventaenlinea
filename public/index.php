<?php
include('header.php');
include('server/conexion.php');
include('js/modules/root.js')
?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <center>
                        <h1 class="title">Personaliza tu Mercedes Benz</h1>
                        <p class="subtitle">Diseña el Mercedes de tus sueños, y elige el método de pago <br> que mejor te convenga.</p>
                    </center>
                </div>
            </div>
        </div>
    </section>
    <section id="bg_gris">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <center>
                    <form ng-controller="control_1" id="f1" >
                        <div class="row" >
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                <label>Clase:</label><br>
                                <select name="clase">
                                  <option value="volvo" ng-repeat="x in clase" class="classWrapper">{{clase}}</option>
                                </select>
                            </div>  
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                <label>Modelo AMG:</label><br>
                                <select name="modelo">
                                  <option value="volvo" ng-repeat="x in modelo">{{modelo}}</option>
                                </select>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                <label>Color:</label><br>
                                <select name="color">
                                  <option value="volvo" ng-repeat="x in color">{{color}}</option>
                                </select>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                <label>Financiamiento:</label><br>
                                <select name="financiamiento">
                                  <option value="volvo" ng-repeat="x in financiamiento">{{financiamiento}}</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                <label>Enganche:</label><br>
                                <select name="enganche">
                                  <option value="volvo" ng-repeat="x in enganche">{{enganche}}</option>
                                </select>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                <label>Plazo elegido:</label><br>
                                <select name="plazo">
                                  <option value="volvo" ng-repeat="x in plazo">{{plazo}}</option>
                                </select>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                <label>Precio del modelo:</label><br>
                                <p name="preciomodelo" class="prices">{{precioModelo}}</p>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                <label>Mensualidades:</label><br>
                                <p name="mensualidades" class="prices">{{mensualidades}}</p>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </section>
        <center>
        <a href="2.php"><button type="submit">Continuar</button></a>
        </center>
                </form>
        <div id="Ajx"></div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

                      

<?php
include('footer.php');
?>


<script>
    jQuery(function(){
           var form = jQuery('form#f1');
           form.submit(function(e){
               e.preventDefault();
               dataString = form.serialize();

               jQuery.ajax({
                   type:'POST',
                   url:'server/validaciones.php',
                   data: dataString,
                  beforeSend: function(){
                      swal({   title: "Espera...",   
                               text: "Estamos validando tus datos.", 
                               showConfirmButton: false });
                   },
                   success:function(data){
                       jQuery('#AjaxAct').replaceWith(data);
                   },
                   complete:function(){

                   }
               });
               return false;
           })
       }) ;
</script>

<!-- Trae los objetos de las clases en el API SOAP DE MERCEDEZ-->
<!-- <script>
    var request = $.ajax({
                      method: "POST",
                      url: "services.php",
                      datatype: "json",
                      data: { action: "getData" }
                    })
                    .done(function(response) {
                        
                    var data = JSON.parse(response);

                    console.log(data.ModeloCotizador);
                    var html = '';
  
                     $.each(data.ModeloCotizador, function(index, value) {
                        
                        html += '<div>';
                        html += '<a href="hermer_calculator_step2.php?id=' + value.id + '&des=' + value.descripcion + '" data-ima="' + value.descripcion + '">' + value.descripcion + '</a>';
                        html += '</div>';

                    });

                    $('.classWrapper').html(html);
                    });

                     request.fail(function(data) {
                    alert('¡Ups! Ocurrio un error');
                });
</script>
 -->
