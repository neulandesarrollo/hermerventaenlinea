<?php

session_start();

/* Clear WSDL cache*/
ini_set("soap.wsdl_cache_enabled", 0);

/* Initialize webservice with your WSDL */

//$client = new SoapClient("https://dfsqa01.cloudapp.net/cotizadorve/cotizadorWs?wsdl");
$client = new SoapClient("https://distribuidores.daimlerfinancialservices.com.mx/cotizadorve/cotizadorWs?wsdl");

/*
 * Check the functions that the SOAP service return
 * @debug
 */
// var_dump($client->__getTypes());
// var_dump($client->__getFunctions());

$params = array(
	"idTipo" => $_POST["idTipo"],
	"tipoPersona" => $_POST["tipoPersona"],
	"tipoFinanciamiento" => $_POST["tipoFinanciamiento"],
	"idPlan" => $_POST["idPlan"],	
	"idEstado" => $_POST["idEstado"],
	"cantidadMeses" => $_POST["idTerm"],
	"porcentajeEnganche" => $_POST["enganche"]
);

try {
	$responseCot = $client->__soapCall("obtenerCotizacion", array($params));

	$_SESSION["params"] = $params;
	$_SESSION["result"] = $responseCot;
} catch (SoapFault $fault) {
	var_dump($fault);
	echo "tr";
}

?>
<!DOCTYPE html>
<html>
	<head>
		<?php include 'views/common/head.php' ?>
		<style>
			.classWrapper div:hover {
				background-color: #FFFFFF;
				cursor: default;
			}
			.classWrapper div a {
				cursor: default;
			}
			.classImageWrapper {
				display: block;
			}
			#step3B {
				display: inline-block;
				width:100%;
			}
			#step1B, #step2B {
				display: none;
			}
			.classWrapper div {
				font-size: initial;
				text-align: center;
				width: 100%;
				margin-bottom: 6px;
				display: block;
				border: 0px solid #D1D2D4;
				padding: 0;
			}
			@media only screen and (min-width : 768px) {
				#step1B, #step3B, #step2B {
					display: inline-block;
					width: 30%;
				}
				.classWrapper {
					display: inline-block;
				}
				.classImageWrapper {
					display: inline-block;
				}
			}
		</style>
	</head>
	<body>
		<div class="mainWrapper">
			<?php include 'views/common/header.php' ?>
			<div class="steps">
				<div class="calcStep" id="step1B">
					<a href="hermer_calculator.php">1. Selecciona tu modelo</a>
				</div>
				<div class="calcStep" id="step2B">
					<a href="hermer_calculator_step2.php">2. Opciones de financiamiento</a>
				</div>
				<div class="calcStep stepActive" id="step3B">
					<span>3. Tu cotización</span>
				</div>
			</div>
			<div class="contentWrapper">
				<div class="classWrapper">
					<div class="uk-container uk-container-center uk-margin-large-bottom">
						<div class="uk-grid" data-uk-grid-margin>
							<div class="uk-form-row">
								<label class="uk-form-label" for="form-h-it"></label>
								<div class="uk-form-controls">
									<img src="assets/img/<?php echo $responseCot->cotizacion->sModelo; ?>.jpg">
								</div>
							</div>
							<div class="uk-form-row">
								<label class="uk-form-label" for="form-h-it">Modelo</label>
								<div id="modelo" class="uk-form-controls">
									<?php echo $responseCot->cotizacion->sModelo; ?>
								</div>
							</div>
							<div class="uk-form-row">
								<label class="uk-form-label" for="form-h-it">Version</label>
								<div id="version" class="uk-form-controls">
									<?php echo $responseCot->cotizacion->sVersion; ?>
								</div>
							</div>
							<div class="uk-form-row">
								<label class="uk-form-label" for="form-h-it">Precio</label>
								<div id="precioUnidad" class="uk-form-controls">
									<?php echo $responseCot->cotizacion->sPrecioUnidad; ?>
								</div>
							</div>
							<div class="uk-form-row">
								<label class="uk-form-label" for="form-h-it">Tipo de persona</label>
								<div id="tipoPersona" class="uk-form-controls">
									<?php echo $responseCot->cotizacion->sTipoPersona; ?>
								</div>
							</div>
							<div class="uk-form-row">
								<label class="uk-form-label" for="form-h-it">Plan</label>
								<div id="plan" class="uk-form-controls">
									<?php echo $responseCot->cotizacion->sPlan; ?>
								</div>
							</div>
							<div class="uk-form-row">
								<label class="uk-form-label" for="form-h-it">Plazo</label>
								<div id="term" name="plazo" class="uk-form-controls">									
									<?php echo $_POST["idTerm"]; ?> meses 
								</div>
							</div>
							<div class="uk-form-row">
								<label class="uk-form-label" for="form-h-it">Enganche</label>
								<div id="enganche" class="uk-form-controls">
									<?php echo $responseCot->cotizacion->sEnganche; ?>
								</div>
							</div>
							<div class="uk-form-row">
								<label class="uk-form-label" for="form-h-it">Mensualidad</label>
								<div id="mensualidad" class="uk-form-controls">
									$<?php echo number_format(substr($responseCot->cotizacion->mensualidad,0,9), 2) ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="classImageWrapper">
					<div class="uk-container uk-container-center uk-margin-large-bottom">
						<div class="uk-grid" data-uk-grid-margin>
							<form class="uk-form uk-form-horizontal" method="post" action="send_email.php">
								<div class="uk-form-row">
									<h4>Envía tu cotización vía mail y agenda una prueba de manejo.</h4>
								</div>
								<div class="uk-form-row">
									<label class="uk-form-label" for="form-h-it">Nombre</label>
									<div class="uk-form-controls">
										<input type="text" name="name" required>
									</div>
								</div>
								<div class="uk-form-row">
									<label class="uk-form-label" for="form-h-it">Apellido</label>
									<div class="uk-form-controls">
										<input type="text" name="pLastname" required>
									</div>
								</div>
								<div class="uk-form-row">
									<label class="uk-form-label" for="form-h-it">Email</label>
									<div class="uk-form-controls">
										<input type="email" name="email" required>
									</div>
								</div>
								<div class="uk-form-row">
									<label class="uk-form-label" for="form-h-it">Telefono celular</label>
									<div class="uk-form-controls">
										<input type="text" name="phone" required>
									</div>
								</div>
								<div class="uk-form-row">
									<label class="uk-form-label" for="form-h-it">Estado</label>
									<div class="uk-form-controls" required>
										<select name="state">
										<option value="1">Aguascalientes</option>
										<option value="2">Baja California</option>
										<option value="3">Baja California Sur</option>
										<option value="4">Campeche</option>
										<option value="5">Chiapas</option>
										<option value="6">Chuhuahua</option>
										<option value="7">Coahuila</option>
										<option value="8">Colima</option>
										<option value="9" selected="selected">Distrito Federal</option>
										<option value="10">Durango</option>
										<option value="11">Guanajuato</option>
										<option value="12">Guerrero</option>
										<option value="13">Hidalgo</option>
										<option value="14">Jalisco</option>
										<option value="15">México</option>
										<option value="16">Michoacán</option>
										<option value="17">Morelos</option>
										<option value="18">Nayarit</option>
										<option value="19">Nuevo León</option>
										<option value="20">Oaxaca</option>
										<option value="21">Puebla</option>
										<option value="22">Querétaro</option>
										<option value="23">Quintana Roo</option>
										<option value="24">San Luis Potosí</option>
										<option value="25">Sinaloa</option>
										<option value="26">Sonora</option>
										<option value="27">Tabasco</option>
										<option value="28">Tamaulipas</option>
										<option value="29">Tlaxcala</option>
										<option value="30">Veracruz</option>
										<option value="31">Yucatán</option>
										<option value="32">Zacatecas</option>
										</select>
									</div>
								</div>
								<div class="uk-form-row">
									<label class="uk-form-label" for="form-h-it">Prueba de manejo</label>
									<div class="uk-form-controls">
										<input type="checkbox" name="test" value="1" checked> <label for="form-h-r">Si</label><br>
									</div>
								</div>
								<div class="uk-form-row">
									<label class="uk-form-label" for="form-h-it"></label>
									<div class="uk-form-controls">
										<button class="uk-button" type="submit">Eviar Email</button>
										<a href="print.php" target="_blank" class="uk-button">Imprimir</a>
									</div>
								</div>
							</form>    
						</div>
					</div>
				</div>
				<div style="padding: 2em 5% 0; font-size: 9px; border-top: solid 1px #aaa;">
					<p><?php echo $responseCot->cotizacion->leyenda; ?></p>
					<ul style="list-style: none">
						<li>* Los resultados no son una cotización formal, precios aproximados, sujeto a aprobación de crédito. Sujetos a disponibilidad.</li>
						<li>* Precio no incluye bonos.</li>
						<li>* Cálculo sobre precio de lista   </li>
					</ul>
				</div>
			</div>
			<?php include 'views/common/footer.php' ?>
		</div>
	</body>
</html>