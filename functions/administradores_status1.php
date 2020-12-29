<?php
require ("../connections/conn.php");
$id = $_REQUEST['id'];

$sql = "update usuarios set status='2', datadesativacao=now() where id='$id'";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../administradores.php'>";

mysqli_close($conn);
?>