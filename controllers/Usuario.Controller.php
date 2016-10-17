<?php
 	if($accion == "Registrar"){
	 		include('views/cabeceraLogout.php');
			include('views/Paquetes/Basicos/Usuario/regritrarUsuario.php');
			include('views/Pie.php');
		}else{
			include_once('controllers/Login.Controller.php');
		}	
?>
