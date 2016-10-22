<?php 

$server		= 'mysql:dbname=sistemascalificaciones_bachi; host=127.0.0.1';
$user		= 'root';
$password	= '';

try {
	$pdo = new PDO(
		$server,
		$user,
		$password);
	echo 'conexion correcta';

} catch (PDOException $e) {
	echo 'Error al conectar: ' . $e->getMessage();
}

?>