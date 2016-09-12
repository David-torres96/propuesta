<?php

	$accion = isset($_GET['accion']) ? $_GET['accion'] : 'inicio';

	if(is_file('controllers/'.$accion. '.Controller.php')){
		include_once('controllers/'.$accion. '.Controller.php');
	}else{
		include_once('controllers/error.Controller.php');
	}

?>