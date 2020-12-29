<?php
require ("../connections/conn.php");

    $sql="INSERT INTO usuarios (nome,cpfcnpj,estado,datacadastro) VALUES ('$_POST[nome]','$_POST[cpfcnpj]','$_POST[estado]',now())";
    if (!mysqli_query($conn,$sql))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $pegaultimoid="select * from usuarios order by id desc limit 1";
    $resultadoultimoid = mysqli_query($conn, $pegaultimoid);
    while ($rowultimoid = mysqli_fetch_assoc($resultadoultimoid)) {
        echo "<meta http-equiv='refresh' content=0;url='../cadastrar_step2.php?id=$rowultimoid[id]'>";
    }
mysqli_close($conn);
?>