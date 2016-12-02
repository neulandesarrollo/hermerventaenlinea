<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
<body paddingwidth="0" paddingheight="0"   style="padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;" offset="0" toppadding="0" leftpadding="0">
    <div style="display:block; width: 100%; height: 20px"></div>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableContent bgBody" style="font-family:Helvetica, Arial,serif;">
        <tr>
            <td>
                <img src="http://yankuserver.com/hermer_cotizador/img/MB-star_n_web.svg" alt="" height="50">
            </td>
            <td style="text-align: rigth">
                <img src="http://yankuserver.com/hermer_cotizador/img/hermer_logo.png" alt="" height="50">
            </td>
        </tr>
    </table>
    <div style="display:block; width: 100%; height: 20px"></div>
    <div style="text-align: center">
        <p><?php echo $title ?></p>
    </div>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableContent bgBody" align="center"  style="font-family:Helvetica, Arial,serif;">
        <!--  Space -->
        <tr>
            <td height="35"></td>
        </tr>
        <!-- Content -->
        <tr>
            <td>
                <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" class="bgItem">
                    <tr>
                        <td width="40"></td>
                        <td width="520">
                            <table width="520" border="0" cellspacing="0" cellpadding="0" align="center">
                                <tr>
                                    <!-- Header -->
                                    <td class="movableContentContainer" valign="top">
                                        <!-- Body -->
                                        <div class="movableContent">
                                            <table width="520" border="0" cellspacing="0" cellpadding="0" align="center">
                                                <!-- Space -->
                                                <tr>
                                                    <td height="15"></td>
                                                </tr>
                                                <tr>
                                                    <td align="left">
                                                        <p>Datos de cotizaci&oacute;n</p>
                                                        <table>
                                                            <tr>
                                                                <td>Modelo: </td>
                                                                <td><?php echo $model ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Versión: </td>
                                                                <td><?php echo $version ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Precio: </td>
                                                                <td><?php echo $price ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tipo de persona: </td>
                                                                <td><?php echo $personType ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Plan: </td>
                                                                <td><?php echo $plan ?></td>
                                                            </tr>
                                                            <!-- <tr>
                                                                <td>Plazo: </td>
                                                                <td><?php echo $term ?></td>
                                                            </tr>                                                             -->
                                                            <tr>
                                                                <td>Enganche: </td>
                                                                <td><?php echo  $deposit ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Mensualidad: </td>
                                                                <td><?php echo $monthlyPayment ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nombre: </td>
                                                                <td><?php echo $firstName ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Apellido: </td>
                                                                <td><?php echo $lastName ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Email: </td>
                                                                <td><?php echo $email ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tel. Celular: </td>
                                                                <td><?php echo $mobile ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Estado: </td>
                                                                <td><?php echo $state ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Prueba de manejo: </td>
                                                                <td><?php echo $testDrive ?></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <!-- Space -->
                                                <tr>
                                                    <td height="20"></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td width="40"></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <div style="display:block; width: 100%; height: 20px"></div>
    <div style="display:block; width: 95%; margin: 0 auto; border-top: 1px solid #ccc">
        <p style="font-size:9px; color: #333; text-align: justify"><?php echo $info ?></p>
        <p  style="text-align:left;color:#CCCCCC;font-size:12px;font-weight:normal;line-height:20px;">
            <span style="font-weight:bold;">Hermer</span>
            <br>
            <?php echo date('Y') ?>
            <br>
        </p>
    </div>
</body>
</html>