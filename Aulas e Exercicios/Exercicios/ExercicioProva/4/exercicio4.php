<?php
	$v = $_POST['valor'];

	if($v > 0){
		echo "</br>Valor positivo";
	}
	else if($v < 0 ){
		echo "</br>Valor Negativo";
	}
	else if($v = 0){
		echo "</br>Igual a Zero";
	}
?>