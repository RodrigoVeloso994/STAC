<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Redefinir Senha</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

<body>




    <?php
$conexao = mysqli_connect("localhost", "root", "", "bd");

if ($conexao == FALSE) {
    echo "Não foi possível conectar-se ao PhpMyAdmin";
    exit;
}

// Validar e obter o token da solicitação
$token = mysqli_real_escape_string($conexao, $_GET['token']);

// Verificar se o token existe na tabela LoginAluno
$query = "SELECT * FROM LoginAluno WHERE TokenSenha = '$token'";
$result = mysqli_query($conexao, $query);

if ($result) {
    if (mysqli_num_rows($result) == 1) {
    ?>


    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">





                <form action="atualizarsenha.php" method="post" class="esqsenha">

                    <img src="../images/aLogo Stac.png" id="icon" alt="logo" />

                    <div class="form-group">
                        <b><label for="nova_senha" style="font-size:large;" >Nova Senha:</label></b>
                    <input type="password" class="form-control" name="nova_senha" placeholder="Insira a Nova Senha" required>
                    <input type="hidden" name="token" value="'.$token.'">
                    <br>
                    <button type="submit" class="form-control button">Atualizar Senha</button>
                </div>
                </form>

            </div>
        </div>
    </div>
    <?php
    } else {
        echo "Token inválido.";
    }
} else {
    echo "Erro na consulta ao banco de dados.";
}

mysqli_close($conexao);
?>

</body>

</html>