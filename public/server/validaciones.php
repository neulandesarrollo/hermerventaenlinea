<?php
require 'conexion.php'
if(isset($_POST['volvo']) && !empty($_POST['volvo'])){

$clase = mysqli_real_escape_string($db,$_POST['clase']);
$modelo = mysqli_real_escape_string($db,$_POST['modelo']);
$color = mysqli_real_escape_string($db,$_POST['color']);
$financiamiento = mysqli_real_escape_string($db,$_POST['financiamiento']);
$enganche = mysqli_real_escape_string($db,$_POST['enganche']);
$plazo = mysqli_real_escape_string($db,$_POST['plazo']);
$precio_modelo = mysqli_real_escape_string($db,$_POST['preciomodelo']);
$mensualidades = mysqli_real_escape_string($db,$_POST['mensualidades']);


$sql1 = "INSERT INTO venta_1  (`id_venta1`,`clase`,`modelo`,`color`,`financiamiento`,`enganche`,`plazo`,`precio_modelo`, `mensualidades`) 
			VALUES('$clase','$modelo','$color','$financiamiento' ,'$enganche','$plazo','$precio_modelo','$mensualidades');";



	$result = mysqli_query($db, $sql1);
					
			if($result){
	
						echo "<div id='Ajx'><script>document.getElementById('f1').reset(); </script>
							<script>sweetAlert('¡Gracias!', 'Hemos recibido correctamente tus datos', 'success'); </script></div>";
						}else{
							//Error datos duplicados
							echo "<div id='Ajx'><script>sweetAlert('Error', 'Ya hemos guardado tus datos', 'error'); </script></div>";
							
						}

				}

				else{
						//Error datos incompletos
					echo "<div id='Ajx'><script>sweetAlert('Error', 'Los datos están incompletos', 'error'); </script></div>";
				}

 ?>