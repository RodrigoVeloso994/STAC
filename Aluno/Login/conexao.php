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

      $consulta ="select * from login where cpf = '$cpf' AND senha = '$senha'";

      $resultado = mysqli_query($conexao,$consulta);

      $row = mysqli_num_rows($resultado);

      if($row == 1){
        header("location: ../Home/index.html");
      } else{
          echo "<script>alert(\"Registro Não Autenticado\")
          window.location='index.html';;</script>";
        }

    
// $login_gestor = "30330";
// $login_rh = "30008";

//   if($chapa == $login_gestor AND $row == 1){

//           header("location: tela_home_gestor.html");
//         }
//         elseif ($chapa == $login_rh AND $row == 1){
//           header("location: tela_home.html");
//         } else{
//           echo "<script>alert(\"Registro Não Autenticado\")
//           window.location='index.html';;</script>";
//         }
        
      
 ?>
</body>
</html>