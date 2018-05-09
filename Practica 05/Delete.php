<?php
include_once('config.php');

	$ID = isset( $_GET['ID'] ) ? $_GET['ID'] : '';
	
	$config = mysqli_connect($servidor, $username, $password, $database) or die ('Conexion no establecida');

	//echo 'DELETE FROM persona WHERE Id = '.$id;
	$borrar = mysqli_query($config, 'DELETE FROM Datos WHERE ID = '.$ID);


	if($borrar){
		?><script>alert('Persona eliminada'); </script><?php
	}
	else{
		?><script>alert('Error');</script><?php
	}
?>