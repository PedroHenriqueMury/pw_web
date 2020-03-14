<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "etec";

$nome = $_POST['txtnome'];
$senha = $_POST['txtsenha'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("erro na conexao: " . $conn->connect_error);
}

$sql = "SELECT * from login where nome = $nome and senha = $senha";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    echo "usuário e senha são similares !!!!";
	
} else {
    echo "nome do usuário ou senha invalida.";
}
$conn->close();



?>





