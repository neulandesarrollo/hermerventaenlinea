<?php


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

	echo json_encode($responseCot);
} catch (SoapFault $fault) {
	var_dump($fault);
	echo "tr";
}

?>