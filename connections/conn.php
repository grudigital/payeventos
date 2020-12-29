<?php

//servidor homologacao
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "payevents";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
if(!$conn){
    die("Falha na conexao: " . mysqli_connect_error());
}
?>