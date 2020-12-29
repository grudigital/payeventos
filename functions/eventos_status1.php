<?php
require ("../connections/conn.php");
$id = $_REQUEST['id'];

$sql = "update eventos set status='2' where id='$id'";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../eventos.php'>";

mysqli_close($conn);
?>