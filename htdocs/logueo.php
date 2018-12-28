<?php
    $usuario = $_POST['usuario'];
	$clave   = md5($_POST['clave']);
	
	include("conexion.php");
	
	$existe = "SELECT * FROM usuarios
			   WHERE
			      nick = '$usuario'
                  || 
                  mail = '$usuario'
				  AND
				  clave = '$clave'
			  ";
	
	// 3. Ejecuto la query
	$ej = mysqli_query($conexion, $existe);
	
	// 4. Pregunto si NO funcionó
	if($ej === false){
		echo "Error";
	} else {
		// Pregunto cuántos resultados me devolvió la consulta
		if(mysqli_num_rows($ej) === 1){
			// Averiguar el ID del usuario
			$reg = mysqli_fetch_array($ej);
			
			// Guardarlo en una variable de sesión
		    session_start();
		    $_SESSION['id'] = $reg['id_usuario'];
			
			// Enviarlo al contenido privado
			header("location:ejercicios_tipos.php");
			
		} else {
			echo "Datos incorrectos";
		}
	}
	
	
?>
