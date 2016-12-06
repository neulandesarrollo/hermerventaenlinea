<?php

session_start();

if (!isset($_POST, $_POST['action'])) {
    die('Invalid method request');
}

require_once 'helpers.php';

$uri = "https://distribuidores.daimlerfinancialservices.com.mx/cotizadorve/cotizadorWs?wsdl";
  
switch($_POST["action"]) {
    case "getData":
        getData($uri);
        break;
        
    case "getPrice":
        getPrice($uri, $_POST["id"]);
        break;
    
    case 'getFinancings':
        getFinancings($uri);  
        break;
    
    case "getPlans":
        getPlans($uri, $_POST["idTipo"], $_POST["tipoPersona"], $_POST["tipoFinanciamiento"]);
        break;
    
    case "getTerms":
        getTerms($uri, $_POST["idPlan"]);
        break;
        
    case "getCotizacion":
        getCotizacion($uri, $_POST["idTipo"], $_POST["tipoPersona"], $_POST["tipoFinanciamiento"], $_POST["idPlan"], $_POST["idEstado"], $_POST["cantidadMeses"], $_POST["porcentajeEnganche"]);
        break;

    default : 
        die('Invalid action');
        break;
}

