<?php
require ("../connections/conn.php");

$sql="INSERT INTO eventos_categorias_kits (categoria,item,quantidade) VALUES ('$_POST[categoria]','$_POST[item]','$_POST[quantidade]')";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../eventos_categorias_kits.php?id=$_POST[categoria]'>";
mysqli_close($conn);
?>