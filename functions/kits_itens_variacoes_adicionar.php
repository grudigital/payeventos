<?php
require ("../connections/conn.php");

$sql="INSERT INTO eventos_kit_variacoes (item,variacao) VALUES ('$_POST[item]','$_POST[variacao]')";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../kits_itens_variacoes.php?id=$_POST[item]'>";
mysqli_close($conn);
?>