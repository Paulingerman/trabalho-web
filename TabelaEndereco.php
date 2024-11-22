<?php
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'web');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pessoas_id = mysqli_real_escape_string($conexao, $_POST['pessoas_id']);
    $cep = mysqli_real_escape_string($conexao, $_POST['CEP']);
    $logradouro = mysqli_real_escape_string($conexao, $_POST['Logradouro']);
    $numero = mysqli_real_escape_string($conexao, $_POST['Número']);
    $complemento = mysqli_real_escape_string($conexao, $_POST['Complemento']);
    $bairro = mysqli_real_escape_string($conexao, $_POST['Bairro']);
    $cidade = mysqli_real_escape_string($conexao, $_POST['Cidade']);
    $estado = mysqli_real_escape_string($conexao, $_POST['Estado']);

    $sql = "INSERT INTO endereco (pessoas_id, CEP, Logradouro, Número, Complemento, Bairro, Cidade, Estado) 
            VALUES ('$pessoas_id', '$cep', '$logradouro', '$numero', '$complemento', '$bairro', '$cidade', '$estado')";
    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
}
?>
