<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../images/favicon.ico" type="image/ico" />

    <title>Zilla | EngNet Consultoria </title>

    <!-- Bootstrap -->
    <link href="../dist/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../dist/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../dist/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../dist/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="../dist/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../dist/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../dist/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../dist/build/css/custom.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title" style="padding-left:16%;"><img src="../images/logo.png"> <span>EngNet</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bem-vindo(a),</span>
                <h2>Membro</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

              <div class="menu_section">
                <h3>GERAL</h3>
                <ul class="nav side-menu">

                  <!-- EngNet -->
                  <li><a><i class="fa fa-heart"></i> EngNet <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <!-- Página onde conterá as demandas de cada um, individualmente -->
                      <li><a href="engnet/minhas-demandas.php">Minhas demandas</a></li>
                      <!-- Página onde será respondido os 360 -->
                      <li><a href="engnet/360.php">360</a></li>
                      <!-- Página onde todos poderão ver o P.E atual e o quanto da meta está atingido. -->
                      <li><a href="../membro/">Visão Geral</a></li>
                      <!-- Página onde poderá ser enviado feedback's anonimos ou nao para operações. -->
                      <li><a href="engnet/feedback.php">Feedback</a></li>
                    </ul>
                  </li>

                  <!-- WikiNet -->
                  <!-- Central de documentação sobre cada diretoria da EngNet -->
                  <li><a><i class="fa fa-university"></i> WikiNet <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="wikinet/comercial/">Comercial</a></li>
                      <li><a href="wikinet/projetos">Projetos</a></li>
                      <li><a href="wikinet/operacoes">Operações</a></li>
                      <li><a href="wikinet/marketing">Marketing</a></li>
                    </ul>
                  </li>

                </ul>
              </div>

              <div class="menu_section">
                <h3>Diretorias</h3>

                <ul class="nav side-menu">

                  <!-- Comercial -->
                  <li><a><i class="fa fa-dollar"></i> Comercial <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <!-- Página onde conterá todas as demandas pendentes-->
                      <li><a href="comercial/demandas.php">Demandas</a></li>
                      <!-- Página onde será exibido todas as Solicitações de serviço feitas pelo site-->
                      <li><a href="comercial/solicitacoes.php">Solicitações</a></li>
                      <!-- Página onde será possível fazer CRUD dos Clientes-->
                      <li><a href="comercial/clientes.php">Clientes</a></li>
                      <!-- Página onde constará todas as mensagens vindas do site-->
                      <li><a href="comercial/mensagens.php">Mensagens</a></li>
                      <li><a href="comercial/atas.php">Atas</a></li>
                    </ul>
                  </li>

                  <!-- Operações -->
                  <li><a><i class="fa fa-bar-chart"></i> Operações <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <!-- Página onde conterá todas as demandas pendentes-->
                      <li><a href="operacoes/demandas.php">Demandas</a></li>
                      <!-- Página onde será possível criar 360's para a empresa inteira ou para um projeto, além de ver o histórico e as respostas de cada um.-->
                      <li><a href="operacoes/360.php">360</a></li>
                      <!-- Página onde constará todos os membros, com informações sobre cada um e um CRUD.-->
                      <li><a href="operacoes/membros">Membros</a></li>
                      <!-- Página onde será recebido de forma anônima ou não, feedbacks sobre a empresa.-->
                      <li><a href="operacoes/feedback.php">Feedback's</a></li>
                      <!-- Página onde será aberto o processo seletivo e receberá as inscrições pelo site.-->
                      <li><a href="operacoes/ps.php">Processo Seletivo</a></li>
                      <li><a href="operacoes/atas.php">Atas</a></li>
                    </ul>
                  </li>

                  <!-- Projetos -->
                  <li><a><i class="fa fa-coffee"></i> Projetos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <!-- Página onde conterá todas as demandas pendentes-->
                      <li><a href="projetos/demandas.php">Demandas</a></li>
                      <!-- Página semelhante a de operações, com a opção de falar sobre o conhecimento de cada um e CRUD dos projetos/alocar.-->
                      <li><a href="projetos/membros.php">Membros</a></li>
                      <!-- Página onde conterá todos os projetos em ANDAMENTO, para criar, deletar... comentar-->
                      <li><a href="projetos/gerenciamento.php">Gerenciamento</a></li>
                      <li><a href="projetos/atas.php">Atas</a></li>
                    </ul>
                  </li>

                  <!-- Marketing -->
                  <li><a><i class="fa fa-paint-brush"></i> Marketing <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <!-- Página onde conterá todas as demandas pendentes-->
                      <li><a href="marketing/demandas.php">Demandas</a></li>
                      <!-- Página onde MKT controlará o Blog, criando postagens e afins-->
                      <li><a href="marketing/blog.php">Blog</a></li>
                      <!-- Página onde MKT criará campanhas publicitárias, adicionando informações e as artes-->
                      <li><a href="marketing/campanhas.php">Campanhas</a></li>
                      <li><a href="marketing/atas.php">Atas</a></li>
                    </ul>
                  </li>

                  <!-- Executiva -->
                  <li><a><i class="fa fa-globe"></i> Executiva <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <!-- Página onde os diretores poderão passar demandas-->
                      <li><a href="executiva/demandas.php">Demandas</a></li>
                      <!-- Página onde ficará registrado o atual e anteriores PE da empresa-->
                      <li><a href="executiva/planejamento.php">Planejamento</a></li>
                      <!-- Página onde os Diretores irão relatar eventos, de forma a documentar a nossa história-->
                      <li><a href="executiva/historia.php">História</a></li>
                      <!-- Conterá todos os membros que já passaram pela a empresa, e detalhes sobre cada um deles-->
                      <li><a href="executiva/hall.php">Hall da Fama</a></li>
                      <li><a href="executiva/atas.php">Atas</a></li>
                      <!-- Página na qual será definido os privilégios de todas as contas do sistema, além de outros controles-->
                      <li><a href="executiva/sistema.php">Sistema</a></li>
                    </ul>
                  </li>

                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Site EngNet" href="../../../">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Perfil" href="#">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Blog" href="../../blog/">
                <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Sair" href="#">
                <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="../images/user.png" alt="">Membro
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="#"> Perfil</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Copyright © EngNet Consultoria 2018. Todos os direitos reservados
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../dist/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../dist/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../dist/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../dist/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../dist/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../dist/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../dist/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../dist/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../dist/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../dist/vendors/Flot/jquery.flot.js"></script>
    <script src="../dist/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../dist/vendors/Flot/jquery.flot.time.js"></script>
    <script src="../dist/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../dist/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../dist/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../dist/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../dist/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../dist/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../dist/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../dist/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../dist/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../dist/vendors/moment/min/moment.min.js"></script>
    <script src="../dist/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../dist/build/js/custom.min.js"></script>

  </body>
</html>
