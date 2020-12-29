<?php
$id = intval($_REQUEST['id']);
$titulo = $_REQUEST['titulo'];
$subtitulo = $_REQUEST['subtitulo'];
$modalidade = $_REQUEST['modalidade'];
$descricao = $_REQUEST['descricao'];
$corfundo = $_REQUEST['corfundo'];
$cortitulos = $_REQUEST['cortitulos'];
$corbotoes = $_REQUEST['corbotoes'];
$tipo = $_REQUEST['tipo'];

require("../connections/conn.php");
$sql = "update eventos set titulo='$titulo',subtitulo='$subtitulo',modalidade='$modalidade',descricao='$descricao',corfundo='$corfundo',cortitulos='$cortitulos',corbotoes='$corbotoes',tipo='$tipo' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../eventos.php'>";
mysqli_close($conn);
?>