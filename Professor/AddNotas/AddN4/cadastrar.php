<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['notas_4'])) {
        $notas_n4 = $_POST['notas_4'];
        $raAlunos = $_POST['raAluno'];
        $dataN4Array = isset($_POST['dataN4']) ? $_POST['dataN4'] : [];
        $idTurma = $_POST['idTurma'];

        $conexao = mysqli_connect("localhost", "root", "", "bd");

        if ($conexao == FALSE) {
            echo "Não foi possível conectar-se ao banco de dados";
            exit;
        }

        // Supondo que você tenha uma tabela chamada 'notas' no banco de dados
        $query = "UPDATE notas SET DataN4 = ?, N4 = ? WHERE RA = ? AND IdTurma = ?";

        // Preparando a declaração
        $stmt = mysqli_prepare($conexao, $query);

        // Associando parâmetros
        mysqli_stmt_bind_param($stmt, "ssss", $dataN4, $nota_n4, $raAluno, $idTurma);

        // Iterando sobre as notas e atualizando no banco de dados
        foreach ($notas_n4 as $key => $nota_n4) {
            $raAluno = $raAlunos[$key];
            $dataN4 = isset($dataN4Array[$key]) ? $dataN4Array[$key] : null;

            // Execute a declaração preparada para cada aluno
            if (!mysqli_stmt_execute($stmt)) {
                // Adicione algum tratamento de erro, se necessário
                echo "Erro ao inserir nota para o aluno com RA: $raAluno";
            } else {
                echo "<script>alert(\"Notas N4 Adicionadas com Sucesso\")
                window.location='../ListaNotas/index.php';;</script>";
            }
        }

        // Fechando a declaração e a conexão
        mysqli_stmt_close($stmt);
        mysqli_close($conexao);

        exit;
    } else {
        echo "Nenhuma nota N4 enviada.";
    }
} else {
    echo "Acesso direto não permitido.";
}
?>
