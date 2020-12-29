<?php
$id = intval($_REQUEST['id']);
$evento = $_REQUEST['evento'];
$titulo = $_REQUEST['titulo'];
$valor = $_REQUEST['valor'];

require("../connections/conn.php");
$sql = "update eventos_categorias set titulo='$titulo',valor='$valor' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../eventos_categorias.php?id=$evento'>";
mysqli_close($conn);
?>