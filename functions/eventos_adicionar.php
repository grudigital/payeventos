<?php
require ("../connections/conn.php");

$sql="INSERT INTO eventos (titulo,subtitulo,modalidade,descricao,responsavel,tipo,corfundo,cortitulos,corbotoes,status,datacriacao) VALUES ('$_POST[titulo]','$_POST[subtitulo]','$_POST[modalidade]','$_POST[descricao]','$_POST[responsavel]','$_POST[tipo]','$_POST[corfundo]','$_POST[cortitulos]','$_POST[corbotoes]','$_POST[status]',now())";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../eventos.php'>";
mysqli_close($conn);
?>