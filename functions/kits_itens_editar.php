<?php
$id = intval($_REQUEST['id']);
$item = $_REQUEST['item'];

require("../connections/conn.php");
$sql = "update eventos_kit_item set item='$item' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../kits_itens.php'>";
mysqli_close($conn);
?>