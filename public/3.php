<?php
include('header.php');
?>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <center>
                        <h1 class="title">Información Bancaria</h1>
                        <p class="subtitle">
                            Ingresa la información del servicio bancario con el que deseas <br>pagar la transacción 
                        </p>
                    </center>
                </div>
            </div>
        </div>
    </section>

    <section id="bg_gris">
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                    <form ng-controller="control_3">
                        <label class="lab1">Nombre de tarjetahabiente:</label><br>
                        <input type="name" class="form-control" id="exampleInputEmail1" placeholder="Nombre de tarjeta">

                        <label class="lab1">Número de tarjeta:</label><br>
                        <input type="telephone" class="form-control" id="exampleInputEmail1" placeholder="Número de tarjeta">

                        <label class="lab1">Fecha de vencimiento (MM/AAAA):</label><br>

                        <div class="row">
                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <select name="mes" id="anchoMes">
                                  <option value="volvo" ng-repeat="x in mes">{{x}}</option>
                                </select>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <select name="anio" id="anchoAnio">
                                  <option value="volvo" ng-repeat="x in anio">{{x}}</option>
                                </select>
                            </div>
                        </div>

                        <label class="lab1">Código Cvc:</label><br>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="E-mail">

                        <center>
                            <p id="parrafo2">Tu pago no se cargará hasta que tu camioneta este confirmada.</p>
                            <a href="2.php"><button type="button" class="btn2">Regresar</button></a>
                            <a href="4.php"><button type="button" class="btn2" id="paddingGris">Confirmar</button></a>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </section>


<?php
include('footer.php');
?>