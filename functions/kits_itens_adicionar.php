<?php
require ("../connections/conn.php");

$sql="INSERT INTO eventos_kit_item (item) VALUES ('$_POST[item]')";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../kits_itens.php'>";
mysqli_close($conn);
?>