<?php
require ("../connections/conn.php");

$sql="INSERT INTO usuarios (nome,cpfcnpj,email,senha,perfil,whatsapp,status,datacadastro) VALUES ('$_POST[nome]','$_POST[cpfcnpj]','$_POST[email]',MD5('$_POST[senha]'),'$_POST[perfil]','$_POST[whatsapp]','$_POST[status]',now())";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../administradores.php'>";
mysqli_close($conn);
?>