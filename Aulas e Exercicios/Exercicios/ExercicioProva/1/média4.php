<?php
	$media1 = $_POST['media1'];
	$media2 = $_POST['media2'];
	$media3 = $_POST['media3'];
	$media4 = $_POST['media4'];
	$media = 0 ;
	echo "A média das quatro notas é:</br>". $media = ($media1 + $media2 + $media3 + $media4)/4;

	if($media < 5){
		echo "</br>Aluno Reprovado";
	}
	else if(($media == 5.1) && ($media == 6.9)){
		echo "</br>Aluno em Recuperação";
	}
	else if($media >= 7){
		echo "</br>Aluno Aprovado";
	}
?>