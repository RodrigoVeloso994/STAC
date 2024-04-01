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

    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
          <div class="vw-plugin-top-wrapper"></div>
        </div>
      </div>
      <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
      <script>
        new window.VLibras.Widget();
      </script>

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
                        <a href="../Home/index.html" title="Home">
                            <i class='bx bxs-home icon'></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../Notas/index.php" title="Notas">
                            <i class='bx bx-notepad icon'></i>
                            <span class="text nav-text">Notas</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="./index.php" style="
                        background-color: var(--primary-color);" title="Faltas">
                            <i class='bx bx-calendar-check icon'></i>
                            <span class="text nav-text">Faltas</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../Historico/index.php" title="Histórico">
                            <i class='bx bxs-graduation icon'></i>
                            <span class="text nav-text">Histórico</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../Calendario/index.html" title="Calendário">
                            <i class='bx bxs-calendar icon '></i>
                            <span class="text nav-text">Calendário</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../Horario/index.html"title="Horário">
                            <i class='bx bxs-time-five icon'></i>
                            <span class="text nav-text">Horário</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bxs-user icon'></i>
                            <span class="text nav-text">Usuário</span>
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
    
   <?php
   $conexao = mysqli_connect("localhost", "root", "", "bd");
   
   if ($conexao == FALSE) {
       echo "Não foi possível conectar-se ao PhpMyAdmin";
       exit;
   }
   
   //consulta Projeto Integrador I
   $consultaFaltasPI = "SELECT falta FROM faltas WHERE ra = 16 AND idturma = 1";
   $resultado_FaltasPI = mysqli_query($conexao, $consultaFaltasPI);
   $FaltasPI = mysqli_fetch_array($resultado_FaltasPI);
   
   $consultaPresencaPi = "SELECT presenca FROM faltas WHERE ra = 16 AND idturma = 1";
   $resultado_PresencaPi = mysqli_query($conexao, $consultaPresencaPi);
   $PresencaPi = mysqli_fetch_array($resultado_PresencaPi);
   
   // calculo Frequencia 
   $presencasPI = (int)$PresencaPi['presenca'];
   $faltasPI = (int)$FaltasPI['falta'];
   

   $total_aulasPI = $presencasPI + $faltasPI;
   
   // Calculo da frequência em porcentagem
   $frequencia_percentualPI = ($presencasPI / $total_aulasPI) * 100;
   ?>
   
    <section class="home">


        <div class="container-lg"><b>Faltas</b></div>


        <div class="container-lg">

            <div class="cards">
                <div class="card red">
                    <div class="titulo">
                        <h1>Projeto Integrador I</h1>
                    </div>

                    <div class="label-value-pair">
                        <label for="presenca">Presença</label>
                        <label id="presenca-valor"><?php echo $presencasPI; ?></label>
                    </div>

                    <div class="label-value-pair">
                        <label for="ausencia">Ausência</label>
                        <label id="ausencia-valor"><?php echo $faltasPI; ?></label>
                    </div>

                    <div class="label-value-pair">
                        <label for="frequencia">Frequência</label>
                        <label id="frequencia-valor"><?php echo number_format($frequencia_percentualPI, 2) . "%"; ?></label>
                    </div>

                </div>
<?php
   //consulta Técnicas Avançadas de Banco de Dados Relacional e Não Relacional
   $consultaFaltasBD = "SELECT falta FROM faltas WHERE ra = 16 AND idturma = 2";
   $resultado_FaltasBD = mysqli_query($conexao, $consultaFaltasBD);
   $FaltasBD = mysqli_fetch_array($resultado_FaltasBD);
   
   $consultaPresencaBD = "SELECT presenca FROM faltas WHERE ra = 16 AND idturma = 2";
   $resultado_PresencaBD = mysqli_query($conexao, $consultaPresencaBD);
   $PresencaBD = mysqli_fetch_array($resultado_PresencaBD);
   
   // calculo Frequencia 
   $presencasBD = (int)$PresencaBD['presenca'];
   $faltasBD = (int)$FaltasBD['falta'];
   

   $total_aulasBD = $presencasBD + $faltasBD;
   
   // Calculo da frequência em porcentagem
   $frequencia_percentualBD = ($presencasBD / $total_aulasBD) * 100;
   ?>
                <div class="card blue">
                    <div class="titulo">
                        <h1>Técnicas Avançadas de Banco de Dados Relacional e Não Relacional </h1>
                    </div>

                    <div class="label-value-pair">
                        <label for="presenca">Presença</label>
                        <label id="presenca-valor"><?php echo $presencasBD; ?></label>
                    </div>

                    <div class="label-value-pair">
                        <label for="ausencia">Ausência</label>
                        <label id="ausencia-valor"><?php echo $faltasBD; ?></label>
                    </div>

                    <div class="label-value-pair">
                        <label for="frequencia">Frequência</label>
                        <label id="frequencia-valor"><?php echo number_format($frequencia_percentualBD, 2) . "%"; ?></label>
                    </div>

                </div>
<?php
   //consulta Estruturas de Dados
   $consultaFaltasED = "SELECT falta FROM faltas WHERE ra = 16 AND idturma = 3";
   $resultado_FaltasED = mysqli_query($conexao, $consultaFaltasED);
   $FaltasED = mysqli_fetch_array($resultado_FaltasED);
   
   $consultaPresencaED = "SELECT presenca FROM faltas WHERE ra = 16 AND idturma = 3";
   $resultado_PresencaED = mysqli_query($conexao, $consultaPresencaED);
   $PresencaED = mysqli_fetch_array($resultado_PresencaED);
   
   // calculo Frequencia 
   $presencasED = (int)$PresencaED['presenca'];
   $faltasED = (int)$FaltasED['falta'];
   

   $total_aulasED = $presencasED + $faltasED;
   
   // Calculo da frequência em porcentagem
   $frequencia_percentualED = ($presencasED / $total_aulasED) * 100;
   ?>
                <div class="card green">
                    <div class="titulo">
                        <h1>Estruturas de Dados</h1>
                    </div>

                    <div class="label-value-pair">
                        <label for="presenca">Presença</label>
                        <label id="presenca-valor"><?php echo $presencasED; ?></label>
                    </div>

                    <div class="label-value-pair">
                        <label for="ausencia">Ausência</label>
                        <label id="ausencia-valor"><?php echo $faltasED; ?></label>
                    </div>

                    <div class="label-value-pair">
                        <label for="frequencia">Frequência</label>
                        <label id="frequencia-valor"><?php echo number_format($frequencia_percentualED, 2) . "%"; ?></label>
                    </div>
                </div>
                <?php
   //consulta Engenharia de Software
   $consultaFaltasES = "SELECT falta FROM faltas WHERE ra = 16 AND idturma = 4";
   $resultado_FaltasES = mysqli_query($conexao, $consultaFaltasES);
   $FaltasES = mysqli_fetch_array($resultado_FaltasES);
   
   $consultaPresencaES = "SELECT presenca FROM faltas WHERE ra = 16 AND idturma = 4";
   $resultado_PresencaES = mysqli_query($conexao, $consultaPresencaES);
   $PresencaES = mysqli_fetch_array($resultado_PresencaES);
   
   // calculo Frequencia 
   $presencasES = (int)$PresencaES['presenca'];
   $faltasES = (int)$FaltasES['falta'];
   

   $total_aulasES = $presencasES + $faltasES;
   
   // Calculo da frequência em porcentagem
   $frequencia_percentualES = ($presencasES / $total_aulasES) * 100;
   ?>
                <div class="card red">
                    <div class="titulo">
                        <h1>Engenharia de Software</h1>
                    </div>

                    <div class="label-value-pair">
                        <label for="presenca">Presença</label>
                        <label id="presenca-valor"><?php echo $presencasES; ?></label>
                    </div>

                    <div class="label-value-pair">
                        <label for="ausencia">Ausência</label>
                        <label id="ausencia-valor"><?php echo $faltasES; ?></label>
                    </div>

                    <div class="label-value-pair">
                        <label for="frequencia">Frequência</label>
                        <label id="frequencia-valor"><?php echo number_format($frequencia_percentualES, 2) . "%"; ?></label>
                    </div>
                </div>
   <?php
   //consulta Interação Humano Computador
   $consultaFaltasIHC = "SELECT falta FROM faltas WHERE ra = 16 AND idturma = 5";
   $resultado_FaltasIHC = mysqli_query($conexao, $consultaFaltasIHC);
   $FaltasIHC = mysqli_fetch_array($resultado_FaltasIHC);
   
   $consultaPresencaIHC = "SELECT presenca FROM faltas WHERE ra = 16 AND idturma = 5";
   $resultado_PresencaIHC = mysqli_query($conexao, $consultaPresencaIHC);
   $PresencaIHC = mysqli_fetch_array($resultado_PresencaIHC);
   
   // calculo Frequencia 
   $presencasIHC = (int)$PresencaIHC['presenca'];
   $faltasIHC = (int)$FaltasIHC['falta'];
   

   $total_aulasIHC = $presencasIHC + $faltasIHC;
   
   // Calculo da frequência em porcentagem
   $frequencia_percentualIHC = ($presencasIHC / $total_aulasIHC) * 100;
   ?>                
                <div class="card blue">
                    <div class="titulo">
                        <h1>Interação Humano Computador</h1>
                    </div>

                    <div class="label-value-pair">
                        <label for="presenca">Presença</label>
                        <label id="presenca-valor"><?php echo $presencasIHC; ?></label>
                    </div>

                    <div class="label-value-pair">
                        <label for="ausencia">Ausência</label>
                        <label id="ausencia-valor"><?php echo $faltasIHC; ?></label>
                    </div>

                    <div class="label-value-pair">
                        <label for="frequencia">Frequência</label>
                        <label id="frequencia-valor"><?php echo number_format($frequencia_percentualIHC, 2) . "%"; ?></label>
                    </div>
                </div>
<?php
   //consulta Técnicas Avançadas de Programação
   $consultaFaltasTAP = "SELECT falta FROM faltas WHERE ra = 16 AND idturma = 6";
   $resultado_FaltasTAP = mysqli_query($conexao, $consultaFaltasTAP);
   $FaltasTAP = mysqli_fetch_array($resultado_FaltasTAP);
   
   $consultaPresencaTAP = "SELECT presenca FROM faltas WHERE ra = 16 AND idturma = 6";
   $resultado_PresencaTAP = mysqli_query($conexao, $consultaPresencaTAP);
   $PresencaTAP = mysqli_fetch_array($resultado_PresencaTAP);
   
   // calculo Frequencia 
   $presencasTAP = (int)$PresencaTAP['presenca'];
   $faltasTAP = (int)$FaltasTAP['falta'];
   

   $total_aulasTAP = $presencasTAP + $faltasTAP;
   
   // Calculo da frequência em porcentagem
   $frequencia_percentualTAP = ($presencasTAP / $total_aulasTAP) * 100;
   ?>  
                <div class="card green">
                    <div class="titulo">
                        <h1>Técnicas Avançadas de Programação</h1>
                    </div>

                    <div class="label-value-pair">
                        <label for="presenca">Presença</label>
                        <label id="presenca-valor"><?php echo $presencasTAP; ?></label>
                    </div>

                    <div class="label-value-pair">
                        <label for="ausencia">Ausência</label>
                        <label id="ausencia-valor"><?php echo $faltasTAP; ?></label>
                    </div>

                    <div class="label-value-pair">
                        <label for="frequencia">Frequência</label>
                        <label id="frequencia-valor"><?php echo number_format($frequencia_percentualTAP, 2) . "%"; ?></label>
                    </div>
                </div>
<?php
   //consulta Técnicas Avançadas de Programação Web e Mobile
   $consultaFaltasTAPWM = "SELECT falta FROM faltas WHERE ra = 16 AND idturma = 7";
   $resultado_FaltasTAPWM = mysqli_query($conexao, $consultaFaltasTAPWM);
   $FaltasTAPWM = mysqli_fetch_array($resultado_FaltasTAPWM);
   
   $consultaPresencaTAPWM = "SELECT presenca FROM faltas WHERE ra = 16 AND idturma = 7";
   $resultado_PresencaTAPWM = mysqli_query($conexao, $consultaPresencaTAPWM);
   $PresencaTAPWM = mysqli_fetch_array($resultado_PresencaTAPWM);
   
   // calculo Frequencia 
   $presencasTAPWM = (int)$PresencaTAPWM['presenca'];
   $faltasTAPWM = (int)$FaltasTAPWM['falta'];
   

   $total_aulasTAPWM = $presencasTAPWM + $faltasTAPWM;
   
   // Calculo da frequência em porcentagem
   $frequencia_percentualTAPWM = ($presencasTAPWM / $total_aulasTAPWM) * 100;
   ?>  
                <div class="card green">
                    <div class="titulo">
                        <h1>Técnicas Avançadas de Programação Web e Mobile</h1>
                    </div>

                    <div class="label-value-pair">
                        <label for="presenca">Presença</label>
                        <label id="presenca-valor"><?php echo $presencasTAPWM; ?></label>
                    </div>

                    <div class="label-value-pair">
                        <label for="ausencia">Ausência</label>
                        <label id="ausencia-valor"><?php echo $faltasTAPWM; ?></label>
                    </div>

                    <div class="label-value-pair">
                        <label for="frequencia">Frequência</label>
                        <label id="frequencia-valor"><?php echo number_format($frequencia_percentualTAPWM, 2) . "%"; ?></label>
                    </div>
                </div>
                <?php
   //consulta Inteligência Corporativa e Modelos de Negócios na Era Digital
   $consultaFaltasICMNED = "SELECT falta FROM faltas WHERE ra = 16 AND idturma = 8";
   $resultado_FaltasICMNED= mysqli_query($conexao, $consultaFaltasICMNED);
   $FaltasICMNED = mysqli_fetch_array($resultado_FaltasICMNED);
   
   $consultaPresencaICMNED= "SELECT presenca FROM faltas WHERE ra = 16 AND idturma = 8";
   $resultado_PresencaICMNED = mysqli_query($conexao, $consultaPresencaICMNED);
   $PresencaICMNED = mysqli_fetch_array($resultado_PresencaICMNED);
   
   // calculo Frequencia 
   $presencasICMNED = (int)$PresencaICMNED['presenca'];
   $faltasICMNED = (int)$FaltasICMNED['falta'];
   

   $total_aulasICMNED = $presencasICMNED + $faltasICMNED;
   
   // Calculo da frequência em porcentagem
   $frequencia_percentualICMNED = ($presencasICMNED / $total_aulasICMNED) * 100;
   ?> 
                <div class="card green">
                    <div class="titulo">
                        <h1>Inteligência Corporativa e Modelos de Negócios na Era Digital</h1>
                    </div>

                    <div class="label-value-pair">
                        <label for="presenca">Presença</label>
                        <label id="presenca-valor"><?php echo $presencasICMNED; ?></label>
                    </div>

                    <div class="label-value-pair">
                        <label for="ausencia">Ausência</label>
                        <label id="ausencia-valor"><?php echo $faltasICMNED; ?></label>
                    </div>

                    <div class="label-value-pair">
                        <label for="frequencia">Frequência</label>
                        <label id="frequencia-valor"><?php echo number_format($frequencia_percentualICMNED, 2) . "%"; ?></label>
                    </div>
                </div>
                <?php
   //consulta Gestão Ágil de Projetos de Software
   $consultaFaltasGAPS = "SELECT falta FROM faltas WHERE ra = 16 AND idturma = 9";
   $resultado_FaltasGAPS= mysqli_query($conexao, $consultaFaltasGAPS);
   $FaltasGAPS = mysqli_fetch_array($resultado_FaltasGAPS);
   
   $consultaPresencaGAPS= "SELECT presenca FROM faltas WHERE ra = 16 AND idturma = 9";
   $resultado_PresencaGAPS = mysqli_query($conexao, $consultaPresencaGAPS);
   $PresencaGAPS = mysqli_fetch_array($resultado_PresencaGAPS);
   
   // calculo Frequencia 
   $presencasGAPS = (int)$PresencaGAPS['presenca'];
   $faltasGAPS = (int)$FaltasGAPS['falta'];
   

   $total_aulasGAPS = $presencasGAPS + $faltasGAPS;
   
   // Calculo da frequência em porcentagem
   $frequencia_percentualGAPS = ($presencasGAPS / $total_aulasGAPS) * 100;
   ?> 
                <div class="card green">
                    <div class="titulo">
                        <h1>Gestão Ágil de Projetos de Software</h1>
                    </div>

                    <div class="label-value-pair">
                        <label for="presenca">Presença</label>
                        <label id="presenca-valor"><?php echo $presencasGAPS; ?></label>
                    </div>

                    <div class="label-value-pair">
                        <label for="ausencia">Ausência</label>
                        <label id="ausencia-valor"><?php echo $faltasGAPS; ?></label>
                    </div>

                    <div class="label-value-pair">
                        <label for="frequencia">Frequência</label>
                        <label id="frequencia-valor"><?php echo number_format($frequencia_percentualGAPS, 2) . "%"; ?></label>
                    </div>
                </div>
<?php
   //consulta Organização de Computadores e Sistemas Operacionais 
   $consultaFaltasOCSO = "SELECT falta FROM faltas WHERE ra = 16 AND idturma = 10";
   $resultado_FaltasOCSO= mysqli_query($conexao, $consultaFaltasGAPS);
   $FaltasOCSO = mysqli_fetch_array($resultado_FaltasOCSO);
   
   $consultaPresencaOCSO= "SELECT presenca FROM faltas WHERE ra = 16 AND idturma = 10";
   $resultado_PresencaOCSO = mysqli_query($conexao, $consultaPresencaOCSO);
   $PresencaOCSO = mysqli_fetch_array($resultado_PresencaOCSO);
   
   // calculo Frequencia 
   $presencasOCSO = (int)$PresencaOCSO['presenca'];
   $faltasOCSO = (int)$FaltasOCSO['falta'];
   

   $total_aulasOCSO = $presencasOCSO + $faltasOCSO;
   
   // Calculo da frequência em porcentagem
   $frequencia_percentualOCSO = ($presencasOCSO / $total_aulasOCSO) * 100;
   ?> 
                <div class="card green">
                    <div class="titulo">
                        <h1>Organização de Computadores e Sistemas Operacionais </h1>
                    </div>

                    <div class="label-value-pair">
                        <label for="presenca">Presença</label>
                        <label id="presenca-valor"><?php echo $presencasOCSO; ?></label>
                    </div>

                    <div class="label-value-pair">
                        <label for="ausencia">Ausência</label>
                        <label id="ausencia-valor"><?php echo $faltasOCSO; ?></label>
                    </div>

                    <div class="label-value-pair">
                        <label for="frequencia">Frequência</label>
                        <label id="frequencia-valor"><?php echo number_format($frequencia_percentualOCSO, 2) . "%"; ?></label>
                    </div>
                </div>

                <?php
   //consulta Matemática Discreta
   $consultaFaltasMD = "SELECT falta FROM faltas WHERE ra = 16 AND idturma = 11";
   $resultado_FaltasMD= mysqli_query($conexao, $consultaFaltasMD);
   $FaltasMD = mysqli_fetch_array($resultado_FaltasMD);
   
   $consultaPresencaMD= "SELECT presenca FROM faltas WHERE ra = 16 AND idturma = 11";
   $resultado_PresencaMD = mysqli_query($conexao, $consultaPresencaMD);
   $PresencaMD = mysqli_fetch_array($resultado_PresencaMD);
   
   // calculo Frequencia 
   $presencasMD = (int)$PresencaMD['presenca'];
   $faltasMD = (int)$FaltasMD['falta'];
   

   $total_aulasMD = $presencasMD + $faltasMD;
   
   // Calculo da frequência em porcentagem
   $frequencia_percentualMD = ($presencasMD / $total_aulasMD) * 100;
   ?> 
                <div class="card green">
                    <div class="titulo">
                        <h1>Matemática Discreta</h1>
                    </div>

                    <div class="label-value-pair">
                        <label for="presenca">Presença</label>
                        <label id="presenca-valor"><?php echo $presencasMD; ?></label>
                    </div>

                    <div class="label-value-pair">
                        <label for="ausencia">Ausência</label>
                        <label id="ausencia-valor"><?php echo $faltasMD; ?></label>
                    </div>

                    <div class="label-value-pair">
                        <label for="frequencia">Frequência</label>
                        <label id="frequencia-valor"><?php echo number_format($frequencia_percentualMD, 2) . "%"; ?></label>
                    </div>
                </div>

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