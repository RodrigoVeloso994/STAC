<!-- precisei criar um php pra fazer esse -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!--<title>Dashboard Sidebar Menu</title>-->
</head>

<body class="dark">


    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../images/soLogo.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">STAC</span>
                    <span class="profession">Sistema Academico</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">



                <class class="menu-links">
                    <li class="nav-link">
                        <a href="../../HomeP/index.html">
                            <i class='bx bxs-home icon'></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="./index.php" style="
                        background-color: var(--primary-color);">
                            <i class='bx bx-notepad icon'></i>
                            <span class="text nav-text">Notas</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../../AddFaltas/TurmasFalta/index.php">
                            <i class='bx bx-calendar-check icon'></i>
                            <span class="text nav-text">Chamada</span>
                        </a>
                    </li>
                </class>

            </div>
            <li class="search-box" s>
            </li>

            <div class="bottom-content">
                <li class="">
                    <a href="../../../Login/index.html">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>

    </nav>

    <?php
    $conexao = mysqli_connect("localhost", "root", "", "bd");

    if ($conexao == FALSE)
    {
      echo "Não foi possivel conectar-se ao PhpMyAdmin";
      exit;
    }

    $consultaIdTurma = "select * from Turma where idProf = 1 order by idTurma;";
    $resultado_idTurma = mysqli_query($conexao,$consultaIdTurma);
    
?>
    
    <section class="home">


        <div class="container-lg">




            <div class="wrapper">
                <div class="circle-1"></div>
                <div class="circle-2"></div>
                <div class="card">
                  <section class="bottom">
                    <ul class="users">
                      
                    <center>
                    <span class="user-name" >ADS AMS 4 - Notas</span>   
                    </center>
                        
                        
                        

<?php

$row = mysqli_num_rows($resultado_idTurma);
if ($row == 0){
        echo "<script>alert(\"Registro não encontrado\")
        window.location='index.php';;</script>";
    } else{
        while( $turmas = mysqli_fetch_array($resultado_idTurma)){
                       echo "<a class='user' href = '../index.php?idturma=$turmas[IdTurma]'>";
                       echo " <span class='user-occupation'>". $turmas['IdTurma'] . "-". "</span>" ;    
                       echo " <span class='user-occupation'>". $turmas['NomeTurma'] .  "</span>" ;
                       echo "</a>";                    
        }
    }
?>
</ul>   
                  </section>
                </div>
                </div>

        </div>


    </section>

    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");



        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })

        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
        })


        function irParaPagina(pagina) {
        // Redirecionar para a página desejada
        window.location.href = pagina;
    }

        function toggleTheme() {
            const body = document.querySelector('body');
            const modeText = document.querySelector('.mode-text');

            // Verifique se o modo atual é escuro
            const isDarkMode = body.classList.contains('dark');

            // Alterne o modo
            if (isDarkMode) {
                body.classList.remove('dark');
                modeText.innerText = 'Dark mode';
            } else {
                body.classList.add('dark');
                modeText.innerText = 'Light mode';
            }
        }

        // Adicione um ouvinte de evento ao botão de alternância de tema, se necessário
        const themeToggleButton = document.querySelector('.theme-toggle-button');

        if (themeToggleButton) {
            themeToggleButton.addEventListener('click', toggleTheme);
        }

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerText = "Light mode";
            } else {
                modeText.innerText = "Dark mode";

            }
        });
    </script>

</body>

</html>