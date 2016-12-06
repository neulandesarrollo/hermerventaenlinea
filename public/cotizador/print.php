<?php 
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'vendor/pdf/tcpdf.php';
require_once 'helpers.php';

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// pdf information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Hermer');
$pdf->SetTitle('Cotización Hermer');
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

$data = [
    'title' => 'Cotización Hermer',
    'model' => htmlentities($_SESSION["result"]->cotizacion->sModelo, ENT_QUOTES, "UTF-8"),
    'version' => htmlentities($_SESSION["result"]->cotizacion->sVersion, ENT_QUOTES, "UTF-8"),
    'price' => htmlentities($_SESSION["result"]->cotizacion->sPrecioUnidad, ENT_QUOTES, "UTF-8"),
    'personType' =>  htmlentities($_SESSION["result"]->cotizacion->sTipoPersona, ENT_QUOTES, "UTF-8"),
    'plan' => htmlentities($_SESSION["result"]->cotizacion->sPlan, ENT_QUOTES, "UTF-8"),
    'deposit' => htmlentities($_SESSION["result"]->cotizacion->sEnganche, ENT_QUOTES, "UTF-8"),
    'monthlyPayment' => htmlentities(number_format(substr($_SESSION["result"]->cotizacion->mensualidad,0,9), 2), ENT_QUOTES, "UTF-8"),
    'info' => $_SESSION['result']->cotizacion->leyenda,
];

$html = fetchTemplate('views/templates/pdf.php', $data);

// add new page
$pdf->AddPage();
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->lastPage();

$pdf->Output('example_006.pdf', 'I');
