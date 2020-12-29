<?php
$id = intval($_REQUEST['id']);
$titulo = $_REQUEST['titulo'];
$subtitulo = $_REQUEST['subtitulo'];
$categoria = $_REQUEST['categoria'];
$preco = $_REQUEST['preco'];
$descricao = $_REQUEST['descricao'];
$cepsaida = $_REQUEST['cepsaida'];
$status = $_REQUEST['status'];

require("../connections/conn.php");
$sql = "update produtos set titulo='$titulo',subtitulo='$subtitulo',categoria='$categoria',preco='$preco',descricao='$descricao',cepsaida='$cepsaida',status='$status' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../produtos.php'>";
mysqli_close($conn);
?>