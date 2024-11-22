<?php
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'web');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $consultas_id = mysqli_real_escape_string($conexao, $_POST['consultas_id']);
    $paciente_id = mysqli_real_escape_string($conexao, $_POST['paciente_id']);
    $medico_id = mysqli_real_escape_string($conexao, $_POST['medico_id']);
    $chat_id = mysqli_real_escape_string($conexao, $_POST['chat_id']);
    $data_hora_consulta = mysqli_real_escape_string($conexao, $_POST['data_hora_consulta']);
    $descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
    $status = mysqli_real_escape_string($conexao, $_POST['status']);

    $sql = "INSERT INTO historico (Consultas_id, paciente_id, medico_id, chat_id, data_hora_consulta, descrição, status) 
            VALUES ('$consultas_id', '$paciente_id', '$medico_id', '$chat_id', '$data_hora_consulta', '$descricao', '$status')";
    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
}
?>
