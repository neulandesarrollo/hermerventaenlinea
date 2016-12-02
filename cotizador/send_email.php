<?php

session_start();

require_once "helpers.php";

require_once('connection.php');

$cotizacion = isset($_SESSION["result"]->cotizacion) ? $_SESSION["result"]->cotizacion : null; 

if( $cotizacion != null and !empty($_POST) ){

$sql_insert = 'INSERT INTO cotizaciones ( model, version, price, person, plan, plazo, enganche, mensualidad, name, lname, email, phone, state, test ) VALUES( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )';

    $insertData = [
        $cotizacion->sModelo,
        $cotizacion->sVersion,
        $cotizacion->sPrecioUnidad,
        $cotizacion->sTipoPersona,
        $cotizacion->sPlan,
        isset($_POST['plazo']) ? $_POST['plazo']: '',
        $cotizacion->sEnganche,
        $cotizacion->mensualidad,
        isset($_POST['name']) ? $_POST['name']: '',
        isset($_POST['pLastname']) ? $_POST['pLastname']: '',
        isset($_POST['email']) ? $_POST['email']: '',
        isset($_POST['phone']) ? $_POST['phone']: '',
        isset($_POST['state']) ? $_POST['state']: '',
        isset($_POST['test']) ? $_POST['test']: ''
    ];

    $statement_insert = $pdo->prepare($sql_insert); 
    $statement_insert->execute($insertData); 
}

$states = [ 
    "Aguascalientes",
    "Baja California",
    "Baja California Sur",
    "Campeche",
    "Chiapas",
    "Chuhuahua",
    "Coahuila",
    "Colima",
    "Ciudad de México",
    "Durango",
    "Guanajuato",
    "Guerrero",
    "Hidalgo",
    "Jalisco",
    "México",
    "Michoacán",
    "Morelos",
    "Nayarit",
    "Nuevo León",
    "Oaxaca",
    "Puebla",
    "Querétaro",
    "Quintana Roo",
    "San Luis Potosí",
    "Sinaloa",
    "Sonora",
    "Tabasco",
    "Tamaulipas",
    "Tlaxcala",
    "Veracruz",
    "Yucatán",
    "Zacatecas"
];

$testDrive =  (isset($_POST['test'])) ? "Si" : "No";

$data = [
    'title' => 'Cotización Hermer', "UTF-8",
    'model' => htmlentities($_SESSION["result"]->cotizacion->sModelo, ENT_QUOTES, "UTF-8"),
    'version' => htmlentities($_SESSION["result"]->cotizacion->sVersion, ENT_QUOTES, "UTF-8"),
    'price' => htmlentities($_SESSION["result"]->cotizacion->sPrecioUnidad, ENT_QUOTES, "UTF-8"),
    'personType' =>  htmlentities($_SESSION["result"]->cotizacion->sTipoPersona, ENT_QUOTES, "UTF-8"),
    'plan' => htmlentities($_SESSION["result"]->cotizacion->sPlan, ENT_QUOTES, "UTF-8"),
    // 'plazo' => htmlentities($_SESSION["result"]->cotizacion->sTerm, ENT_QUOTES, "UTF-8"),
    'deposit' => htmlentities($_SESSION["result"]->cotizacion->sEnganche, ENT_QUOTES, "UTF-8"),
    'monthlyPayment' => htmlentities(number_format(substr($_SESSION["result"]->cotizacion->mensualidad,0,9), 2), ENT_QUOTES, "UTF-8"),
    'firstName' => htmlentities($_POST["name"], ENT_QUOTES, "UTF-8"),
    'lastName' => htmlentities($_POST["pLastname"], ENT_QUOTES, "UTF-8"),
    'email' => htmlentities($_POST["email"], ENT_QUOTES, "UTF-8"),
    'mobile' =>  htmlentities($_POST["phone"], ENT_QUOTES, "UTF-8"),
    'state' => htmlentities($states[$_POST["state"] - 1], ENT_QUOTES, "UTF-8"),
    'testDrive' => $testDrive,
    'info' => $_SESSION['result']->cotizacion->leyenda,
];

$template = fetchTemplate('views/templates/email.php', $data);

// sendEmail($_POST["email"] . ", fernando@yanku.mx, marketing@hermer.com.mx, diegonava@gruponeu.com, emilia@gruponeu.com", "Cotizaci&oacute;n Hermer", $text, "", "");
sendEmail($_POST["email"] . ", khuerta@hermer.com.mx, marketing@hermer.com.mx, joseluis@neuland.com.mx", "Cotización Hermer", $template);


// Unset all of the session variables.
//$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) 
{
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
// Finally, destroy the session.
//session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cotizador - Hermer</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="uikit-2.22.0/css/uikit.min.css">
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="uikit-2.22.0/js/uikit.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="assets/css/main.css" type="text/css">
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

            .gracias {
                padding: 2em 0;                
                margin: 0 auto;
            }
            
            .gracias h2, h3, p, a {
                font-weight: normal;
                font-style: normal;
            }

            .gracias a {
                color: #fff;
                text-decoration: none;
            }
            
            .gracias a.button {
                background-color: green;
                padding: 1em 2em;                
                border-radius: 2px;
                clear: both;
                color: #fff;
                text-decoration: none;
            }

            .gracias a.button:hover {                                
                background-color: #00a200;                
            }

            .footer-menu {
                background-color: #000;
                padding: 1em 0;
                margin: 0 auto;
                border-top: solid 1px #ddd;
            }

            .footer-menu a {
                justify-content: center;
                color: #999;
                padding: 0 1em;
                text-decoration: none;
                margin: 1em auto;
            }
            
            .footer-menu a:hover {                
                color: #ddd;                
            }
            
            span.bar {
                color: #ddd;
            }

            .banner {
                clear: both;
                margin: 2em 0;
                -webkit-transition: background .35s ease;
                transition: background .35s ease;
            }

            @media only screen and (min-width : 768px){
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
        <div class="mainWrapper gracias" style="background-color:#000; text-align:center; margin:0 auto; color:#fff;">
            <!-- <div class="calcBrandHeader"></div>
            <div class="calcBrandHeader2"></div> -->            
            <h3>Cotizador Hermer</h3>
            <h2>¡ Gracias tu email se ha enviado con copia a Hermer !</h2>
            <p>Cotiza y redescubre el placer de manejar. Ven por el Mercedes-Benz que mejor te representa.</p>
            <br>
            <a class="button" href="../">Regresar a Hermer</a>
            <br>
            <img class="banner" src="assets/img/agradecimiento-cotizador.png" alt="Gracias">
        </div>
        <div style="max-width:1000px; margin:0 auto;"><?php include 'views/common/footer.php' ?></div>
    </body>
</html>