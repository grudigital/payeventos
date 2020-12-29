<?php
$id = intval($_REQUEST['id']);
require("../connections/conn.php");

$pegaproduto = "select p.id pid, pi.id piid, pi.produto piproduto, pi.imagem piimagem from produtos as p inner join produtos_imagens as pi on p.id = pi.produto where pi.id = '$id'";
$resultpegaproduto = mysqli_query($conn, $pegaproduto);

while ($rowpegaproduto = mysqli_fetch_assoc($resultpegaproduto)) {
    $imagemproduto = $rowpegaproduto['piimagem'];
    $idproduto = $rowpegaproduto['pid'];
}

$sql = "update produtos set imagem='$imagemproduto' where id='$idproduto'";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../produtos_fotos.php?id=$idproduto'>";

mysqli_close($conn);
?>