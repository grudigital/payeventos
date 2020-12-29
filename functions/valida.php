<?php
session_start();
include_once("../connections/conn.php");
if ((isset($_POST['email'])) && (isset($_POST['senha']))) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $senha = md5($senha);

    $result_usuario = "SELECT * FROM usuarios WHERE email = '$email' && senha = '$senha'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);
    $statususuario = $resultado['status'];

    if ($resultado_usuario && $resultado_usuario->num_rows > 0) {
        if($statususuario == 2){
            echo "<meta http-equiv='refresh' content=0;url='../usuario_em_aprovacao.php'>";
        }else if($statususuario == 1){
            $_SESSION['usuarioId'] = $resultado['id'];
            $_SESSION['usuarioNome'] = $resultado['nome'];
            $_SESSION['usuarioEmail'] = $resultado['email'];
            echo "<meta http-equiv='refresh' content=0;url='../index.php'>";
        }
    } else {
        echo "<meta http-equiv='refresh' content=0;url='../senha-incorreta.php'>";
    }
}
?>