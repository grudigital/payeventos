<?php
require ("../connections/conn.php");
$id = $_REQUEST['id'];

$sqlbuscaevento = mysqli_query($conn,"select * from eventos_categorias where id = '$id'");
while ($rowbuscaevento = mysqli_fetch_assoc($sqlbuscaevento)){
    $evento = $rowbuscaevento['evento'];
}

$sql = "update eventos_categorias set status='2' where id='$id'";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../eventos_categorias.php?id=$evento'>";

mysqli_close($conn);
?>