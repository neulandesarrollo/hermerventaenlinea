<?php

$dsn = 'mysql:dbname=hermer_db;host=54.187.33.228';
$user = 'hermer@remote';
$password = 'yankuser2016';

try{

	$pdo = new PDO(	$dsn, 
					$user, 
					$password
					);	

}catch( PDOException $e ){
	echo 'Error al conectarnos: ' . $e->getMessage();
}
