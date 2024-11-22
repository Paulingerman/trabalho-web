<?php
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'web');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuarios_id = mysqli_real_escape_string($conexao, $_POST['usuarios_id']);
    $cpf = mysqli_real_escape_string($conexao, $_POST['cpf']);
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $telefone = mysqli_real_escape_string($conexao, $_POST['telefone']);

    $sql = "INSERT INTO pessoas (usuarios_id, cpf, nome, telefone) 
            VALUES ('$usuarios_id', '$cpf', '$nome', '$telefone')";
    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
}
?>
