<?php
$id = intval($_REQUEST['id']);
include("../connections/conn.php");

$sqlbuscaevento = mysqli_query($conn,"select e.id eid, e.titulo etitulo, ec.id ecid, ec.evento ecevento, ec.titulo ectitulo, eck.id eckid, eck.categoria eckcategoria, eck.item eckitem, eck.quantidade eckquantidade, eki.id ekiid, eki.item ekiitem from eventos as e inner join eventos_categorias as ec on e.id = ec.evento left join eventos_categorias_kits as eck on ec.id = eck.categoria left join eventos_kit_item as eki on eck.item = eki.id where eck.id = '$id'");
while ($rowbuscaevento = mysqli_fetch_assoc($sqlbuscaevento)){
    $categoriaevento = $rowbuscaevento['ecid'];
}

$result = mysqli_query($conn,"delete from eventos_categorias_kits where id = '$id' order by id DESC");
if ($result){
    echo "<meta http-equiv='refresh' content=0;url='../eventos_categorias_kits.php?id=$categoriaevento'>";
} else {
    echo json_encode(array('msg'=>'Erro ao remover dados.'));
}
?>