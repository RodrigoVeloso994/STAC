<!-- precisei fazer um php desse aq -->
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
                        <a href="../ListaNotas/index.php" style="
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
    <div class="homi">

        <button class="learn-more" onclick="irParaPaginaa('../AddNotas/ListaNotas/index.php')">
            <span class="circle" aria-hidden="true">
            <span class="icon arrow"></span>
            </span>
            <span class="button-text">Voltar</span>
          </button>

<!-- inserir notas-->
<?php
if (!empty($_GET['idturma'])) {
    $idTurma = $_GET['idturma'];

    $conexao = mysqli_connect("localhost", "root", "", "bd");

    if ($conexao == FALSE) {
        echo "Não foi possível conectar-se ao PhpMyAdmin";
        exit;
    }

    $consultaAlunos = "SELECT * FROM aluno ORDER BY Nome";

    $resultado_Alunos = mysqli_query($conexao, $consultaAlunos);

    $row = mysqli_num_rows($resultado_Alunos);

    if ($row == 0) {
        echo "<script>alert('Os Alunos não foram encontrados'); window.location='index.php';</script>";
    } else {
        ?>

        




       
        <form id="FormNotas" action = "cadastrar.php" method="post">
            <?php
            while ($Alunos = mysqli_fetch_array($resultado_Alunos)) {
                ?>

                <div class='tab'>
                    <h4 class='aa' style='color: #ffffff;'>Inserir notas N1</h4>

                    <div class='form__group field'>
                        <input type='input' class='form__field' placeholder='Nome do Aluno'  value="<?= $Alunos['Nome'] ?>">
                        <label for='name' class='form__label'>Nome do Aluno</label>
                    </div>

                    <div class='form__group field'>
                        <input type='number' class='form__field' placeholder='RA do Aluno' readonly value="<?= $Alunos['RA'] ?>">
                        <label for='name' class='form__label'>Rm do Aluno</label>
                    </div>

                    <div class='form__group field' style='display: flex;'>
                        <div class='form__field' style='flex: 1;'>
                            <input type='date' class='form__input' name="dataN1[]"     placeholder='Data da N1' required>
                            <label for='name' class='form__label'>Data N1</label>
                        </div>

                        <div class='form__field' style='flex: 1;'>
                        <input type='hidden' name='raAluno[]' value='<?= $Alunos['RA'] ?>'>
                        <input type='hidden' name='idTurma' value='<?= $idTurma ?>'>
                            <input type='number' class='form__input' name="notas_n1[]" placeholder='Nota da N1' required>
                            <label for='name' class='form__label'>Nota N1</label>
                        </div>

                    </div>

                    <div class='form__group field'>
                        <button class='buttonn' id='prevBtn' onclick='nextPrev(-1)'>Voltar</button>
                        <button class='buttonn' id='nextBtn' onclick='nextPrev(1)' style='left: 40%;'>Próximo</button>
                    </div>
                </div>
                <?php
            }
            ?>
        </form>
        <?php
    }
}
?>







        <!-- botoes pra add notas -->
        <div class="blure">
        </div>
        </div>

        
    </section>

    <script>

        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = document.querySelector(".mode-text");

        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });

        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
        });

        let currentTab = 0;
        showTab(currentTab);

        function irParaPagina(pagina) {
            // Redirecionar para a página desejada
            window.location.href = pagina;
        }

        function toggleTheme() {
            const isDarkMode = body.classList.contains('dark');

            if (isDarkMode) {
                body.classList.remove('dark');
                modeText.innerText = 'Dark mode';
            } else {
                body.classList.add('dark');
                modeText.innerText = 'Light mode';
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            // Função para mostrar o formulário ao clicar no botão "Add N1"
            function mostrarFormulario() {
                var formNotas = document.getElementById('FormNotas');
                formNotas.style.opacity = 1;
                document.querySelector('.blure').classList.add('blur');
                formNotas.classList.add('slide-in-elliptic-top-fwd');
                showTab(0); // Certifique-se de exibir a primeira etapa ao mostrar o formulário
            }

            // Adiciona um ouvinte de evento ao botão "Add N1"
            var botaoAddN1 = document.getElementById('Mostra');
            botaoAddN1.addEventListener('click', mostrarFormulario);
        });

        function irParaPaginaa() {
        window.location.href = '../ListaNotas/index.php';
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

        function showTab(n) {
            var x = document.getElementsByClassName("tab");
            if (n >= x.length) return; // Adicione esta linha para evitar um erro quando n é maior ou igual ao comprimento de x

            // Oculta todas as abas
            for (var i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }

            // Exibe a aba específica
            x[n].style.display = "block";

            // Atualiza a visibilidade dos botões com base na etapa atual
            if (n === 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }

            if (n === x.length - 1) {
                document.getElementById("nextBtn").innerHTML = "Enviar";
            } else {
                document.getElementById("nextBtn").innerHTML = "Próximo";
            }
        }
        function nextPrev(n) {
            // Esta função determinará qual etapa exibir
            var x = document.getElementsByClassName("tab");

            // Oculta a etapa atual
            x[currentTab].style.display = "none";

            // Aumenta ou diminui a etapa atual
            currentTab += n;

            // Se você chegou ao final do formulário, o formulário é enviado
            if (currentTab >= x.length) {
                // Adiciona esta linha para evitar a recarga da página
                event.preventDefault();
                document.getElementById("FormNotas").submit();
                return false;
            }

            // Caso contrário, exibe a próxima etapa
            showTab(currentTab);

            return false; // Adiciona esta linha para evitar a recarga da página
        }


        function validateForm() {
            const tabs = document.getElementsByClassName("tab");
            const currentInputs = tabs[currentTab].getElementsByTagName("input");
            for (let i = 0; i < currentInputs.length; i++) {
                if (currentInputs[i].value === "") {
                    currentInputs[i].classList.add("invalid");
                    return false;
                }
            }
            document.getElementsByClassName("step")[currentTab].classList.add("finish");
            return true;
        }




    </script>

</body>

</html>