<?php
$id = intval($_REQUEST['id']);
$modalidade = $_REQUEST['modalidade'];

require("../connections/conn.php");
$sql = "update eventos_modalidades set modalidade='$modalidade' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../eventos_modalidades.php'>";
mysqli_close($conn);
?>