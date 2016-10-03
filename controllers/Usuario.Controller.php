<?php
 	
	
	 	if($accion == "Registrar"){
	 		include('views/cabeceraLogout.html');
			include('views/Paquetes/Basicos/Usuario/regritrarUsuario.html');
			include('views/Pie.html');
		}else{
			include_once('controllers/Login.Controller.php');
		}
	
?>