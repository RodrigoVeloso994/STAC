<?php
$conexao = mysqli_connect("localhost", "root", "", "bd");

if ($conexao == FALSE) {
    echo "<script>alert('Não foi possível conectar-se ao PhpMyAdmin');</script>";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validar e obter o token e a nova senha do formulário
    $token = mysqli_real_escape_string($conexao, $_POST['token']);
    $nova_senha = mysqli_real_escape_string($conexao, $_POST['nova_senha']);

    // Atualizar a senha na tabela LoginAluno
    $update_query = "UPDATE LoginAluno SET Senha = '$nova_senha', TokenSenha = NULL WHERE TokenSenha = '$token'";
    $update_result = mysqli_query($conexao, $update_query);

    if ($update_result) {
        echo "<script>alert(\"Senha Alterada com Sucesso !!!\")
        window.location='../index.html';</script>";
    } else {
        echo "<script>alert('Erro ao atualizar a senha no banco de dados.');</script>";
    }

    mysqli_close($conexao);
}
?>
