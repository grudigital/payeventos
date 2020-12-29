<?php
$id = intval($_REQUEST['id']);
$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$whatsapp = $_REQUEST['whatsapp'];

require("../connections/conn.php");
$sql = "update usuarios set nome='$nome',email='$email',whatsapp='$whatsapp' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../editar_perfil.php'>";
mysqli_close($conn);
?>