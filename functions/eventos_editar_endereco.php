<?php
$id = intval($_REQUEST['id']);
$cep = $_REQUEST['cep'];
$logradouro = $_REQUEST['logradouro'];
$numero = $_REQUEST['numero'];
$complemento = $_REQUEST['complemento'];
$bairro = $_REQUEST['bairro'];
$cidade = $_REQUEST['cidade'];
$estado = $_REQUEST['estado'];

require("../connections/conn.php");
$sql = "update eventos set cep='$cep',logradouro='$logradouro',numero='$numero',complemento='$complemento',bairro='$bairro',cidade='$cidade',estado='$estado' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../eventos.php'>";
mysqli_close($conn);
?>