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
                        <a href="../Home/index.html"title="Home">
                            <i class='bx bxs-home icon'></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../Notas/index.php"title="Notas">
                            <i class='bx bx-notepad icon'></i>
                            <span class="text nav-text">Notas</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../Faltas/index.php"title="Faltas">
                            <i class='bx bx-calendar-check icon'></i>
                            <span class="text nav-text">Faltas</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="./index.php"style="
                        background-color: var(--primary-color);"title="Histórico">
                            <i class='bx bxs-graduation icon'></i>
                            <span class="text nav-text">Histórico</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../Calendario/index.html"title="Calendário">
                            <i class='bx bxs-calendar icon'></i>
                            <span class="text nav-text">Calendário</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../Horario/index.html"title="Horário">
                            <i class='bx bxs-time-five icon'></i>
                            <span class="text nav-text">Horário</span>
                        </a>
                    </li>
                    <li class="nav-link" id="user-section">
                      <a href="#" class="user-link"title="Usuário">
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

    <section class="home">

      <div class="user-popup">
        <div class="user-info">
            <img src="./images/leo.jpg" alt="Foto do Aluno">
            <p class="aluno-nome">Leonardo Capra Mucci</p>
            <p class="aluno-ra">RA: 1681432312016 - Ciclo: 1</p></div>
            <p class="rendimento">Rendimento no Curso:</p>
            <ul class="rendimento-info">
                <li>PP: 0.00%</li>
                <li>PR: 0.00</li>
                <li>MAIOR PR: 0.00</li>
            </ul>
            <p class="prazo">Prazo de Integralização:</p>
            <ul class="prazo-info">
                <li>Cursado: 1</li>
                <li>Máximo: 3</li>
                <li>Faltam: 2</li>
            </ul>
            <p class="email">Email Institucional:</p>
            <p class="email-info">FATEC - Leonardo.mucci@fatec.sp.gov.br</p>
        
    </div>


        <div class="container-lg"><b>Extrato Historico</b></div>

        <div class="homi">

            <select id="disciplinaSelect" onchange="filterTable()" class="ckdis">
                <option value="">Selecione uma Disciplina</option>
                <option value="Projeto Integrador I">Projeto Integrador I</option>
                <option value="Técnicas Avançadas de Banco de Dados Relacional e Não Relacional">Técnicas Avançadas de Banco de Dados Relacional e Não Relacional</option>
                <option value="Estruturas de Dados">Estruturas de Dados</option>
                <option value="Engenharia de Software">Engenharia de Software</option>
                <option value="Interação Humano Computador">Interação Humano Computador</option>
                <option value="Técnicas Avançadas de Programação">Técnicas Avançadas de Programação</option>
                <option value="Técnicas Avançadas de Programação Web e Mobile">Técnicas Avançadas de Programação Web e Mobile</option>
                <option value="Inteligência Corporativa e Modelos de Negócios na Era Digital">Inteligência Corporativa e Modelos de Negócios na Era Digital</option>
                <option value="Gestão Ágil de Projetos de Software">Gestão Ágil de Projetos de Software</option>
                <option value="Organização de Computadores e Sistemas Operacionais">Organização de Computadores e Sistemas Operacionais</option>
                <option value="Língua Inglesa I">Língua Inglesa I</option>
                <option value="Língua Inglesa II">Língua Inglesa II</option>
                <option value="Matemática Discreta">Matemática Discreta</option>
              </select>
            
              <table id="myTable">
                <tr>
                  <th>Sigla</th>
                  <th>Disciplina</th>
                  <th>Período</th>
                  <th>Aprovado</th>
                  <th>Média Final</th>
                  <th>Frequência</th>
                  <th>OBS</th>
                </tr>

<?php
// consulta Projeto Integrador I
    $conexao = mysqli_connect("localhost", "root", "", "bd");

    if ($conexao == FALSE) {
        echo "Não foi possível conectar-se ao PhpMyAdmin";
        exit;
    }

    $consultaMediaFinalPI = "SELECT ROUND((N1 + N2 + N3 + N4) / 4, 2) AS MediaFinal
    FROM notas WHERE ra = 16 AND idturma = 1";
    $resultado_MediaFinalPI = mysqli_query($conexao, $consultaMediaFinalPI);
    $MediaFinalPI = mysqli_fetch_array($resultado_MediaFinalPI);

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
                <tr>
                  <td>IAL021</td>
                  <td>Projeto Integrador I</td>
                  <td>20231</td>
                  <td><input type="checkbox" onclick="return false;"></td>
                  <td class="<?php echo ($MediaFinalPI['MediaFinal'] < 6) ? 'vermelho' : 'verde'; ?>">
                      <?php echo $MediaFinalPI['MediaFinal']; ?>
                  </td>
                  </td>
                  <td><?php echo number_format($frequencia_percentualPI, 2) . "%"; ?></td>
                  <td>Em Curso</td>
                </tr>
<?php
// consulta Técnicas Avançadas de Banco de Dados Relacional e Não Relacional
        $consultaMediaFinalBD = "SELECT ROUND((N1 + N2 + N3 + N4) / 4, 2) AS MediaFinal
        FROM notas WHERE ra = 16 AND idturma = 2";
        $resultado_MediaFinalBD = mysqli_query($conexao, $consultaMediaFinalBD);
        $MediaFinalBD = mysqli_fetch_array($resultado_MediaFinalBD);

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
                <tr>
                  <td>IBD034</td>
                  <td>Técnicas Avançadas de Banco de Dados Relacional e Não Relacional</td>
                  <td>20231</td>
                  <td><input type="checkbox" onclick="return false;"></td>
                  <td class="<?php echo ($MediaFinalBD['MediaFinal'] < 6) ? 'vermelho' : 'verde'; ?>">
                      <?php echo $MediaFinalBD['MediaFinal']; ?>
                  </td>
                  <td><?php echo number_format($frequencia_percentualBD, 2) . "%"; ?></td>
                  <td>Em Curso</td>
                </tr>
<?php
// consulta Estruturas de Dados
    $consultaMediaFinalED = "SELECT ROUND((N1 + N2 + N3 + N4) / 4, 2) AS MediaFinal
    FROM notas WHERE ra = 16 AND idturma = 3";
    $resultado_MediaFinalED = mysqli_query($conexao, $consultaMediaFinalED);
    $MediaFinalED = mysqli_fetch_array($resultado_MediaFinalED);

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
                <tr>
                  <td>IED008</td>
                  <td>Estruturas de Dados</td>
                  <td>20231</td>
                  <td><input type="checkbox" onclick="return false;"></td>
                  <td class="<?php echo ($MediaFinalED['MediaFinal'] < 6) ? 'vermelho' : 'verde'; ?>">
                      <?php echo $MediaFinalED['MediaFinal']; ?>
                  </td>
                  <td><?php echo number_format($frequencia_percentualED, 2) . "%"; ?></td>
                  <td>Em Curso</td>
                </tr>
<?php
// consulta Engenharia de Software
    $consultaMediaFinalES = "SELECT ROUND((N1 + N2 + N3 + N4) / 4, 2) AS MediaFinal
    FROM notas WHERE ra = 16 AND idturma = 4";
    $resultado_MediaFinalES = mysqli_query($conexao, $consultaMediaFinalES);
    $MediaFinalES = mysqli_fetch_array($resultado_MediaFinalES);
    
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
                <tr>
                  <td>IES020</td>
                  <td>Engenharia de Software</td>
                  <td>20231</td>
                  <td><input type="checkbox" onclick="return false;"></td>
                  <td class="<?php echo ($MediaFinalES['MediaFinal'] < 6) ? 'vermelho' : 'verde'; ?>">
                      <?php echo $MediaFinalES['MediaFinal']; ?>
                  </td>
                  <td><?php echo number_format($frequencia_percentualES, 2) . "%"; ?></td>
                  <td>Em Curso</td>
                </tr>
<?php
// consulta Interação Humano Computador
        $consultaMediaFinalIHC = "SELECT ROUND((N1 + N2 + N3 + N4) / 4, 2) AS MediaFinal
        FROM notas WHERE ra = 16 AND idturma = 5";
        $resultado_MediaFinalIHC = mysqli_query($conexao, $consultaMediaFinalIHC);
        $MediaFinalIHC = mysqli_fetch_array($resultado_MediaFinalIHC);

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
                <tr>
                  <td>IHC008</td>
                  <td>Interação Humano Computador</td>
                  <td>20231</td>
                  <td><input type="checkbox" onclick="return false;"></td>
                  <td class="<?php echo ($MediaFinalIHC['MediaFinal'] < 6) ? 'vermelho' : 'verde'; ?>">
                      <?php echo $MediaFinalIHC['MediaFinal']; ?>
                 </td>
                  <td><?php echo number_format($frequencia_percentualIHC, 2) . "%"; ?></td>
                  <td>Em Curso</td>
                </tr>
<?php
// consulta Técnicas Avançadas de Programação
    $consultaMediaFinalTAP = "SELECT ROUND((N1 + N2 + N3 + N4) / 4, 2) AS MediaFinal
    FROM notas WHERE ra = 16 AND idturma = 6";
    $resultado_MediaFinalTAP = mysqli_query($conexao, $consultaMediaFinalTAP);
    $MediaFinalTAP = mysqli_fetch_array($resultado_MediaFinalTAP);

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
                <tr>
                    <td>ILP063</td>
                    <td>Técnicas Avançadas de Programação</td>
                    <td>20231</td>
                    <td><input type="checkbox" onclick="return false;"></td>
                    <td class="<?php echo ($MediaFinalTAP['MediaFinal'] < 6) ? 'vermelho' : 'verde'; ?>">
                      <?php echo $MediaFinalTAP['MediaFinal']; ?>
                    </td>
                    <td><?php echo number_format($frequencia_percentualTAP, 2) . "%"; ?></td>
                    <td>Em Curso</td>
                  </tr>
<?php
// consulta Técnicas Avançadas de Programação Web e Mobile
    $consultaMediaFinalTAPWM = "SELECT ROUND((N1 + N2 + N3 + N4) / 4, 2) AS MediaFinal
    FROM notas WHERE ra = 16 AND idturma = 7";
    $resultado_MediaFinalTAPWM = mysqli_query($conexao, $consultaMediaFinalTAPWM);
    $MediaFinalTAPWM = mysqli_fetch_array($resultado_MediaFinalTAPWM);

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
                  <tr>
                    <td>ILP065</td>
                    <td>Técnicas Avançadas de Programação Web e Mobile</td>
                    <td>20231</td>
                    <td><input type="checkbox" onclick="return false;"></td>
                    <td class="<?php echo ($MediaFinalTAPWM['MediaFinal'] < 6) ? 'vermelho' : 'verde'; ?>">
                      <?php echo $MediaFinalTAPWM['MediaFinal']; ?>
                    </td>
                    <td><?php echo number_format($frequencia_percentualTAPWM, 2) . "%"; ?></td>
                    <td>Em Curso</td>
                  </tr>
<?php
// consulta Inteligência Corporativa e Modelos de Negócios na Era Digital
    $consultaMediaFinalICMNED = "SELECT ROUND((N1 + N2 + N3 + N4) / 4, 2) AS MediaFinal
    FROM notas WHERE ra = 16 AND idturma = 8";
    $resultado_MediaFinalICMNED = mysqli_query($conexao, $consultaMediaFinalICMNED);
    $MediaFinalICMNED = mysqli_fetch_array($resultado_MediaFinalICMNED);

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
                  <tr>
                    <td>INE003</td>
                    <td>Inteligência Corporativa e Modelos de Negócios na Era Digital</td>
                    <td>20231</td>
                    <td><input type="checkbox" onclick="return false;"></td>
                    <td class="<?php echo ($MediaFinalICMNED['MediaFinal'] < 6) ? 'vermelho' : 'verde'; ?>">
                      <?php echo $MediaFinalICMNED['MediaFinal']; ?>
                    </td>
                    <td><?php echo number_format($frequencia_percentualICMNED, 2) . "%"; ?></td>
                    <td>Em Curso</td>
                  </tr>
<?php
// consulta Gestão Ágil de Projetos de Software
        $consultaMediaFinalGAPS = "SELECT ROUND((N1 + N2 + N3 + N4) / 4, 2) AS MediaFinal
        FROM notas WHERE ra = 16 AND idturma = 9";
        $resultado_MediaFinalGAPS = mysqli_query($conexao, $consultaMediaFinalGAPS);
        $MediaFinalGAPS = mysqli_fetch_array($resultado_MediaFinalGAPS);

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
                  <tr>
                    <td>INE004</td>
                    <td>Gestão Ágil de Projetos de Software</td>
                    <td>20231</td>
                    <td><input type="checkbox" onclick="return false;"></td>
                    <td class="<?php echo ($MediaFinalGAPS['MediaFinal'] < 6) ? 'vermelho' : 'verde'; ?>">
                      <?php echo $MediaFinalGAPS['MediaFinal']; ?>
                    </td>
                    <td><?php echo number_format($frequencia_percentualGAPS, 2) . "%"; ?></td>
                    <td>Em Curso</td>
                  </tr>
<?php
// consulta Organização de Computadores e Sistemas Operacionais
        $consultaMediaFinalOCSO = "SELECT ROUND((N1 + N2 + N3 + N4) / 4, 2) AS MediaFinal
        FROM notas WHERE ra = 16 AND idturma = 10";
        $resultado_MediaFinalOCSO = mysqli_query($conexao, $consultaMediaFinalOCSO);
        $MediaFinalOCSO = mysqli_fetch_array($resultado_MediaFinalOCSO);

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
                  <tr>
                    <td>ISO016</td>
                    <td>Organização de Computadores e Sistemas Operacionais</td>
                    <td>20231</td>
                    <td><input type="checkbox" onclick="return false;"></td>
                    <td class="<?php echo ($MediaFinalOCSO['MediaFinal'] < 6) ? 'vermelho' : 'verde'; ?>">
                      <?php echo $MediaFinalOCSO['MediaFinal']; ?>
                    </td>
                    <td><?php echo number_format($frequencia_percentualOCSO, 2) . "%"; ?></td>
                    <td>Em Curso</td>
                  </tr>
                  <tr>
                    <td>LIN041</td>
                    <td>Língua Inglesa I</td>
                    <td>20231</td>
                    <td><input type="checkbox" checked="checked" onclick="return false;"></td>
                    <div class="checkmark"></div>
                    <td class="vermelho">0</td>
                    <td>0%</td>
                    <td>Dispensado por Proficiência</td>
                  </tr>
                  <tr>
                    <td>LIN042</td>
                    <td>Língua Inglesa II</td>
                    <td>20231</td>
                    <td><input type="checkbox" checked="checked" onclick="return false;"></td>
                    <td class="vermelho">0</td>
                    <td>0%</td>
                    <td>Dispensado por Proficiência</td>
                  </tr>
<?php
// consulta Matemática Discreta
    $consultaMediaFinalMD = "SELECT ROUND((N1 + N2 + N3 + N4) / 4, 2) AS MediaFinal
    FROM notas WHERE ra = 16 AND idturma = 11";
    $resultado_MediaFinalMD = mysqli_query($conexao, $consultaMediaFinalMD);
    $MediaFinalMD = mysqli_fetch_array($resultado_MediaFinalMD);
    
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
                  <tr>
                    <td>MAT028</td>
                    <td>Matemática Discreta</td>
                    <td>20231</td>
                    <td><input type="checkbox" onclick="return false;"></td>
                    <td class="<?php echo ($MediaFinalMD['MediaFinal'] < 6) ? 'vermelho' : 'verde'; ?>">
                      <?php echo $MediaFinalMD['MediaFinal']; ?>
                    </td>
                    <td><?php echo number_format($frequencia_percentualMD, 2) . "%"; ?></td>
                    <td>Em Curso</td>
                  </tr>
                </table>
    
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

        document.addEventListener("DOMContentLoaded", function () {
    populateDisciplinaSelect();
  });

  function populateDisciplinaSelect() {
    var table = document.getElementById("myTable");
    var disciplinaSelect = document.getElementById("disciplinaSelect");

    for (var i = 1; i < table.rows.length; i++) {
      var disciplina = table.rows[i].cells[1].innerText;
      if (!disciplinaSelect.querySelector("option[value='" + disciplina + "']")) {
        var option = document.createElement("option");
        option.value = disciplina;
        option.text = disciplina;
        disciplinaSelect.add(option);
      }
    }
  }


  function filterTable() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("disciplinaSelect");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1 || filter === "") {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }

  function sortTable(n) {
    var table, rows, switching, i, x, y, shouldSwitch;
    table = document.getElementById("myTable");
    switching = true;
    while (switching) {
      switching = false;
      rows = table.rows;
      for (i = 1; i < rows.length - 1; i++) {
        shouldSwitch = false;
        x = rows[i].getElementsByTagName("td")[n];
        y = rows[i + 1].getElementsByTagName("td")[n];
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      }
      if (shouldSwitch) {
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
      }
    }
  }
        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerText = "Light mode";
            } else {
                modeText.innerText = "Dark mode";

            }
        });

        
        document.addEventListener('DOMContentLoaded', function () {
    var userLink = document.querySelector('.user-link');
    var userPopup = document.querySelector('.user-popup');
    var sidebar = document.querySelector('.sidebar');

    userLink.addEventListener('mouseenter', function () {
        userPopup.style.display = 'block';
    });

    userLink.addEventListener('mouseleave', function () {
        userPopup.style.display = 'none';
    });

    sidebar.addEventListener('click', function () {
        userPopup.classList.toggle('active-sidebar');
    });
});

    </script>

</body>

</html>