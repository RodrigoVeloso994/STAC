<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['notas_n2'])) {
        $notas_n2 = $_POST['notas_n2'];
        $raAlunos = $_POST['raAluno'];
        $dataN2Array = isset($_POST['dataN2']) ? $_POST['dataN2'] : [];
        $idTurma = $_POST['idTurma'];

        $conexao = mysqli_connect("localhost", "root", "", "bd");

        if ($conexao == FALSE) {
            echo "Não foi possível conectar-se ao banco de dados";
            exit;
        }

        // Supondo que você tenha uma tabela chamada 'notas' no banco de dados
        $query = "UPDATE notas SET DataN2 = ?, N2 = ? WHERE RA = ? AND IdTurma = ?";

        // Preparando a declaração
        $stmt = mysqli_prepare($conexao, $query);

        // Associando parâmetros
        mysqli_stmt_bind_param($stmt, "ssss", $dataN2, $nota_n2, $raAluno, $idTurma);

        // Iterando sobre as notas e atualizando no banco de dados
        foreach ($notas_n2 as $key => $nota_n2) {
            $raAluno = $raAlunos[$key];
            $dataN2 = isset($dataN2Array[$key]) ? $dataN2Array[$key] : null;

            // Execute a declaração preparada para cada aluno
            if (!mysqli_stmt_execute($stmt)) {
                // Adicione algum tratamento de erro, se necessário
                echo "Erro ao inserir nota para o aluno com RA: $raAluno";
            } else {
                echo "<script>alert(\"Notas N2 Adicionadas com Sucesso\")
                window.location='../ListaNotas/index.php';;</script>";
            }
        }

        // Fechando a declaração e a conexão
        mysqli_stmt_close($stmt);
        mysqli_close($conexao);


        exit;
    } else {
        echo "Nenhuma nota N2 enviada.";
    }
} else {
    echo "Acesso direto não permitido.";
}
?>
