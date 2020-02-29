<?php

    $nome = $_POST['txtnome'];
    $idade = $_POST['txtidade'];

    while($idade <= 100){
        echo "Vida - $idade";
        $idade++;
    }

    echo $nome;
    echo $idade;




?>