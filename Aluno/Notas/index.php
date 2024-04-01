
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
                        <a href="../Notas/index.php" style="
                        background-color: var(--primary-color);"title="Notas">
                            <i class='bx bx-notepad icon'></i>
                            <span class="text nav-text">Notas</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../Faltas/index.php"title="Faltas">
                            <i class='bx bx-calendar-check icon'></i>
                            <span class="text nav-text">Faltas:</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../Historico/index.php"title="Histórico">
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
<!-- notas -->

<?php
    $conexao = mysqli_connect("localhost", "root", "", "bd");

    if ($conexao == FALSE) {
        echo "Não foi possível conectar-se ao PhpMyAdmin";
        exit;
    }
    ///////// consulta Projeto Integrador 
    $consultaNotasPI = "SELECT * FROM notas WHERE ra = 16 AND idturma = 1";
    $resultado_NotasPI = mysqli_query($conexao, $consultaNotasPI);
    $NotasPI = mysqli_fetch_array($resultado_NotasPI);

    $consultaMediaFinalPI = "SELECT ROUND((N1 + N2 + N3 + N4) / 4, 2) AS MediaFinal
    FROM notas WHERE ra = 16 AND idturma = 1";
    $resultado_MediaFinalPI = mysqli_query($conexao, $consultaMediaFinalPI);
    $MediaFinalPI = mysqli_fetch_array($resultado_MediaFinalPI);

    // Obtendo a data do banco de dados
    $consultaDataPi = "SELECT DataN1, DataN2, DataN3, DataN4, DataN5 FROM notas WHERE ra = 16 AND idturma = 1";
    $resultado_DataPi = mysqli_query($conexao, $consultaDataPi);
    $dataNotasPi = mysqli_fetch_array($resultado_DataPi);

    // Convertendo a data para o formato desejado
    // Convertendo as datas para o formato desejado
    $dataN1FormatadaPi = date('d/m/Y', strtotime($dataNotasPi['DataN1']));
    $dataN2FormatadaPi = date('d/m/Y', strtotime($dataNotasPi['DataN2']));
    $dataN3FormatadaPi = date('d/m/Y', strtotime($dataNotasPi['DataN3']));
    $dataN4FormatadaPi = date('d/m/Y', strtotime($dataNotasPi['DataN4']));
    $dataN5FormatadaPi = date('d/m/Y', strtotime($dataNotasPi['DataN5']));

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

<div class="container-lg"><b>Notas</b></div>

<center>
    <div class="container-lg">
        <div class="grid">
            <div class="card-container">
                <div class="card">
                    <div class="materia">
                        <div class="nomes">
                            <h1>Projeto Integrador I</h1>
                        </div>
                    </div>
                    <div class="content">
                        <div class="card-title"></div>
                        <h5>Projeto Integrador I</h5>
                        <div class="card-info">
                            <p>Média final: <?php echo $MediaFinalPI['MediaFinal']; ?></p>
                            <p>Faltas: <?php echo $faltasPI; ?></p>
                            <p>% Frequência: <?php echo number_format($frequencia_percentualPI, 2) . "%"; ?></p>
                        </div>
                        <div class="card-table">
                            <table>
                                <tr>
                                    <th>Avaliação</th>
                                    <th>Data</th>
                                    <th>Nota</th>
                                </tr>
                                <tr>
                                    <td>N1</td>
                                    <td><?php echo $dataN1FormatadaPi ; ?></td>
                                    <td><?php echo $NotasPI['N1']; ?></td>
                                </tr>
                                <tr>
                                    <td>N2</td>
                                    <td><?php echo $dataN2FormatadaPi ; ?></td>
                                    <td><?php echo $NotasPI['N2']; ?></td>
                                </tr>
                                <tr>
                                    <td>N3</td>
                                    <td><?php echo $dataN3FormatadaPi ; ?></td>
                                    <td><?php echo $NotasPI['N3']; ?></td>
                                </tr>
                                <tr>
                                    <td>N4</td>
                                    <td><?php echo $dataN4FormatadaPi ; ?></td>
                                    <td><?php echo $NotasPI['N4']; ?></td>
                                </tr>
                                <tr>
                                    <td>N5</td>
                                    <td><?php echo $dataN5FormatadaPi ; ?></td>
                                    <td><?php echo $NotasPI['N5']; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
    
                </div>
            </div>
        
  <?php
    // Consulta Banco de Dados
    $consultaNotasBD = "SELECT * FROM notas WHERE ra = 16 AND idturma = 2";
    $resultado_NotasBD = mysqli_query($conexao, $consultaNotasBD);
    $NotasBD = mysqli_fetch_array($resultado_NotasBD);

    $consultaMediaFinalBD = "SELECT ROUND((N1 + N2 + N3 + N4) / 4, 2) AS MediaFinal
    FROM notas WHERE ra = 16 AND idturma = 2";
    $resultado_MediaFinalBD = mysqli_query($conexao, $consultaMediaFinalBD);
    $MediaFinalBD = mysqli_fetch_array($resultado_MediaFinalBD);

    // Obtendo a data do banco de dados
    $consultaDataBD = "SELECT DataN1, DataN2, DataN3, DataN4, DataN5 FROM notas WHERE ra = 16 AND idturma = 2";
    $resultado_DataBD = mysqli_query($conexao, $consultaDataBD);
    $dataNotasBD = mysqli_fetch_array($resultado_DataBD);

    // Convertendo a data para o formato desejado
    // Convertendo as datas para o formato desejado
    $dataN1FormatadaBD = date('d/m/Y', strtotime($dataNotasBD['DataN1']));
    $dataN2FormatadaBD = date('d/m/Y', strtotime($dataNotasBD['DataN2']));
    $dataN3FormatadaBD = date('d/m/Y', strtotime($dataNotasBD['DataN3']));
    $dataN4FormatadaBD = date('d/m/Y', strtotime($dataNotasBD['DataN4']));
    $dataN5FormatadaBD = date('d/m/Y', strtotime($dataNotasBD['DataN5']));

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
        <div class="card-container">
            <div class="card">
                <div class="materia">

                    <div class="nomes">
                        <h1>Técnicas Avançadas de Banco de Dados</h1>
                    </div>

                </div>
                <div class="content">
                    
                    <div class="card-title"></div>
                    <h5>Técnicas Avançadas de Banco de Dados</h5>
    
                    <div class="card-info">
                        <p>Media final: <?php echo $MediaFinalBD['MediaFinal']; ?></p>
                        <p>Faltas: <?php echo $faltasBD; ?></p>
                        <p>% Frequência: <?php echo number_format($frequencia_percentualBD, 2) . "%"; ?></p>
                    </div>
                    <div class="card-table">
                        <table>
                            <tr>
                                <th>Avaliação</th>
                                <th>Data</th>
                                <th>Nota</th>
                            </tr>
                            <tr>
                                <td>N1</td>
                                <td><?php echo $dataN1FormatadaBD; ?></td>
                                <td><?php echo $NotasBD['N1']; ?></td>
                            </tr>
                            <tr>
                                <td>N2</td>
                                <td><?php echo $dataN2FormatadaBD; ?></td>
                                <td><?php echo $NotasBD['N2']; ?></td>
                            </tr>
                            <tr>
                                <td>N3</td>
                                <td><?php echo $dataN3FormatadaBD; ?></td>
                                <td><?php echo $NotasBD['N3']; ?></td>
                            </tr>
                            <tr>
                                <td>N4</td>
                                <td><?php echo $dataN4FormatadaBD; ?></td>
                                <td><?php echo $NotasBD['N4']; ?></td>
                            </tr>
                            <tr>
                                <td>N5</td>
                                <td><?php echo $dataN5FormatadaBD; ?></td>
                                <td><?php echo $NotasBD['N5']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

<?php
    // Consulta Estrutura de Dados
    $consultaNotasED = "SELECT * FROM notas WHERE ra = 16 AND idturma = 3";
    $resultado_NotasED = mysqli_query($conexao, $consultaNotasED);
    $NotasED = mysqli_fetch_array($resultado_NotasED);

    $consultaMediaFinalED = "SELECT ROUND((N1 + N2 + N3 + N4) / 4, 2) AS MediaFinal
    FROM notas WHERE ra = 16 AND idturma = 3";
    $resultado_MediaFinalED = mysqli_query($conexao, $consultaMediaFinalED);
    $MediaFinalED = mysqli_fetch_array($resultado_MediaFinalED);

    // Obtendo a data do banco de dados
    $consultaDataED = "SELECT DataN1, DataN2, DataN3, DataN4, DataN5 FROM notas WHERE ra = 16 AND idturma = 3";
    $resultado_DataED = mysqli_query($conexao, $consultaDataED);
    $dataNotasED = mysqli_fetch_array($resultado_DataED);

    // Convertendo a data para o formato desejado
    // Convertendo as datas para o formato desejado
    $dataN1FormatadaED = date('d/m/Y', strtotime($dataNotasED['DataN1']));
    $dataN2FormatadaED = date('d/m/Y', strtotime($dataNotasED['DataN2']));
    $dataN3FormatadaED = date('d/m/Y', strtotime($dataNotasED['DataN3']));
    $dataN4FormatadaED = date('d/m/Y', strtotime($dataNotasED['DataN4']));
    $dataN5FormatadaED = date('d/m/Y', strtotime($dataNotasED['DataN5']));

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
    
        <div class="card-container">
            <div class="card">
                <div class="materia">

                    <div class="nomes">
                        <h1>Estruturas de Dados</h1>
                    </div>

                </div>
                <div class="content">
                    <div class="card-title"></div>
                    <h5>Estruturas de Dados</h5>
    
                    <div class="card-info">
                        <p>Media final: <?php echo $MediaFinalED['MediaFinal']; ?></p>
                        <p>Faltas: <?php echo $faltasED; ?></p>
                        <p>% Frequência: <?php echo number_format($frequencia_percentualED, 2) . "%"; ?></p>
                    </div>
                    <div class="card-table">
                        <table>
                            <tr>
                                <th>Avaliação</th>
                                <th>Data</th>
                                <th>Nota</th>
                            </tr>
                            <tr>
                                <td>N1</td>
                                <td><?php echo $dataN1FormatadaED; ?></td>
                                <td><?php echo $NotasED['N1']; ?></td>
                            </tr>
                            <tr>
                                <td>N2</td>
                                <td><?php echo $dataN2FormatadaED; ?></td>
                                <td><?php echo $NotasED['N2']; ?></td>
                            </tr>
                            <tr>
                                <td>N3</td>
                                <td><?php echo $dataN3FormatadaED; ?></td>
                                <td><?php echo $NotasED['N3']; ?></td>
                            </tr>
                            <tr>
                                <td>N4</td>
                                <td><?php echo $dataN4FormatadaED; ?></td>
                                <td><?php echo $NotasED['N4']; ?></td>
                            </tr>
                            <tr>
                                <td>N5</td>
                                <td><?php echo $dataN5FormatadaED; ?></td>
                                <td><?php echo $NotasED['N5']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

<?php
    // Consulta Engenharia de Software
    $consultaNotasES = "SELECT * FROM notas WHERE ra = 16 AND idturma = 4";
    $resultado_NotasES = mysqli_query($conexao, $consultaNotasES);
    $NotasES = mysqli_fetch_array($resultado_NotasES);

    $consultaMediaFinalES = "SELECT ROUND((N1 + N2 + N3 + N4) / 4, 2) AS MediaFinal
    FROM notas WHERE ra = 16 AND idturma = 4";
    $resultado_MediaFinalES = mysqli_query($conexao, $consultaMediaFinalES);
    $MediaFinalES = mysqli_fetch_array($resultado_MediaFinalES);

    // Obtendo a data do banco de dados
    $consultaDataES = "SELECT DataN1, DataN2, DataN3, DataN4, DataN5 FROM notas WHERE ra = 16 AND idturma = 4";
    $resultado_DataES = mysqli_query($conexao, $consultaDataES);
    $dataNotasES = mysqli_fetch_array($resultado_DataES);

    // Convertendo a data para o formato desejado
    // Convertendo as datas para o formato desejado
    $dataN1FormatadaES = date('d/m/Y', strtotime($dataNotasES['DataN1']));
    $dataN2FormatadaES = date('d/m/Y', strtotime($dataNotasES['DataN2']));
    $dataN3FormatadaES = date('d/m/Y', strtotime($dataNotasES['DataN3']));
    $dataN4FormatadaES = date('d/m/Y', strtotime($dataNotasES['DataN4']));
    $dataN5FormatadaES = date('d/m/Y', strtotime($dataNotasES['DataN5']));

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
        <div class="card-container">
            <div class="card">
                <div class="materia">

                    <div class="nomes">
                        <h1>Engenharia de Software</h1>
                    </div>

                </div>
                <div class="content">
                
                    <div class="card-title"></div>
                    <h5>Engenharia de Software</h5>
    
                    <div class="card-info">
                        <p>Media final: <?php echo $MediaFinalES['MediaFinal']; ?></p>
                        <p>Faltas: <?php echo $faltasES; ?></p>
                        <p>% Frequência: <?php echo number_format($frequencia_percentualES, 2) . "%"; ?></p>
                    </div>
                    <div class="card-table">
                        <table>
                            <tr>
                                <th>Avaliação</th>
                                <th>Data</th>
                                <th>Nota</th>
                            </tr>
                            <tr>
                                <td>N1</td>
                                <td><?php echo $dataN1FormatadaES; ?></td>
                                <td><?php echo $NotasES['N1']; ?></td>
                            </tr>
                            <tr>
                                <td>N2</td>
                                <td><?php echo $dataN2FormatadaES; ?></td>
                                <td><?php echo $NotasES['N2']; ?></td>
                            </tr>
                            <tr>
                                <td>N3</td>
                                <td><?php echo $dataN3FormatadaES; ?></td>
                                <td><?php echo $NotasES['N3']; ?></td>
                            </tr>
                            <tr>
                                <td>N4</td>
                                <td><?php echo $dataN4FormatadaES; ?></td>
                                <td><?php echo $NotasES['N4']; ?></td>
                            </tr>
                            <tr>
                                <td>N5</td>
                                <td><?php echo $dataN5FormatadaES; ?></td>
                                <td><?php echo $NotasES['N5']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
    
            </div>
        </div>
<?php
    // Consulta Interação Humano Computador
    $consultaNotasIHC = "SELECT * FROM notas WHERE ra = 16 AND idturma = 5";
    $resultado_NotasIHC = mysqli_query($conexao, $consultaNotasIHC);
    $NotasIHC = mysqli_fetch_array($resultado_NotasIHC);

    $consultaMediaFinalIHC = "SELECT ROUND((N1 + N2 + N3 + N4) / 4, 2) AS MediaFinal
    FROM notas WHERE ra = 16 AND idturma = 5";
    $resultado_MediaFinalIHC = mysqli_query($conexao, $consultaMediaFinalIHC);
    $MediaFinalIHC = mysqli_fetch_array($resultado_MediaFinalIHC);

    // Obtendo a data do banco de dados
    $consultaDataIHC = "SELECT DataN1, DataN2, DataN3, DataN4, DataN5 FROM notas WHERE ra = 16 AND idturma = 5";
    $resultado_DataIHC = mysqli_query($conexao, $consultaDataIHC);
    $dataNotasIHC = mysqli_fetch_array($resultado_DataIHC);

    // Convertendo a data para o formato desejado
    // Convertendo as datas para o formato desejado
    $dataN1FormatadaIHC = date('d/m/Y', strtotime($dataNotasIHC['DataN1']));
    $dataN2FormatadaIHC = date('d/m/Y', strtotime($dataNotasIHC['DataN2']));
    $dataN3FormatadaIHC = date('d/m/Y', strtotime($dataNotasIHC['DataN3']));
    $dataN4FormatadaIHC = date('d/m/Y', strtotime($dataNotasIHC['DataN4']));
    $dataN5FormatadaIHC = date('d/m/Y', strtotime($dataNotasIHC['DataN5']));

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
        <div class="card-container">
            <div class="card">
                <div class="materia">

                    <div class="nomes">
                        <h1>Interação Humano Computador</h1>
                    </div>

                </div>
                <div class="content">
                
                    <div class="card-title"></div>
                    <h5>Interação Humano Computador</h5>
    
                    <div class="card-info">
                        <p>Media final: <?php echo $MediaFinalIHC['MediaFinal']; ?></p>
                        <p>Faltas: <?php echo $faltasIHC; ?></p>
                        <p>% Frequência: <?php echo number_format($frequencia_percentualIHC, 2) . "%"; ?></p>
                    </div>
                    <div class="card-table">
                        <table>
                            <tr>
                                <th>Avaliação</th>
                                <th>Data</th>
                                <th>Nota</th>
                            </tr>
                            <tr>
                                <td>N1</td>
                                <td><?php echo $dataN1FormatadaIHC; ?></td>
                                <td><?php echo $NotasIHC['N1']; ?></td>
                            </tr>
                            <tr>
                                <td>N2</td>
                                <td><?php echo $dataN2FormatadaIHC; ?></td>
                                <td><?php echo $NotasIHC['N2']; ?></td>
                            </tr>
                            <tr>
                                <td>N3</td>
                                <td><?php echo $dataN3FormatadaIHC; ?></td>
                                <td><?php echo $NotasIHC['N3']; ?></td>
                            </tr>
                            <tr>
                                <td>N4</td>
                                <td><?php echo $dataN4FormatadaIHC; ?></td>
                                <td><?php echo $NotasIHC['N4']; ?></td>
                            </tr>
                            <tr>
                                <td>N5</td>
                                <td><?php echo $dataN5FormatadaIHC; ?></td>
                                <td><?php echo $NotasIHC['N5']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
    
            </div>
        </div>

<?php
    // Consulta Técnicas Avançadas de Programação
    $consultaNotasTAP = "SELECT * FROM notas WHERE ra = 16 AND idturma = 6";
    $resultado_NotasTAP = mysqli_query($conexao, $consultaNotasTAP);
    $NotasTAP = mysqli_fetch_array($resultado_NotasTAP);

    $consultaMediaFinalTAP = "SELECT ROUND((N1 + N2 + N3 + N4) / 4, 2) AS MediaFinal
    FROM notas WHERE ra = 16 AND idturma = 6";
    $resultado_MediaFinalTAP = mysqli_query($conexao, $consultaMediaFinalTAP);
    $MediaFinalTAP = mysqli_fetch_array($resultado_MediaFinalTAP);

    // Obtendo a data do banco de dados
    $consultaDataTAP = "SELECT DataN1, DataN2, DataN3, DataN4, DataN5 FROM notas WHERE ra = 16 AND idturma = 6";
    $resultado_DataTAP = mysqli_query($conexao, $consultaDataTAP);
    $dataNotasTAP = mysqli_fetch_array($resultado_DataTAP);

    // Convertendo a data para o formato desejado
    // Convertendo as datas para o formato desejado
    $dataN1FormatadaTAP = date('d/m/Y', strtotime($dataNotasTAP['DataN1']));
    $dataN2FormatadaTAP = date('d/m/Y', strtotime($dataNotasTAP['DataN2']));
    $dataN3FormatadaTAP = date('d/m/Y', strtotime($dataNotasTAP['DataN3']));
    $dataN4FormatadaTAP = date('d/m/Y', strtotime($dataNotasTAP['DataN4']));
    $dataN5FormatadaTAP = date('d/m/Y', strtotime($dataNotasTAP['DataN5']));

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
        <div class="card-container">
            <div class="card">
                <div class="materia">

                    <div class="nomes">
                        <h1>Técnicas Avançadas de Programação</h1>
                    </div>

                </div>
                <div class="content">
                
                <div class="card-info">
                        <p>Media final: <?php echo $MediaFinalTAP['MediaFinal']; ?></p>
                        <p>Faltas: <?php echo $faltasTAP; ?></p>
                        <p>% Frequência: <?php echo number_format($frequencia_percentualTAP, 2) . "%"; ?></p>
                    </div>
                    <div class="card-table">
                        <table>
                            <tr>
                                <th>Avaliação</th>
                                <th>Data</th>
                                <th>Nota</th>
                            </tr>
                            <tr>
                                <td>N1</td>
                                <td><?php echo $dataN1FormatadaTAP; ?></td>
                                <td><?php echo $NotasTAP['N1']; ?></td>
                            </tr>
                            <tr>
                                <td>N2</td>
                                <td><?php echo $dataN2FormatadaTAP; ?></td>
                                <td><?php echo $NotasTAP['N2']; ?></td>
                            </tr>
                            <tr>
                                <td>N3</td>
                                <td><?php echo $dataN3FormatadaTAP; ?></td>
                                <td><?php echo $NotasTAP['N3']; ?></td>
                            </tr>
                            <tr>
                                <td>N4</td>
                                <td><?php echo $dataN4FormatadaTAP; ?></td>
                                <td><?php echo $NotasTAP['N4']; ?></td>
                            </tr>
                            <tr>
                                <td>N5</td>
                                <td><?php echo $dataN5FormatadaTAP; ?></td>
                                <td><?php echo $NotasTAP['N5']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
    
            </div>
        </div>

        <?php
    // Consulta Técnicas Avançadas de Programação Web e Mobile
    $consultaNotasTAPWM = "SELECT * FROM notas WHERE ra = 16 AND idturma = 7";
    $resultado_NotasTAPWM = mysqli_query($conexao, $consultaNotasTAPWM);
    $NotasTAPWM = mysqli_fetch_array($resultado_NotasTAPWM);

    $consultaMediaFinalTAPWM = "SELECT ROUND((N1 + N2 + N3 + N4) / 4, 2) AS MediaFinal
    FROM notas WHERE ra = 16 AND idturma = 7";
    $resultado_MediaFinalTAPWM = mysqli_query($conexao, $consultaMediaFinalTAPWM);
    $MediaFinalTAPWM = mysqli_fetch_array($resultado_MediaFinalTAPWM);

    // Obtendo a data do banco de dados
    $consultaDataTAPWM = "SELECT DataN1, DataN2, DataN3, DataN4, DataN5 FROM notas WHERE ra = 16 AND idturma = 7";
    $resultado_DataTAPWM = mysqli_query($conexao, $consultaDataTAPWM);
    $dataNotasTAPWM = mysqli_fetch_array($resultado_DataTAPWM);

    // Convertendo a data para o formato desejado
    // Convertendo as datas para o formato desejado
    $dataN1FormatadaTAPWM = date('d/m/Y', strtotime($dataNotasTAPWM['DataN1']));
    $dataN2FormatadaTAPWM = date('d/m/Y', strtotime($dataNotasTAPWM['DataN2']));
    $dataN3FormatadaTAPWM = date('d/m/Y', strtotime($dataNotasTAPWM['DataN3']));
    $dataN4FormatadaTAPWM = date('d/m/Y', strtotime($dataNotasTAPWM['DataN4']));
    $dataN5FormatadaTAPWM = date('d/m/Y', strtotime($dataNotasTAPWM['DataN5']));

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
        <div class="card-container">
            <div class="card">
                <div class="materia">

                    <div class="nomes">
                        <h1>Técnicas Avançadas de Programação Web e Mobile</h1>
                    </div>

                </div>
                <div class="content">
                
                    <div class="card-title"></div>
                    <h5>Técnicas Avançadas de Programação Web e Mobile</h5>
    
                    <div class="card-info">
                        <p>Media final: <?php echo $MediaFinalTAPWM['MediaFinal']; ?></p>
                        <p>Faltas: <?php echo $faltasTAPWM; ?></p>
                        <p>% Frequência: <?php echo number_format($frequencia_percentualTAPWM, 2) . "%"; ?></p>
                    </div>
                    <div class="card-table">
                        <table>
                            <tr>
                                <th>Avaliação</th>
                                <th>Data</th>
                                <th>Nota</th>
                            </tr>
                            <tr>
                                <td>N1</td>
                                <td><?php echo $dataN1FormatadaTAPWM; ?></td>
                                <td><?php echo $NotasTAPWM['N1']; ?></td>
                            </tr>
                            <tr>
                                <td>N2</td>
                                <td><?php echo $dataN2FormatadaTAPWM; ?></td>
                                <td><?php echo $NotasTAPWM['N2']; ?></td>
                            </tr>
                            <tr>
                                <td>N3</td>
                                <td><?php echo $dataN3FormatadaTAPWM; ?></td>
                                <td><?php echo $NotasTAPWM['N3']; ?></td>
                            </tr>
                            <tr>
                                <td>N4</td>
                                <td><?php echo $dataN4FormatadaTAPWM; ?></td>
                                <td><?php echo $NotasTAPWM['N4']; ?></td>
                            </tr>
                            <tr>
                                <td>N5</td>
                                <td><?php echo $dataN5FormatadaTAPWM; ?></td>
                                <td><?php echo $NotasTAPWM['N5']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
    
            </div>
        </div>
<?php 
    // Consulta Inteligência Corporativa e Modelos de Negócios na Era Digital
    $consultaNotasICMNED = "SELECT * FROM notas WHERE ra = 16 AND idturma = 8";
    $resultado_NotasICMNED = mysqli_query($conexao, $consultaNotasICMNED);
    $NotasICMNED = mysqli_fetch_array($resultado_NotasICMNED);

    $consultaMediaFinalICMNED = "SELECT ROUND((N1 + N2 + N3 + N4) / 4, 2) AS MediaFinal
    FROM notas WHERE ra = 16 AND idturma = 8";
    $resultado_MediaFinalICMNED = mysqli_query($conexao, $consultaMediaFinalICMNED);
    $MediaFinalICMNED = mysqli_fetch_array($resultado_MediaFinalICMNED);

    // Obtendo a data do banco de dados
    $consultaDataICMNED = "SELECT DataN1, DataN2, DataN3, DataN4, DataN5 FROM notas WHERE ra = 16 AND idturma = 8";
    $resultado_DataICMNED = mysqli_query($conexao, $consultaDataICMNED);
    $dataNotasICMNED = mysqli_fetch_array($resultado_DataICMNED);

    // Convertendo a data para o formato desejado
    // Convertendo as datas para o formato desejado
    $dataN1FormatadaICMNED = date('d/m/Y', strtotime($dataNotasICMNED['DataN1']));
    $dataN2FormatadaICMNED = date('d/m/Y', strtotime($dataNotasICMNED['DataN2']));
    $dataN3FormatadaICMNED = date('d/m/Y', strtotime($dataNotasICMNED['DataN3']));
    $dataN4FormatadaICMNED= date('d/m/Y', strtotime($dataNotasICMNED['DataN4']));
    $dataN5FormatadaICMNED = date('d/m/Y', strtotime($dataNotasICMNED['DataN5']));

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
        <div class="card-container">
            <div class="card">
                <div class="materia">

                    <div class="nomes">
                        <h1>Inteligência Corporativa e Modelos de Negócios na Era Digital</h1>
                    </div>

                </div>
                <div class="content">
                
                    <div class="card-title"></div>
                    <h5>Inteligência Corporativa e Modelos de Negócios na Era Digita</h5>
    
                    <div class="card-info">
                        <p>Media final: <?php echo $MediaFinalICMNED['MediaFinal']; ?></p>
                        <p>Faltas: <?php echo $faltasICMNED; ?></p>
                        <p>% Frequência: <?php echo number_format($frequencia_percentualICMNED, 2) . "%"; ?></p>
                    </div>
                    <div class="card-table">
                        <table>
                            <tr>
                                <th>Avaliação</th>
                                <th>Data</th>
                                <th>Nota</th>
                            </tr>
                            <tr>
                                <td>N1</td>
                                <td><?php echo $dataN1FormatadaICMNED; ?></td>
                                <td><?php echo $NotasICMNED['N1']; ?></td>
                            </tr>
                            <tr>
                                <td>N2</td>
                                <td><?php echo $dataN2FormatadaICMNED; ?></td>
                                <td><?php echo $NotasICMNED['N2']; ?></td>
                            </tr>
                            <tr>
                                <td>N3</td>
                                <td><?php echo $dataN3FormatadaICMNED; ?></td>
                                <td><?php echo $NotasICMNED['N3']; ?></td>
                            </tr>
                            <tr>
                                <td>N4</td>
                                <td><?php echo $dataN4FormatadaICMNED; ?></td>
                                <td><?php echo $NotasICMNED['N4']; ?></td>
                            </tr>
                            <tr>
                                <td>N5</td>
                                <td><?php echo $dataN5FormatadaICMNED; ?></td>
                                <td><?php echo $NotasICMNED['N5']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
    
            </div>
        </div>

<?php 
    // Consulta Gestão Ágil de Projetos de Software
    $consultaNotasGAPS = "SELECT * FROM notas WHERE ra = 16 AND idturma = 9";
    $resultado_NotasGAPS = mysqli_query($conexao, $consultaNotasGAPS);
    $NotasGAPS = mysqli_fetch_array($resultado_NotasGAPS);

    $consultaMediaFinalGAPS = "SELECT ROUND((N1 + N2 + N3 + N4) / 4, 2) AS MediaFinal
    FROM notas WHERE ra = 16 AND idturma = 9";
    $resultado_MediaFinalGAPS = mysqli_query($conexao, $consultaMediaFinalGAPS);
    $MediaFinalGAPS = mysqli_fetch_array($resultado_MediaFinalGAPS);

    // Obtendo a data do banco de dados
    $consultaDataGAPS = "SELECT DataN1, DataN2, DataN3, DataN4, DataN5 FROM notas WHERE ra = 16 AND idturma = 9";
    $resultado_DataGAPS = mysqli_query($conexao, $consultaDataGAPS);
    $dataNotasGAPS = mysqli_fetch_array($resultado_DataGAPS);

    // Convertendo a data para o formato desejado
    // Convertendo as datas para o formato desejado
    $dataN1FormatadaGAPS = date('d/m/Y', strtotime($dataNotasGAPS['DataN1']));
    $dataN2FormatadaGAPS = date('d/m/Y', strtotime($dataNotasGAPS['DataN2']));
    $dataN3FormatadaGAPS = date('d/m/Y', strtotime($dataNotasGAPS['DataN3']));
    $dataN4FormatadaGAPS = date('d/m/Y', strtotime($dataNotasGAPS['DataN4']));
    $dataN5FormatadaGAPS = date('d/m/Y', strtotime($dataNotasGAPS['DataN5']));

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
        <div class="card-container">
            <div class="card">
                <div class="materia">

                    <div class="nomes">
                        <h1>Gestão Ágil de Projetos de Software</h1>
                    </div>

                </div>
                <div class="content">
                
                    <div class="card-title"></div>
                    <h5>Gestão Ágil de Projetos de Software</h5>
    
                    <div class="card-info">
                        <p>Media final: <?php echo $MediaFinalGAPS['MediaFinal']; ?></p>
                        <p>Faltas: <?php echo $faltasGAPS; ?></p>
                        <p>% Frequência: <?php echo number_format($frequencia_percentualGAPS, 2) . "%"; ?></p>
                    </div>
                    <div class="card-table">
                        <table>
                            <tr>
                                <th>Avaliação</th>
                                <th>Data</th>
                                <th>Nota</th>
                            </tr>
                            <tr>
                                <td>N1</td>
                                <td><?php echo $dataN1FormatadaGAPS; ?></td>
                                <td><?php echo $NotasGAPS['N1']; ?></td>
                            </tr>
                            <tr>
                                <td>N2</td>
                                <td><?php echo $dataN2FormatadaGAPS; ?></td>
                                <td><?php echo $NotasGAPS['N2']; ?></td>
                            </tr>
                            <tr>
                                <td>N3</td>
                                <td><?php echo $dataN3FormatadaGAPS; ?></td>
                                <td><?php echo $NotasGAPS['N3']; ?></td>
                            </tr>
                            <tr>
                                <td>N4</td>
                                <td><?php echo $dataN4FormatadaGAPS; ?></td>
                                <td><?php echo $NotasGAPS['N4']; ?></td>
                            </tr>
                            <tr>
                                <td>N5</td>
                                <td><?php echo $dataN5FormatadaICMNED; ?></td>
                                <td><?php echo $NotasGAPS['N5']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
    
            </div>
        </div>

<?php 
    // Consulta Organização de Computadores e Sistemas Operacionais
    $consultaNotasOCSO = "SELECT * FROM notas WHERE ra = 16 AND idturma = 10";
    $resultado_NotasOCSO = mysqli_query($conexao, $consultaNotasOCSO);
    $NotasOCSO = mysqli_fetch_array($resultado_NotasOCSO);

    $consultaMediaFinalOCSO = "SELECT ROUND((N1 + N2 + N3 + N4) / 4, 2) AS MediaFinal
    FROM notas WHERE ra = 16 AND idturma = 10";
    $resultado_MediaFinalOCSO = mysqli_query($conexao, $consultaMediaFinalOCSO);
    $MediaFinalOCSO = mysqli_fetch_array($resultado_MediaFinalOCSO);

    // Obtendo a data do banco de dados
    $consultaDataOCSO = "SELECT DataN1, DataN2, DataN3, DataN4, DataN5 FROM notas WHERE ra = 16 AND idturma = 10";
    $resultado_DataOCSO = mysqli_query($conexao, $consultaDataOCSO);
    $dataNotasOCSO = mysqli_fetch_array($resultado_DataOCSO);

    // Convertendo a data para o formato desejado
    // Convertendo as datas para o formato desejado
    $dataN1FormatadaOCSO = date('d/m/Y', strtotime($dataNotasOCSO['DataN1']));
    $dataN2FormatadaOCSO = date('d/m/Y', strtotime($dataNotasOCSO['DataN2']));
    $dataN3FormatadaOCSO = date('d/m/Y', strtotime($dataNotasOCSO['DataN3']));
    $dataN4FormatadaOCSO = date('d/m/Y', strtotime($dataNotasOCSO['DataN4']));
    $dataN5FormatadaOCSO = date('d/m/Y', strtotime($dataNotasOCSO['DataN5']));

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
        <div class="card-container">
            <div class="card">
                <div class="materia">

                    <div class="nomes">
                        <h1>Organização de Computadores e Sistemas Operacionais</h1>
                    </div>

                </div>
                <div class="content">
                
                    <div class="card-title"></div>
                    <h5>Organização de Computadores e Sistemas Operacionais</h5>
    
                    <div class="card-info">
                        <p>Media final: <?php echo $MediaFinalOCSO['MediaFinal']; ?></p>
                        <p>Faltas: <?php echo $faltasOCSO; ?></p>
                        <p>% Frequência: <?php echo number_format($frequencia_percentualOCSO, 2) . "%"; ?></p>
                    </div>
                    <div class="card-table">
                        <table>
                            <tr>
                                <th>Avaliação</th>
                                <th>Data</th>
                                <th>Nota</th>
                            </tr>
                            <tr>
                                <td>N1</td>
                                <td><?php echo $dataN1FormatadaOCSO; ?></td>
                                <td><?php echo $NotasOCSO['N1']; ?></td>
                            </tr>
                            <tr>
                                <td>N2</td>
                                <td><?php echo $dataN2FormatadaOCSO; ?></td>
                                <td><?php echo $NotasOCSO['N2']; ?></td>
                            </tr>
                            <tr>
                                <td>N3</td>
                                <td><?php echo $dataN3FormatadaOCSO; ?></td>
                                <td><?php echo $NotasOCSO['N3']; ?></td>
                            </tr>
                            <tr>
                                <td>N4</td>
                                <td><?php echo $dataN4FormatadaOCSO; ?></td>
                                <td><?php echo $NotasOCSO['N4']; ?></td>
                            </tr>
                            <tr>
                                <td>N5</td>
                                <td><?php echo $dataN5FormatadaOCSO; ?></td>
                                <td><?php echo $NotasOCSO['N5']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
    
            </div>
        </div>

<?php 
    // Consulta Matemática Discreta
    $consultaNotasMD = "SELECT * FROM notas WHERE ra = 16 AND idturma = 11";
    $resultado_NotasMD = mysqli_query($conexao, $consultaNotasMD);
    $NotasMD = mysqli_fetch_array($resultado_NotasMD);

    $consultaMediaFinalMD = "SELECT ROUND((N1 + N2 + N3 + N4) / 4, 2) AS MediaFinal
    FROM notas WHERE ra = 16 AND idturma = 11";
    $resultado_MediaFinalMD = mysqli_query($conexao, $consultaMediaFinalMD);
    $MediaFinalMD = mysqli_fetch_array($resultado_MediaFinalMD);

    // Obtendo a data do banco de dados
    $consultaDataMD = "SELECT DataN1, DataN2, DataN3, DataN4, DataN5 FROM notas WHERE ra = 16 AND idturma = 11";
    $resultado_DataMD = mysqli_query($conexao, $consultaDataMD);
    $dataNotasMD = mysqli_fetch_array($resultado_DataMD);

    // Convertendo a data para o formato desejado
    // Convertendo as datas para o formato desejado
    $dataN1FormatadaMD = date('d/m/Y', strtotime($dataNotasMD['DataN1']));
    $dataN2FormatadaMD = date('d/m/Y', strtotime($dataNotasMD['DataN2']));
    $dataN3FormatadaMD = date('d/m/Y', strtotime($dataNotasMD['DataN3']));
    $dataN4FormatadaMD = date('d/m/Y', strtotime($dataNotasMD['DataN4']));
    $dataN5FormatadaMD = date('d/m/Y', strtotime($dataNotasMD['DataN5']));


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
        <div class="card-container">
            <div class="card">
                <div class="materia">

                    <div class="nomes">
                        <h1>Matemática Discreta</h1>
                    </div>

                </div>
                <div class="content">
                
                    <div class="card-title"></div>
                    <h5>Matemática Discreta</h5>
    
                    <div class="card-info">
                        <p>Media final: <?php echo $MediaFinalMD['MediaFinal']; ?></p>
                        <p>Faltas: <?php echo $faltasMD; ?></p>
                        <p>% Frequência: <?php echo number_format($frequencia_percentualMD, 2) . "%"; ?></p>
                    </div>
                    <div class="card-table">
                        <table>
                            <tr>
                                <th>Avaliação</th>
                                <th>Data</th>
                                <th>Nota</th>
                            </tr>
                            <tr>
                                <td>N1</td>
                                <td><?php echo $dataN1FormatadaMD; ?></td>
                                <td><?php echo $NotasMD['N1']; ?></td>
                            </tr>
                            <tr>
                                <td>N2</td>
                                <td><?php echo $dataN2FormatadaMD; ?></td>
                                <td><?php echo $NotasMD['N2']; ?></td>
                            </tr>
                            <tr>
                                <td>N3</td>
                                <td><?php echo $dataN3FormatadaMD; ?></td>
                                <td><?php echo $NotasMD['N3']; ?></td>
                            </tr>
                            <tr>
                                <td>N4</td>
                                <td><?php echo $dataN4FormatadaMD; ?></td>
                                <td><?php echo $NotasMD['N4']; ?></td>
                            </tr>
                            <tr>
                                <td>N5</td>
                                <td><?php echo $dataN5FormatadaMD; ?></td>
                                <td><?php echo $NotasMD['N5']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
    
            </div>
        </div>


        
    </div>
</div></center>



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