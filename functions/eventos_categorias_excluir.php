<?php
$id = intval($_REQUEST['id']);
include("../connections/conn.php");

$sqlbuscaevento = mysqli_query($conn,"select * from eventos_categorias where id = '$id'");
while ($rowbuscaevento = mysqli_fetch_assoc($sqlbuscaevento)){
    $evento = $rowbuscaevento['evento'];
}

$result = mysqli_query($conn,"delete from eventos_categorias where id = '$id' order by id DESC");
if ($result){
    echo "<meta http-equiv='refresh' content=0;url='../eventos_categorias.php?id=$evento'>";
} else {
    echo json_encode(array('msg'=>'Erro ao remover dados.'));
}
?>