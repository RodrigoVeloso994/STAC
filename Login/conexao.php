<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php
    $conexao = mysqli_connect("localhost", "root", "", "bd");

    if ($conexao == FALSE)
    {
      echo "Não foi possivel conectar-se ao PhpMyAdmin";
      exit;
    } 
      $cpf=$_POST['cpf'];
      $senha=$_POST['senha'];
    
      // Login do Aluno
      $consulta1 ="select * from loginaluno where cpf = '$cpf' AND senha = '$senha'";

      $resultado1 = mysqli_query($conexao,$consulta1);

      $rowAluno = mysqli_num_rows($resultado1);

      // Login do Professor

      $consulta2 ="select * from loginprofessor where cpf = '$cpf' AND senha = '$senha'";

      $resultado2 = mysqli_query($conexao,$consulta2);

      $rowProf = mysqli_num_rows($resultado2);

       if($rowAluno == 1){
         header("location: ../Aluno/Home/index.html");
       }elseif($rowProf == 1){
         header("location: ../Professor/HomeP/index.html");
       } else{
           echo "<script>alert(\"CPF ou Senha Incorretos !!!\")
           window.location='index.html';;</script>";
         }

 ?>
</body>
</html>