<?php
include('header.php');

$db = mysqli_connect("yankuserver.com","yankuser_heruser","bI}81!]$&Hbm","yankuser_hermer_mercedez");
    if(mysqli_connect_errno())
      {
        echo 'Failed to connect to MySQL: '.
        mysqli_connect_error();
      } 
    else
      {
        echo '';
      }

?>

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
                    <form ng-controller="control_1">
                        <div class="row">
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                <label>Clase:</label><br>
                                <select name="carlist">
                                  <option value="volvo" ng-repeat="x in clase">{{x}}</option>
                                </select>
                            </div>  
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                <label>Modelo AMG:</label><br>
                                <select name="carlist">
                                  <option value="volvo" ng-repeat="x in modelo">{{x}}</option>
                                </select>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                <label>Color:</label><br>
                                <select name="carlist">
                                  <option value="volvo" ng-repeat="x in color">{{x}}</option>
                                </select>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                <label>Financiamiento:</label><br>
                                <select name="carlist">
                                  <option value="volvo" ng-repeat="x in financiamiento">{{x}}</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                <label>Enganche:</label><br>
                                <select name="carlist">
                                  <option value="volvo" ng-repeat="x in enganche">{{x}}</option>
                                </select>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                <label>Plazo elegido:</label><br>
                                <select name="carlist">
                                  <option value="volvo" ng-repeat="x in plazo">{{x}}</option>
                                </select>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                <label>Precio del modelo:</label><br>
                                <p class="prices">{{precioModelo}}</p>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                <label>Mensualidades:</label><br>
                                <p class="prices">{{mensualidades}}</p>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </section>
                    <center>
                        <a href="2.php"><button type="button">Continuar</button></a>
                    </form>
                    </center>
                        

<?php
include('footer.php');
?>

<script>
   $.ajax({
                    type: "POST",
                    url: "services.php",
                    action: 'getData',
                    data: ModeloCotizador,
                    dataType: 'json',
                    success: function(index, value)
                     {
                        
                        html += '<div>';
                        html += '<a href="hermer_calculator_step2.php?id=' + value.id + '&des=' + value.descripcion + '" data-ima="' + value.descripcion + '">' + value.descripcion + '</a>';
                        html += '</div>';
                           console.log(ModeloCotizador);

                       }

                    });
            
     

</script>
