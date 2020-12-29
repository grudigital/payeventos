<?php
require ("../connections/conn.php");

$sql="INSERT INTO eventos_categorias (evento,titulo,valor,status) VALUES ('$_POST[evento]','$_POST[titulo]','$_POST[valor]',1)";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../eventos_categorias.php?id=$_POST[evento]'>";
mysqli_close($conn);
?>