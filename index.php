<?php

	$page = isset($_GET['page']) ? $_GET['page'] : 'Inicio';
	$accion = null;
	$page_array = explode(".", $page);
	
	if(is_array($page_array) && sizeof($page_array) == 2){
		$page = $page_array[0];
		$accion = $page_array[1];
	}

	if(is_file('controllers/'.$page. '.Controller.php')){
		include_once('controllers/'.$page. '.Controller.php');
	}
	else{
		include_once('controllers/Error.Controller.php');
	}

?>