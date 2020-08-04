<!DOCTYPE HTML>
<?php

  //Sorteio dos background's da página de fundo
  $bg = array('1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '7.jpg', '8.jpg', '9.jpg', '10.jpg', '11.jpg', '12.jpg', '13.jpg', '14.jpg', '15.jpg', '16.jpg', '17.jpg', '18.jpg', '19.jpg', '20.jpg', '21.jpg', '22.jpg', '23.jpg', '24.jpg', '25.jpg', '26.jpg', '27.jpg', '28.jpg', '29.jpg', '30.jpg', '31.jpg', '32.jpg'); // array of filenames
  $i = rand(1, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
  if($i > 32 || $i < 0){
  	$selectedBg = '2.jpg';
  }
?>
<html lang="pt-br">

<head>

		<!-- CAPA DO SITE -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>EngNet Consultoria</title>
		<link rel="icon" href="system/img/favicon.png">

		<!-- JS -->
		<script src="system/js/jquery-3.3.1.min.js"></script>
		<script src="system/bts/bootstrap.min.js"></script>
		<script src="system/js/navbar.js"></script>
		<script src="system/js/typed.min.js"></script>
		<script src="system/plugins/timeline/js/modernizr.js"></script>
				<script src="system/plugins/topbar/topbar.js"></script>


		<!-- Bootstrap 4 e FontAwesome -->
		<link rel="stylesheet" href="system/bts/bootstrap.css">
		<link rel="stylesheet" href="system/fts/css/font-awesome.min.css">
		<!-- Estilos Css Globais -->
		<link rel="stylesheet" href="system/css/home/navbar.css">
		<link rel="stylesheet" href="system/css/fonts.css">
		<!-- Estilos Css Local -->
		<link rel="stylesheet" href="system/plugins/owl/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="system/plugins/owl/dist/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="system/css/home/body.css">
		<link rel="stylesheet" href="system/css/home/body_queries.css">
		<link rel="stylesheet" href="system/css/home/preloader.css">
		<link rel="stylesheet" href="system/css/home/footer.css">
		<link rel="stylesheet" href="system/css/home/normalize.css">
		<link rel="stylesheet" href="system/plugins/timeline/css/style.css">

		<!-- Estilo pro sorteio da página de preloader/ não pode ser externalizado -->
		<style type="text/css">
		body{
		background: url(system/img/backgrounds/<?php echo $selectedBg; ?>) no-repeat fixed center center / cover;
    	background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
      	url(system/img/backgrounds/<?php echo $selectedBg; ?>);
      	height: 100%;
      	-webkit-background-size: cover;
    	-moz-background-size: cover;
    	-o-background-size: cover;
    	background-size: cover;
      	}
		</style>

</head>

<body onload="myFunction()" style="margin:0;" data-spy="scroll" data-target="#navbara" data-offset="50">

	<!-- Página de Pre-load -->
	<div id="carregar">
		<div class="container-fluid">
			<div class="col-xs-12">
				<div class="conjunto_loader">
					<img id="loader" class="img-fluid" src="system/img/logo_girar.png">
					<img class="engnet img-fluid" src="system/img/logo_girar_cf.png">
				</div>
			</div>
		</div>
	</div>

<!-- Body exibido após o loading -->
<div style="display:none;" id="myDiv" class="animate-bottom">

	<!-- Layer intermediária escura -->
	<div class="meuvideo" id="inicio"></div>

	<!-- Video de fundo -->
	<video autoplay muted loop id="myVideo">
	  	<source src="system/videos/video.mp4" type="video/mp4">
	</video>

	<!-- Barra de navegação -->
	<nav class="navbar navbar-expand-lg fixed-top nav_inicial" id="navbara">
		<div class="container">

		  	  <!-- Logo da EngNet -->
			  <a class="navbar-brand" href="#inicio">
			    <a href="#inicio"><span class="logomarca"></span></a>
			  </a>

			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
			  aria-label="Toggle navigation" >
    		  <span class="navbar-toggler-icon"></span>
  			  </button>

			  <!-- Itens do Menu -->
			  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				  <ul class="navbar-nav navbar-nav navbar-yea mr-auto mt-2 mt-lg-0 nav_itens">
				    <li class="nav-item">
				      <a class="nav-link nav_elemento" href="#inicio"><p>Início</p></a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link nav_elemento" href="#servicos"><p>Serviços</p></a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link nav_elemento" href="#portfolio"><p>Portfólio</p></a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link nav_elemento" href="#engnet"><p>A EngNet</p></a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link nav_elemento" href="#parceiros"><p>Parceiros</p></a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link nav_elemento" href="#contato"><p class="ct3">Contato</p></a>
				    </li>
				  </ul>
			  </div>
		</div>
	</nav>

	<!-- Capa de início -->
	<section class="container">
		<div class="content_video">
			<div class="row">
				<div class="col-md-12 textomenu">
					<h1 class="texto_capa"><span style="color:#de761b;">#EngNet </span><span id="typed"></span></h1>
					<!--<h3 align="left">Serviços em Engenharia de Redes de Comunicação</h3>-->
					<p class="texto_capa2">
					<span align="left">A EngNet Consultoria é a Empresa Júnior do curso de Engenharia de Redes de Comunicação da Universidade de Brasília (UnB). A empresa tem como principal objetivo oferecer aos alunos de graduação uma oportunidade de contato com a área de atuação contemplada pelo curso e com o mercado de trabalho, aprimorando a experiência profissional através de projetos e consultoria em Engenharia de Redes.<br></span>
					</p>
				</div>

            </div>
        </div>
	</section>

	<!-- Secão principal -->
	<section class="secao">

		<section id="servicos">

			<div  class="container">

			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<br>
					<h2 class="titulo_servicos">Nossos Serviços</h2>
                    <a href="servicos/servicos/index.php">
					<p class="texto_servicos">
						Veja as soluções que temos para você!
					</p>
                    </a>
				</div>
				<div class="col-md-2"></div>
			</div>

			</div><br>

			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-1"></div>

					<div class="col-sm-2">
						<a href="servicos/sites/">
                            <div class="card">
                              <div class="card-header">
                                <img src="system/img/servicos/img_sites.png" class="img-fluid">
                                <h2 class="cab_serv">Sites</h2>
                              </div>
                              <a href="servicos/sites/"><div class="card-footer">Ver mais</div></a>
                            </div>
                        </a>
					</div>

                    <div class="col-sm-2">
						<a href="servicos/site-survey/">
                        <div class="card">
						  <div class="card-header">
						  	<img src="system/img/servicos/cloud-computing.png" class="img-fluid">
						  	<h2 class="cab_serv">Site Survey</h2>
						  </div>
						  <a href="servicos/site-survey/"><div class="card-footer">Ver mais</div></a>
						</div>
                        </a>
					</div>


				<!-- easter egg-->
					<div class="col-sm-2">
						<a href="servicos/aplicativos/">
                        <div class="card">
						  <div class="card-header">
						  	<img src="system/img/servicos/smartphone.png" class="img-fluid">
						  	<h2 class="cab_serv">Aplicativos</h2>
						  </div>
						  <a href="servicos/aplicativos/"><div class="card-footer">Ver mais</div></a>
						</div>
                        </a>
					</div>

					<div class="col-sm-2">
						<a href="servicos/hotspot/">
                        <div class="card">
						  <div class="card-header">
						  	<img src="system/img/servicos/user.png" class="img-fluid">
						  	<h2 class="cab_serv">HotSpot Wi-Fi</h2>
						  </div>
						  <a href="servicos/hotspot/"><div class="card-footer">Ver mais</div></a>
						</div>
                        </a>
					</div>

					<div class="col-sm-2">
						<a  href="servicos/sistemas/">
                        <div class="card">
						  <div class="card-header">
						  	<img src="system/img/servicos/img_plat.png" class="img-fluid">
						  	<h2 class="cab_serv">Sistemas Web</h2>
						  </div>
						  <a href="servicos/sistemas/"><div class="card-footer">Ver mais</div></a>
						</div>
                        </a>
					</div>
                </div>
			</div><br><br><br>
		</section>




<!-- ORIGINAL
		<section id="fox" class="container-fluid">
			<div class="container">
				<div class="float-right">
					<div class="caixa_blog2 rounded">
						<h2 class="blog_header text-center">Solicite o seu projeto!</h2>
						<p class="blog_texto">Utilizando-se de uma ferramenta online, elabore o seu projeto para nós de acordo com as suas necessidades e receba, em até 48 horas, um retorno de um de nossos membros. O mascote da EngNet, Zilla, da nome à um conjunto de sistemas integrados que colaboram para a gestão da empresa e, principalmente, ajudar você a construir a sua ideia e acompanhar o desenvolvimento dela até que este sonho se torne realidade.</p>
						<a href="zilla/servico/"><button type="button" class="btn btn-success">Quero fazer!</button></a>
					</div>
				</div>
			</div>
		</section>
-->

		<section id="fox" class="container-fluid">
			<div class="container">
				<div class="float-right">
					<div class="caixa_blog2 rounded">
						<h2 class="blog_header text-center">Solicite o seu projeto!</h2>
						<p class="blog_texto">Através das informações que conseguirem nesse site, elabore o seu projeto para nós de acordo com as suas necessidades e receba, em até 48 horas, um retorno de um de nossos membros. O mascote da EngNet, Zilla, da nome à um conjunto de sistemas integrados que colaboram para a gestão da empresa e, principalmente, ajudar você a construir a sua ideia e acompanhar o desenvolvimento dela até que este sonho se torne realidade.</p>
						<a href="#contato"><button type="button" class="btn btn-success">Entre em contato!</button></a>
					</div>
				</div>
			</div>
		</section>


        <section id="portfolio">

			<div  class="container">
				<br>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
                    <h2 class="titulo_servicos">Portfólio</h2>

                    <a href="portfolio/portfolio/index.php">
					<p class="texto_servicos">
						Confira alguns de nossos trabalhos!
					</p>
                    </a>
				</div>
				<div class="col-md-2"></div>
			</div>

			</div>

			<div class="container-fluid">
				<div class="row">



					<div class="col-md-3">
						<h3 class="text-center titulo_portfolio">Sites</h3>
						<div class="owl-carousel owl-carousel-1">
				  			<div>
				  				<a target="__blank" href="portfolio/uniduniler/index.php">
			  						<img src="system/img/unidunilerindex.jpg" class="portfolio_imagem">
			  						<div class="portfolio_caption">
					  					<h3 class="text-center titulo_portfolio">Uniduniler</h3>
					  					<p class="texto_portfolio">Clique e confira mais sobre este projeto</p>
			  						</div>
			  					</a>
				  			</div>
                            <div>
				  				<a target="__blank" href="../engnet/index.php">
			  					<img src="system/img/engnetindex.jpg" class="portfolio_imagem">
			  						<div class="portfolio_caption">
					  					<h3 class="text-center titulo_portfolio">EngNet</h3>
					  					<p class="texto_portfolio">Clique e confira mais sobre este projeto</p>
			  						</div>
			  					</a>
				  			</div>
				  		</div>
					</div>



					<div class="col-md-3">
						<h3 class="text-center titulo_portfolio">Aplicativo</h3>
						<div class="owl-carousel owl-carousel-2">
				  			<div>
				  				<a target="__blank" href="portfolio/tecpet/index.php">
			  						<img src="system/img/tecpetindex.jpg" class="portfolio_imagem">
			  						<div class="portfolio_caption">
					  					<h3 class="text-center titulo_portfolio">TecPet</h3>
					  					<p class="texto_portfolio">Clique e confira mais sobre este projeto</p>
			  						</div>
			  					</a>
                            </div>
				  			<div>
			  					<a target="__blank" href="portfolio/coincoin/index.php">
			  					<img src="system/img/coincoinindex.png" class="portfolio_imagem">
			  						<div class="portfolio_caption">
					  					<h3 class="text-center titulo_portfolio">CoinCoin</h3>
					  					<p class="texto_portfolio">Clique e confira mais sobre este projeto</p>
			  						</div>
			  					</a>
				  			</div>
				  		</div>
					</div>




					<div class="col-md-3">
						<h3 class="text-center titulo_portfolio">Plataforma</h3>
						<div class="owl-carousel owl-carousel-3">
				  			<div>
				  				<a target="__blank" href="portfolio/uniduniler/index.php">
			  					<img src="system/img/unidunilerindex.jpg" class="portfolio_imagem">
			  						<div class="portfolio_caption">
					  					<h3 class="text-center titulo_portfolio">Uniduniler</h3>
					  					<p class="texto_portfolio">Clique e confira mais sobre este projeto</p>
			  						</div>
			  					</a>
				  			</div>
				  			<div>
				  				<a target="__blank" href="portfolio/tecpet/index.php">
			  						<img src="system/img/tecpetindex.jpg" class="portfolio_imagem">
			  						<div class="portfolio_caption">
					  					<h3 class="text-center titulo_portfolio">Tec Pet</h3>
					  					<p class="texto_portfolio">Clique e confira mais sobre este projeto</p>
			  						</div>
			  					</a>
				  			</div>
				  			<div>
			  					<a target="__blank" href="portfolio/coincoin/index.php">
			  					<img src="system/img/coincoinindex.png" class="portfolio_imagem">
			  						<div class="portfolio_caption">
					  					<h3 class="text-center titulo_portfolio">CoinCoin</h3>
					  					<p class="texto_portfolio">Clique e confira mais sobre este projeto</p>
			  						</div>
			  					</a>
				  			</div>

				  		</div>
					</div>




					<div class="col-md-3">
						<h3 class="text-center titulo_portfolio">Otimização de Rede</h3>
						<div class="owl-carousel owl-carousel-4">
				  			<div>
			  					<a target="__blank" href="portfolio/ibac/index.php">
			  					<img src="system/img/ibacindex.jpg" class="portfolio_imagem">
			  						<div class="portfolio_caption">
					  					<h3 class="text-center titulo_portfolio">Ibac</h3>
					  					<p class="texto_portfolio">Clique e confira mais sobre este projeto</p>
			  						</div>
			  					</a>
				  			</div>
				  			<div>
			  					<a target="__blank" href="portfolio/fiocruz/index.php">
			  					<img src="system/img/fiocruzindex.jpg" class="portfolio_imagem">
			  						<div class="portfolio_caption">
					  					<h3 class="text-center titulo_portfolio">Fiocruz</h3>
					  					<p class="texto_portfolio">Clique e confira mais sobre este projeto</p>
			  						</div>
			  					</a>
				  			</div>
				  		</div>
					</div>
					<div class="col-md-1"></div>
				</div>
				<br>
			</div>


		</section>

		<div id="engnet">

		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item c2 active">
		      	<div class="container">
			    	<div class="row">
			    		<div class="col-md-4">
			    			<div class="c2p">
			    				<h1 class="centz imgc2Y">Como funcionamos? <br></h1>
				    			<h2 class="centz">Presidência Organizacional:</h2>
				    			<p style="text-indent: 10%;">Trabalha como um gestor de qualidade da empresa verificando quais iniciativas possuem índice consistente de funcionamento e quais devem ser encerradas por falta de eficiência.
				    			</p>
				    			<h2 class="centz">Diretoria de Operações:</h2>
				    			<p style="text-indent: 10%;">É a equipe que possui o desafio de alinhar os objetivos individuais de seus membros junto aos da empresa, propiciando um ambiente confortável para o crescimento de todos. Também é responsável pelo planejamento, controle e execução do balanço financeiro da empresa.
				    			</p>
				    			<h2 class="centz">Diretoria de Marketing:</h2>
				    			<p style="text-indent: 10%;">É a equipe responsável pela elaboração de técnicas, estratégias e práticas que têm como objetivo agregar valor à marca, produtos ou serviços da EngNet, a fim de atribuir uma maior importância desta para seus consumidores.
				    			</p>
			    			</div>
			    		</div>
			    		<div class="col-md-4">
			    			<p class="imgc2 imgc2X">Como funcionamos?</p>
			    		</div>
			    		<div class="col-md-4">
			    			<div class="c2p">
				    			<h2 class="centz">Presidência Institucional:</h2>
				    			<p style="text-indent: 10%;">Responsável pelo gerenciamento e supervisão de todos os membros, representação e responsabilidade legal pelas atividades jurídicas e monetárias e captação de clientes e parceiros. Representa a EngNet diante da universidade.
				    			</p>
				    			<h2 class="centz">Diretoria de Projetos:</h2>
				    			<p style="text-indent: 10%;">É responsável pela atualização tecnológica e intelectual da Engnet, pela gerência de projetos externos e internos, pela gerência de equipes em projetos e obtenção de conhecimento para a realização de projetos.
				    			</p>
				    			<h2 class="centz">Diretoria Comercial:</h2>
				    			<p style="text-indent: 10%;">É a equipe responsável pelo contato com o cliente, a fim de entender a necessidade e assim apresentar as melhores soluções para cada caso. Também é responsável por prospectar clientes à empresa e trabalhar a fim de que todos tenham a melhor experiência possível ao contratar um de nossos serviços.
				    			</p>
			    			</div>
			    		</div>
					 </div>
				</div>
		    </div>


		    <div class="carousel-item c3">
		      	<div class="container">
			    	<div class="row">
			    		<div class="col-sm-4">
			    			<div class="c3p c3p1">
			    				<h1 class="centz imgc3Y">Quem Somos? <br></h1>
				    			<h2 class="cent2z">Daniel Prado - Assessor de Projeto</h2>
				    			<h2 class="cent2z">Diego Martins - Presidente Institucional</h2>
				    			<h2 class="cent2z">Henrique Oliveira - Diretor de Projetos</h2>
			    				<h2 class="cent2z">Mariana Costa - Diretora de Operações</h2>
                            </div>
			    		</div>
			    		<div class="col-sm-4">
			    			<p class="imgc3 imgc3X">Quem Somos?</p>
			    		</div>
			    		<div class="col-sm-4">
			    			<div class="c3p c3p2">
			    				<h2 class="cent2z">Heitor Vieira - Diretor Comercial</h2>
				    			<h2 class="cent2z">Moisés Souza - Gerente de Projetos</h2>
				    			<h2 class="cent2z">Pedro Souza - Presidente Organizacional</h2>
				    			<h2 class="cent2z">Sabrina Santos - Gerente de Marketing</h2>
			    			</div>
			    		</div>
					 </div>
				</div>
		    </div>

		    <div class="carousel-item c1">
		    	<div class="container">
			    	<div class="row slide1">
				    		<div class="col-md-4">
				    			<div class="c1p">
					    			<h2 class="centz">Missão:</h2>
					    			<p style="text-indent: 10%;">Executar projetos que impactam, através da capacitação empreendedora deestudantes , concretizando sonhos .
					    			</p>
					    			<h2 class="centz">Visão:</h2>
					    			<p style="text-indent: 10%;">Ser uma empresa de referência no mercado e na universidade, por meio da execução de projetos de excelência que formam melhores engenheiros .
					    			</p>
					    			<h2 class="centz">Valores:</h2>
					    			<p>Sangue Laranja - Responsabilidade - Referência - Profissionalismo
					    			</p>
				    			</div>
				    		</div>
				    		<div class="col-md-4">
				    			<p class="imgc1">No que acreditamos?</p>
				    		</div>
				    		<div class="col-md-4">
				    			<div class="c1p">
					    			<p style="text-indent: 10%;">O Movimento Empresa Júnior (MEJ) é composto por universitários integrantes das empresas juniores, cujo objetivo é formentar a prática empreendedora de seus integrantes, oferecendo-lhes um ambiente propício ao crescimento pessoal e profissional. A EngNet foi vinculada a Federação das Empresas Juniores do Distrito  Federal, a CONCENTRO, em 2009. Desde então, orgulha-se de participar de um movimento que incentiva a inovação e o empreendedorismo e prepara os universitários para o mercado de trabalho.</p>
				    			</div>
				    		</div>
					</div>
				</div>
		    </div>

		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>

	<section id="parceiros" class="container-fluid">

			<div  class="container">
				<br>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<h2 class="titulo_servicos">Parceiros</h2>
					<p class="texto_servicos">
						Confira alguns de nossos parceiros!
					</p>
				</div>
				<div class="col-md-2"></div>
			</div><br>

			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="owl-carousel owl-carousel-parceiros">
						<div>
							<a href="http://enetec.unb.br" target="__blank">
							<img src="system/img/parceiros/enetec.png" style="width:178px;">
							</a>
						</div>
						<div>
							<a href="https://www.brasiljunior.org.br" target="__blank">
							<img src="system/img/parceiros/bj.png" style="width:125px;">
							</a>
						</div>
						<div>
							<a href="https://www.mecajun.com" target="__blank">
							<img src="system/img/parceiros/mecajun.png" style="width:181px;">
							</a>
						</div>
						<div>
							<a href="https://www.unb.br" target="__blank">
							<img src="system/img/parceiros/unb.png" style="width:183px;">
							</a>
						</div>
						<div>
							<a href="http://www.concentro.org.br" target="__blank">
							<img src="system/img/parceiros/concentro.png" style="width:300px;">
							</a>
						</div>
						<div>
							<a href="https://factoagencia.wordpress.com" target="__blank">
							<img src="system/img/parceiros/facto.png" style="width:89px;">
							</a>
						</div>
						<div>
							<a href="http://www.ene.unb.br" target="__blank">
							<img src="system/img/parceiros/ft.jpg" style="width:147px;">
							</a>
						</div>
						<div>
							<a href="https://redes.unb.br/" target="__blank">
							<img src="system/img/parceiros/curso.png" style="width:300px;">
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
		</section>

<!--  Original
		<section id="blog">
				<div class="container">
					<div class="float-left">
						<div class="caixa_blog rounded">
							<h2 class="blog_header text-center">Blog</h2>
							<p class="blog_texto">O curso de Engenharia de Redes de Comunicação é, sobretudo, um curso de Tecnologia, isto significa estar sempre atualizado com o que há de mais novo no mundo. O blog é um espaço onde colocamos periodicamente conteúdo relacionados à tecnologia e ao cotidiano da EngNet, a fim repassar este conhecimento a qualquer pessoa que goste da área e tenha a curiosidade de sempre aprender mais.</p>
							<a href="blog/"><button type="button" class="btn btn-success">Venha visitar o Blog!</button></a>
						</div>
					</div>
				</div>
			</section>
-->
		<section id="blog">
				<div class="container">
					<div class="float-left">
						<div class="caixa_blog rounded">
							<h2 class="blog_header text-center">Engenharia de Redes</h2>
							<p class="blog_texto">O Engenheiro de Redes de Comunicação domina as diversas perspectivas das Tecnologias da Informação e das Comunicações (TIC), desde a transmissão da informação pelo meio físico, passando pelos protocolos de comunicação, até a camada de aplicação. Para isso, o estudante recebe uma formação interdisciplinar sólida em áreas da Engenharia Elétrica, das Telecomunicações e da Computação, que o prepara para atuar em uma realidade de contínua evolução tecnológica.</p>
							<a href="https://redes.unb.br/"><button type="button" class="btn btn-success">Venha conhecer mais esse Curso!</button></a>
						</div>
					</div>
				</div>
		</section>
		<!--ORIGINAL
		<section id="contato" class="container-fluid">

			<div class="container">
				<br>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<h2 class="titulo_contato">Contato</h2>
					<p class="texto_contato">
						Se você tem alguma dúvida sobre quem somos ou o que podemos fazer por você, fale conosco e responderemos o mais breve possível. </p>
                    <p class="texto_contato">Deseja fazer algum projeto ? <a href="../engnet/zilla/servico/formulario/index.php">clique aqui</a></p>
				</div>
				<div class="col-md-2"></div>
			</div><br>


			<div class="row">
			<div class="col-md-6">
				<div class="embed-responsive embed-responsive-4by3">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15358.88611305747!2d-47.87213!3d-15.765864!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x293aeadba09d1dba!2sEngNet+Consultoria!5e0!3m2!1spt-BR!2sbr!4v1531952008124" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-md-6">
				<div class="caixa_formulario">
					<h2 class="titulo_contato_2">Respondemos em até 48 horas</h2>
					<div class="caixa_f">






						<form action="/zilla/servico/formindex/index.php" method="post">
						  <div class="form-group">
						    <input type="name" class="form-control" id="nome" placeholder="Nome" required>
						  </div>

						  <div class="form-group">
						    <input type="email" class="form-control" id="email"
						     placeholder="E-mail" required>
						  </div>

						  <div class="form-group">
						    <input type="text" class="form-control" id="assunto"
						     placeholder="Assunto" required>
						  </div>

						  <div class="form-group">
							  <textarea class="form-control" rows="5" id="mensagem" placeholder="Mensagem"></textarea>
						  </div>

						  <button type="submit" class="btn btn-info">Enviar</button>
						</form>



					</div>
				</div>
			</div>
		</div></div>
        </section>-->

		<section id="contato" class="container-fluid">

			<div class="container">
				<br>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<p></p>
					<h2 class="titulo_contato">Contato</h2>
					<p class="texto_contato">
						Se você tem alguma dúvida sobre quem somos ou o que podemos fazer por você, fale conosco e responderemos o mais breve possível. </p>
                    <p class="texto_contato">Deseja fazer algum projeto ? Entre em contato:</p>
                    <br>
                    <h3 class="titulo_contato">Email:</h3><p class="texto_contato">contato@engnetconsultoria.com.br</p>
                    <h3 class="titulo_contato">Telefone:</h3><p class="texto_contato">Diretor Comercial: (61) 9991-3175<br>Presidente Institucional: (61) 9651-8064</p>
				</div>
				<div class="col-md-2"></div>
			</div><br>

<!--
			<div class="row">
			<div class="col-md-6">
				<div class="embed-responsive embed-responsive-4by3">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15358.88611305747!2d-47.87213!3d-15.765864!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x293aeadba09d1dba!2sEngNet+Consultoria!5e0!3m2!1spt-BR!2sbr!4v1531952008124" frameborder="0" style="border:5px" allowfullscreen></iframe>
				</div>
			</div>
		</div>

            </div>-->
        </section>

		<div class="separador">
		</div>


		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="dock">
							<a target="__blank" href="https://www.facebook.com/EngNetConsultoriaJr/">
								<img class="rounded-circle img-fluid" src="system/img/dock/fb.png">
							</a>
							<a target="__blank" href="https://www.instagram.com/engnetconsultoria/?hl=pt-br">
								<img class="rounded-circle img-fluid" src="system/img/dock/ins.png">
							</a>
						</div>
					</div>
					<div class="col-lg-3">
						<img class="logo_footer" src="system/img/logo_completa2.png">
					</div>
					<div class="col-lg-3">


					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<p class="assinatura">Campus Universitário Darcy Ribeiro - Faculdade de Tecnologia - SG 11 - AT 4/7 - Asa Norte, DF, 70910-900 | +55 61 99212-7682<br>Copyright © EngNet Consultoria 2018. Todos os direitos reservados | Desenvolvido artesanalmente | contato@engnetconsultoria.com.br<br> <a href="zilla/" style="text-decoration: underline;">Zilla - Sistema Integrado de Gestão Administrativa</a></p>
						<!--<p>Projeto de: Vítor Soares de Oliveira</p>-->
					</div>
				</div>
			</div>

		</footer>


	</section>

</div>
		<!-- Plugins JS -->
		<script src="system/js/anchor.js"></script> <!-- Ancora do site -->
		<script src="system/js/typing.js"></script> <!-- Plugin de digitação pra capa -->
		<script src="system/bts/bootstrap.min.js"></script> <!-- Bootstrap JS -->
		<script src="system/js/preloader.js"></script> <!-- Preloader JS -->
		<script src="system/plugins/timeline/js/main.js"></script> <!-- Plugin de timeline -->
		<script src="system/plugins/owl/dist/owl.carousel.min.js"></script> <!-- Own carousel JS -->
		<script src="system/js/owl.js"></script> <!-- Chamada dos carroséis owl -->
		<script src="system/js/topbar.js"></script> <!-- Estilo da barra de loading -->

</body>
</html>

<!--
	CORES DO MANUAL DA MARCA
	Azul escuro: #064874
	Azul claro: #bee2d3
	Verde claro: #b0d360
	Amarelo feio: #e0e565
	Beje bebe: #f89e64
	Marrom: #4e2c21
	Cinza bonito: #656767
	Beje clarinho: #e5d1ab
-->

