<?php
	// Preguntar si NO existe la variable de sesión
	session_start();
	if(isset($_SESSION['id']) === false){
        echo "<script>alert('Debe loguearse para realizar el ejercicio')</script>";
		header("location:index.php");
	}
	/*
	function nombre($id){
		include("conexion.php");
		$buscar = "SELECT nombre FROM usuarios
				   WHERE id_usuario = $id";
		$ej = mysqli_query($conexion, $buscar);
		$nombre = mysqli_fetch_array($ej);
		return $nombre['nombre'];
	}
	*/
?>