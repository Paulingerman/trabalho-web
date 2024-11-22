<?php
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'web');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $consultas_id = mysqli_real_escape_string($conexao, $_POST['consultas_id']);
    $paciente_id = mysqli_real_escape_string($conexao, $_POST['paciente_id']);
    $medico_id = mysqli_real_escape_string($conexao, $_POST['medico_id']);
    $chat = mysqli_real_escape_string($conexao, $_POST['chat']);
    $documento = mysqli_real_escape_string($conexao, $_POST['documento']);

    $sql = "INSERT INTO chat (consultas_id, paciente_id, medico_id, chat, documento) 
            VALUES ('$consultas_id', '$paciente_id', '$medico_id', '$chat', '$documento')";
    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
}
?>
