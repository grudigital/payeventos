<?php
$id = intval($_REQUEST['id']);
$mercadopago_token = $_REQUEST['mercadopago_token'];
$mercadopago_codigo = $_REQUEST['mercadopago_codigo'];
$paypal_token = $_REQUEST['paypal_token'];
$paypal_codigo = $_REQUEST['paypal_codigo'];

require("../connections/conn.php");
$sql = "update pagamento set mercadopago_token='$mercadopago_token',mercadopago_codigo='$mercadopago_codigo',paypal_token='$paypal_token',paypal_codigo='$paypal_codigo' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../pagamento.php'>";
mysqli_close($conn);
?>