<?php
require ("../connections/conn.php");

$sql="INSERT INTO eventos_modalidades (modalidade) VALUES ('$_POST[modalidade]')";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../eventos_modalidades.php'>";
mysqli_close($conn);
?>