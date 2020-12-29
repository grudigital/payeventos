<?php
require ("../connections/conn.php");

$sql="INSERT INTO produtos (titulo,subtitulo,categoria,preco,descricao,responsavel,cepsaida,status,datacriacao) VALUES ('$_POST[titulo]','$_POST[subtitulo]','$_POST[categoria]','$_POST[preco]','$_POST[descricao]','$_POST[responsavel]','$_POST[cepsaida]','$_POST[status]',now())";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../produtos.php'>";
mysqli_close($conn);
?>