<?php
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'web');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $paciente_id = mysqli_real_escape_string($conexao, $_POST['paciente_id']);
    $medico_id = mysqli_real_escape_string($conexao, $_POST['medico_id']);
    $agendamentos_id = mysqli_real_escape_string($conexao, $_POST['agendamentos_id']);
    $data_hora_consulta = mysqli_real_escape_string($conexao, $_POST['data_hora_consulta']);
    $descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);

    $sql = "INSERT INTO consultas (paciente_id, medico_id, agendamentos_id, data_hora_consulta, descrição) 
            VALUES ('$paciente_id', '$medico_id', '$agendamentos_id', '$data_hora_consulta', '$descricao')";
    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
}
?>
