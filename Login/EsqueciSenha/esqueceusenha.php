<?php
$conexao = mysqli_connect("localhost", "root", "", "bd");

if ($conexao == FALSE) {
    echo "<script>alert('Não foi possível conectar-se ao PhpMyAdmin');</script>";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validar e obter o CPF e RA do formulário
    $cpf = mysqli_real_escape_string($conexao, $_POST['cpf']);
    $ra = mysqli_real_escape_string($conexao, $_POST['ra']);

    // Verificar se o CPF e RA existem na tabela LoginAluno
    $query = "SELECT * FROM LoginAluno WHERE CPF = '$cpf' AND RA = '$ra'";
    $result = mysqli_query($conexao, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            // Gerar um token único
            $token = bin2hex(random_bytes(32));

            // Armazenar o token na tabela LoginAluno
            $update_query = "UPDATE LoginAluno SET TokenSenha = '$token' WHERE CPF = '$cpf' AND RA = '$ra'";
            $update_result = mysqli_query($conexao, $update_query);

            if ($update_result) {
                // Redirecionar o usuário para a página de redefinição de senha com o token
                echo "<script>window.location='redefinirsenha.php?token=$token';</script>";
                exit;
            } else {
                echo "<script>alert('Erro ao atualizar o token no banco de dados.');</script>";
            }
        } else {
            echo "<script>alert('CPF e RA não encontrados.');</script>";
        }
    } else {
        echo "<script>alert('Erro na consulta ao banco de dados: " . mysqli_error($conexao) . "');</script>";
    }

    mysqli_close($conexao);
}
?>
