<?php
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'web');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $sql = "INSERT INTO usuarios (email, senha, data_cadastro, ativo, tipo_perfil) 
            VALUES ('$email', '$senha', NOW(), 0, 0)";
    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
}
?>
