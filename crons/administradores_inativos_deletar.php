<?php
include("../connections/conn.php");
$result = mysqli_query($conn,"delete from usuarios where status = '2' and date(datadesativacao) < (NOW() - INTERVAL 30 DAY)");
?>