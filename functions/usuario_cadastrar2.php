<?php
require ("../connections/conn.php");
$id = $_REQUEST['id'];
$whatsapp = $_REQUEST['whatsapp'];
$email = $_REQUEST['email'];
$senha = $_REQUEST['senha'];
$status = $_REQUEST['status'];
$perfil = $_REQUEST['perfil'];


$sql = "update usuarios set whatsapp='$whatsapp',email='$email',senha=MD5('$senha'),status='$status',perfil='$perfil' where id='$id'";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}

echo "<meta http-equiv='refresh' content=0;url='../cadastrar_step3.php?id=$id'>";

mysqli_close($conn);
?>