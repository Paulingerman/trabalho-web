<?php
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'web');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pessoas_id = mysqli_real_escape_string($conexao, $_POST['pessoas_id']);
    $crm = mysqli_real_escape_string($conexao, $_POST['crm']);
    $especialidade = mysqli_real_escape_string($conexao, $_POST['especialidade']);

    $sql = "INSERT INTO medico (pessoas_id, crm, especialidade) 
            VALUES ('$pessoas_id', '$crm', '$especialidade')";
    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
}
?>
