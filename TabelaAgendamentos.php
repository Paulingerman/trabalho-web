<?php
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'web');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $medico_id = mysqli_real_escape_string($conexao, $_POST['medico_id']);
    $data_hora_agendamento = mysqli_real_escape_string($conexao, $_POST['data_hora_agendamento']);
    $status = mysqli_real_escape_string($conexao, $_POST['status']);

    $sql = "INSERT INTO agendamentos (medico_id, data_hora_agendamento, status) 
            VALUES ('$medico_id', '$data_hora_agendamento', '$status')";
    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
}
?>
