<?php
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'web');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pessoas_id = mysqli_real_escape_string($conexao, $_POST['pessoas_id']);
    $data_pontuario = mysqli_real_escape_string($conexao, $_POST['data_pontuario']);

    $sql = "INSERT INTO paciente (pessoas_id, data_pontuario) 
            VALUES ('$pessoas_id', '$data_pontuario')";
    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
}
?>
