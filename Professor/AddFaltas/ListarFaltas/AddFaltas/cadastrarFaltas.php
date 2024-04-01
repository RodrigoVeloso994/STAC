<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar ao banco de dados
    $conexao = mysqli_connect("localhost", "root", "", "bd");

    if ($conexao == FALSE) {
        echo "Não foi possível conectar-se ao PhpMyAdmin";
        exit;
    }

    // Obter os dados do formulário
    $raAlunos = $_POST['ra'];
    $idTurma = $_POST['idTurma'];
    $presencas = $_POST['presenca'];

    // Loop para percorrer cada aluno
    foreach ($raAlunos as $index => $ra) {
        $presenca = $presencas[$index];

        // Consultar o banco de dados para verificar se já existe um registro para este aluno na turma
        $consultaAtual = "SELECT * FROM faltas WHERE RA = $ra AND IdTurma = $idTurma";
        $resultadoAtual = mysqli_query($conexao, $consultaAtual);

        if (mysqli_num_rows($resultadoAtual) > 0) {
            // Se o aluno já tiver registros, atualize-os
            $atualizarQuery = "UPDATE faltas SET Presenca = Presenca + $presenca, Falta = GREATEST(0, 4 - (Presenca + $presenca)) WHERE RA = $ra AND IdTurma = $idTurma";
            mysqli_query($conexao, $atualizarQuery);
        } else {
            // Se o aluno não tiver registros, insira um novo registro
            $novaFalta = max(0, 4 - $presenca);

            $inserirQuery = "INSERT INTO faltas (Falta, Presenca, RA, IdTurma) VALUES ($novaFalta, $presenca, $ra, $idTurma)";
            mysqli_query($conexao, $inserirQuery);
        }
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($conexao);

    // Redirecionar para a página inicial ou exibir uma mensagem de sucesso
    echo "<script>alert('Faltas e presenças cadastradas com sucesso.'); window.location='../../TurmasFalta/index.php';</script>";
} else {
    // Se o método de requisição não for POST, redirecionar para a página inicial
    header("Location: index.php");
    exit();
}
?>


