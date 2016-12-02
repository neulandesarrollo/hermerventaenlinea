<?php

// -----------------------------------------------------------------------------------------------
// App Functions
// -----------------------------------------------------------------------------------------------

/*
 * Function to send email
 * Do email send action
 *
 * @param $email adds email you will be sent
 * @param $subject title of the email
 * @param $template set the html template for email or just add a string
 * @return boolean
 */
function sendEmail($email, $subject, $template) {   
    
    $to = $email; 
    $from = "Cotizador Hermer <cotizador@hermer.com.mx>"; 

    // Main header
    $header  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: " . $from . "\r\n";

    $body = $template;

    // Send message
    if (!mail($to, $subject, $body, $headers)) {
        return false;
    }
    
    return true;
}

/*
 * Function Fetch Template
 * Return the html template as string
 *
 * @param string $filename set the path of your template
 * @oaram array $variables get an array to become variables
 * @return string
 */
function fetchTemplate($filename, $variables) {
    extract($variables);
    
    if (is_file($filename)) {
        ob_start();
        include $filename;
        $results = ob_get_contents();
        ob_end_clean();
        return $results;
    }
    return false;
}

// -----------------------------------------------------------------------------------------------
// Mercedes WS Functions
// -----------------------------------------------------------------------------------------------

/*
 * Function Get Data
 * Fetch all the data of the webservice
 *
 * @param string $uri set the url webservice connection
 * @return string
 */
function getData($uri) {
    
    ini_set("soap.wsdl_cache_enabled", 0);

    /* Initialize webservice with your WSDL */
    $client = new SoapClient($uri);
    
    /*
     * @debug 
     * uncomment for debug 
     */
    
    /*
    echo '<pre>';
    var_dump($client->__getTypes());
    var_dump($client->__getFunctions());
    echo '</pre>';
    */
    
    $responseModelos = $client->obtenerModelosCotizador();

    print json_encode($responseModelos);
}

function getPrice($uri, $id) {

    /* Clear WSDL cache*/
    ini_set("soap.wsdl_cache_enabled", 0);

    /* Initialize webservice with your WSDL */
    $client = new SoapClient($uri);

    $params = array(
        "idTipo" => $id
    );

    $responsePrice = $client->__soapCall("obtenerPrecioUnidad", array($params));

    echo json_encode($responsePrice);
}

function getFinancings($uri) {
    
    /* Clear WSDL cache*/
    ini_set("soap.wsdl_cache_enabled", 0);
    
    /* Initialize webservice with your WSDL */
    $client = new SoapClient($uri);

    $params = array();

    $responseFinancings = $client->__soapCall("obtenerTiposFinanciamiento", array($params));

    echo json_encode($responseFinancings);
}

function getPlans($uri, $idTipo, $tipoPersona, $tipoFinanciamiento) {

    /* Clear WSDL cache*/
    ini_set("soap.wsdl_cache_enabled", 0);
    
    /* Initialize webservice with your WSDL */
    $client = new SoapClient($uri);

    $idDistribuidor = "30";

    $params = array(
        "idTipo" => $idTipo,
        "tipoPersona" => $tipoPersona,
        "tipoFinanciamiento" => $tipoFinanciamiento,
        "idDistribuidor" => $idDistribuidor
    );

    $responsePlanes = $client->__soapCall("obtenerPlanesCotizadorPorDistribuidor", array($params));

    echo json_encode($responsePlanes);
}

function getCotizacion($uri, $idTipo, $tipoPersona, $tipoFinanciamiento, $idPlan, $idEstado, $cantidadMeses, $porcentajeEnganche) {

    /* Clear WSDL cache*/
    ini_set("soap.wsdl_cache_enabled", 0);
    
    /* Initialize webservice with your WSDL */
    $client = new SoapClient($uri);

    $params = array(
        "idTipo" => $idTipo,
        "tipoPersona" => $tipoPersona,
        "tipoFinanciamiento" => $tipoFinanciamiento,
        "idPlan" => $idPlan,
        "idEstado" => $idEstado,
        "cantidadMeses" => $cantidadMeses,
        "porcentajeEnganche" => $porcentajeEnganche
    );

    $responsePlanes = $client->__soapCall("obtenerCotizacion", array($params));

    echo json_encode($responsePlanes);
}

function getTerms($uri, $idPlan) {

    /* Clear WSDL cache*/
    ini_set("soap.wsdl_cache_enabled", 0);
    
    /* Initialize webservice with your WSDL */
    $client = new SoapClient($uri);

    $params = array(
        "idPlan" => $idPlan
    );

    $responsePlanes = $client->__soapCall("obtenerPlazos", array($params));

    echo json_encode($responsePlanes);
}