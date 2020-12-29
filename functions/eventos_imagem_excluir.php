<?php
$id = intval($_REQUEST['id']);
include("../connections/conn.php");

$pegaevento = "select e.id eid, ei.id eiid, ei.evento eievento, ei.imagem eiimagem from eventos as e inner join eventos_imagens as ei on e.id = ei.evento where ei.id = '$id'";
$resultpegaevento= mysqli_query($conn, $pegaevento);

while ($rowpegaevento = mysqli_fetch_assoc($resultpegaevento)) {
    $imagemevento = $rowpegaevento['eiimagem'];
    $idevento = $rowpegaevento['eid'];
}

$sql = "delete from eventos_imagens where id ='$id'";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../eventos_fotos.php?id=$idevento'>";

mysqli_close($conn);
?>
