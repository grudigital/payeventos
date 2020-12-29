<?php
$id = intval($_REQUEST['id']);
$email = $_REQUEST['email'];
$whatsapp = $_REQUEST['whatsapp'];
$facebook = $_REQUEST['facebook'];
$instagram = $_REQUEST['instagram'];

require("../connections/conn.php");
$sql = "update informacoes set email='$email',whatsapp='$whatsapp',facebook='$facebook',instagram='$instagram' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../informacoes.php'>";
mysqli_close($conn);
?>