<?php
$id = intval($_REQUEST['id']);
include("../connections/conn.php");
$buscaitem = mysqli_query($conn,"select id,item from eventos_kit_variacoes where id = '$id'");
$result = mysqli_query($conn,"delete from eventos_kit_variacoes where id = '$id' order by id DESC");
if ($result){
    while ($rowbuscaitem = mysqli_fetch_assoc($buscaitem)) {
        echo "<meta http-equiv='refresh' content=0;url='../kits_itens_variacoes.php?id=$rowbuscaitem[item]'>";
    }
} else {
    echo json_encode(array('msg'=>'Erro ao remover dados.'));
}
?>