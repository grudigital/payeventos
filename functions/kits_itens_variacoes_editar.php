<?php
$id = intval($_REQUEST['id']);
$item = $_REQUEST['item'];
$variacao = $_REQUEST['variacao'];

require("../connections/conn.php");
$sql = "update eventos_kit_variacoes set variacao='$variacao' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../kits_itens_variacoes.php?id=$item'>";
mysqli_close($conn);
?>