<!-- precisei criar um php -->
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

    <!-- 
    <label for="theme" class="theme">
        <span class="theme__toggle-wrap">
            <input id="theme" class="theme__toggle" type="checkbox" role="switch" name="change-theme" value="dark">
            <span class="theme__fill"></span>
            <span class="theme__icon">
                <span class="theme__icon-part"></span>
                <span class="theme__icon-part"></span>
                <span class="theme__icon-part"></span>
                <span class="theme__icon-part"></span>
                <span class="theme__icon-part"></span>
                <span class="theme__icon-part"></span>
                <span class="theme__icon-part"></span>
                <span class="theme__icon-part"></span>
                <span class="theme__icon-part"></span>
            </span>
        </span>
    </label> -->


    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="./images/soLogo.png" alt="">
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



                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="../HomeP/index.html">
                            <i class='bx bxs-home icon'></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../AddNotas/ListaNotas/index.php">
                            <i class='bx bx-notepad icon'></i>
                            <span class="text nav-text">Notas</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../AddFaltas/TurmasFalta/index.php"  style="
                        background-color: var(--primary-color);">
                            <i class='bx bx-calendar-check icon'></i>
                            <span class="text nav-text">Chamada</span>
                        </a>
                    </li>
                </ul>
            </div>


            <li class="search-box" s>
            </li>

            <div class="bottom-content">
                <li class="">
                    <a href="../../Login/index.html">
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

    <section class="home">

        <div class="containerr">

        <div class="container-lg">

           <div class="homi">
            

<?php
if (!empty($_GET['idturma'])) {
    $idTurma = $_GET['idturma'];
    $conexao = mysqli_connect("localhost", "root", "", "bd");

    if ($conexao == FALSE)
    {
      echo "Não foi possivel conectar-se ao PhpMyAdmin";
      exit;
    }

    $consultaAulas = "select * from Aulas where idTurma = " . $idTurma." order by NomeAula;";
    $resultado_Aulas = mysqli_query($conexao,$consultaAulas);
}    
?>
            <table>

                <tr>
                <th>Aula</th>
                <th>Conteúdo</th>
                </tr>
<?php

$row = mysqli_num_rows($resultado_Aulas);
if ($row == 0){
        echo "<script>alert(\"Registro não encontrado\")
        window.location='index.php';;</script>";
    } else{
        while( $Aulas = mysqli_fetch_array($resultado_Aulas)){
                       echo "<tr>";
                       echo "<td><a href='../AddFaltas/ListarFaltas/index.php?idturma=$idTurma'>" . $Aulas['NomeAula'] . "</a></td>";
                       echo "<td>". $Aulas['ConteudoAula']."</td></a>";    
                       echo "</tr>";              
        }
    }
?>                
            <!-- </tr>
                <tr>
                  <td><a href="../AddFaltas/ListarFaltas/index.html">Aula 21</a></td>
                    <td>objeto em java</td></a>
                </tr>

                <tr>
                    <td><a href="../AddFaltas/ListarFaltas/index.html">Aula 22</a></td>
                      <td>objeto em java</td></a>
                  </tr>
                  
                  <tr>
                    <td><a href="../AddFaltas/ListarFaltas/index.html">Aula 23</a></td>
                      <td>objeto em java</td></a>
                  </tr>

                  <tr>
                    <td><a href="../AddFaltas/ListarFaltas/index.html">Aula 24</a></td>
                      <td>objeto em java</td></a>
                  </tr>

                  <tr>
                    <td><a href="../AddFaltas/ListarFaltas/index.html">Aula 25</a></td>
                      <td>objeto em java</td></a>
                  </tr>

                  <tr>
                    <td><a href="../AddFaltas/ListarFaltas/index.html">Aula 26</a></td>
                      <td>objeto em java</td></a>
                  </tr>

                  <tr>
                    <td><a href="../AddFaltas/ListarFaltas/index.html">Aula 27</a></td>
                      <td>objeto em java</td></a>
                  </tr> -->




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