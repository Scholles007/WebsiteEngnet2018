<?php 
	
	extract($_POST);

	if(!isset($nome)){
    header('Location: ../index.php');
  	}

  	if(!isset($telefone)){
    header('Location: ../index.php');
  	}

  	if(!isset($email)){
    header('Location: ../index.php');
  	}

  	$i = 0;

	if (isset($site)){
		$site = true;
		$i = $i + 1;
	}else{
		$site = false;
	}

	if (isset($sistema)){
		$sistema = true;
		$i = $i + 1;
	}else{
		$sistema = false;
	}

	if (isset($survey)){
		$survey = true;
		$i = $i + 1;
	}else{
		$survey = false;
	}

	if (isset($aplicativo)){
		$aplicativo = true;
		$i = $i + 1;
	}else{
		$aplicativo = false;
	}

	if (isset($hotspot)){
		$hotspot = true;
		$i = $i + 1;
	}else{
		$hotspot = false;
	}
	
	if($i == 0){
		header('Location:../../servico/');
	}

	setcookie("nome","$nome",time()+3600);
	setcookie("telefone","$telefone",time()+3600);
	setcookie("email","$email",time()+3600);




?>

<!DOCTYPE HTML>
<html lang='pt-br'>

<head>

		<!-- CAPA DO SITE -->
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width, minimum-scale=1.0, maximum-scale=1.0' />
		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
		<title>EngNet Consultoria</title>
		<link rel='icon' href='../../../system/img/favicon.png'>

		<!-- JS -->
		<script src='../../../system/js/jquery-3.3.1.min.js'></script>
		<script src='../../../system/bts/bootstrap.min.js'></script>
		

		<!-- Bootstrap 4 e FontAwesome -->
		<link rel='stylesheet' href='../../../system/bts/bootstrap.css'>
		<link rel='stylesheet' href='../../../system/fts/css/font-awesome.min.css'>
		<!-- Estilos Css Globais -->
		<link rel='stylesheet' href='../../../system/css/zilla/servico/formulario/body.css'>
		<link rel='stylesheet' href='../../../system/css/fonts.css'>


</head>

<body>

	<section class='container'>

		<section class='corpo_principal'>

		<div class='corpo_secundario'>

		<div class='row'>
			<div class='col-md-3'></div>
			<div class='col-md-6'>
				<img src='../../../system/img/logo_completa2.png' class='logo img-fluid'>
			</div>
			<div class='col-md-3'></div>
		</div>

		<div class='row'>

			<div class='col-md-12'>


			<form action='../envia/index.php' method="POST" >

                
                
                
				<div class="row">
				  <div class="col-md-4">
					    <div class="form-group">
					        <label for="nome">Nome Completo:</label>
					        <input type="nome" class="form-control" value="<?= $nome ?>" name="nome" required>
					    </div>
				  </div>
				  <div class="col-md-4">
						<div class="form-group">
						    <label for="email">E-mail:</label>
						    <input type="email" class="form-control" value="<?= $email ?>" name="email" required>
						 </div>
				  </div>
				  <div class="col-md-4">
						<div class="form-group">
						    <label for="telefone">Celular:</label>
						    <input type="text" class="form-control telefone" value="<?= $telefone ?>" name="telefone" required>
						 </div>
				  </div>
				</div>                
                
                
                
                
                
                
			  <div class='form-group'>
			    <label for='negocio'>Nome do seu negócio/empresa:</label>
			    <input type='text' name="negocio" class='form-control' id='negocio'>
			  </div>

			  <div class='form-group'>
			    <label for='textarea'>Por que seu projeto é necessário?*</label>
			    <textarea type='text' name="ProjNecessario" class='form-control' id='pwd' rows='2' required></textarea>
			  </div>

			  <div class='form-group'>
			    <label for='textarea'>Quais objetivos você pretende atingir com este projeto?*</label>
			    <textarea type='text' name="ObjProj" class='form-control' id='pwd' rows='2' required></textarea>
			  </div>


			  <div class='form-group'>
				  <label for='sel1'>Qual a urgência desse projeto para você?</label>
				  <select class='form-control' id='sel1'>
				    <option>Para o próximo ano</option>
				    <option>Para o próximo semestre</option>
				    <option>Para o próximo trimestre</option>
				    <option>Para o próximo bimestre</option>
				    <option>Para o próximo mês</option>
				  </select>
			  </div>

			  <div class='form-group'>
			    <label for='negocio'>Você tem disponibilidade de vir até a UnB para possíveis reuniões?</label>
			    <input type='text' name="disponibilidade" class='form-control' id='negocio'>
			  </div>

			  <?php

			  if($site == true){
			  	echo "
			  <!-- Sites -->

			  <div class='form-group'>
			    <label for='textarea'>Descreva, minuciosamente, as funcionalidades do seu site:</label>
			    <textarea type='text' class='form-control' name='sitedescricao' rows='5' required></textarea>
			  </div>

			  <div class='form-group'>
			    <label for='negocio'>Há algum site que se assemelha com o que você quer? Caso sim coloque abaixo.</label>
			    <input type='text' class='form-control' name='sitesemelhante' required>
			  </div>

			  <div class='form-group'>
				  <label for='sel1'>Quantas páginas você acha que seu site deve ter?</label>
				  <select class='form-control' name='sitenumeropagina' required>
				    <option>Até 5 páginas</option>
				    <option>De 5 a 10 páginas</option>
				    <option>De 10 a 15 páginas</option>
				    <option>De 15 a 20 páginas</option>
				    <option>Mais de 20</option>
				    <option>Será dinâmico/não fixo</option>
				  </select>
			  </div>

			  <div class='form-group'>
			    <label for='negocio'>Você quer ter o controle de alterar partes do seu site? Caso sim descreva quais partes.</label>
			    <textarea type='text' class='form-control' name='sitecontrole' rows='2' required></textarea>
			  </div>

			  <div class='form-group'>
				  <label for='sel1'>Você contrataria uma outra empresa para fazer o design do seu site?</label>
				  <select class='form-control' name='sitedesign'>
				    <option>Não</option>
				    <option>Sim</option>
				  </select>
			  </div>

			 <!-- ./sites -->
			  	";
			  }

			  

			  if($sistema == true){
			  	echo "
			  	<!-- Sistemas -->

			  <div class='form-group'>
				  <label for='sel1'>Marque o tipo de sistema que você quer elaborar conosco.</label>
				  <select class='form-control' id='sel1' name='tiposistema'>
				    <option>Sistema Logístico/Gestão de Recursos materiais</option>
				    <option>Sistema Financeiro/Gestão de Finanças</option>
				    <option>Sistema de Arquivo/Arquivologia</option>
				    <option>Sistema de Gestão de Pessoas</option>
				    <option>Sistema Administrativo Geral</option>
				    <option>Sistema de Gerenciamento de Conteúdo (para sites)</option>
				    <option>Sistema Administrativo e de Conteúdo</option>
				    <option>Sistema de Vendas Online</option>
				    <option>Outro</option>
				  </select>
			  </div>

			  <div class='form-group'>
				  <label for='sel1'>Quantas pessoas terão acesso seu sistema?</label>
				  <select class='form-control' id='sel1' name='pessoaacessosistema'>
				    <option>Apenas eu</option>
				    <option>Até 5</option>
				    <option>Até 10</option>
				    <option>Até 15</option>
				    <option>Até 30</option>
				    <option>Mais de 30</option>
				    <option>Muitas pessoas</option>
				  </select>
			  </div>

			  <div class='form-group'>
			    <label for='textarea'>Descreva, minuciosamente, as funcionalidades do seu sistema:</label>
			    <textarea type='text' class='form-control' name='funcsistema' id='pwd' rows='5' required></textarea>
			  </div>

			  <div class='form-group'>
			    <label for='textarea'>Descreva, minuciosamente, quais processos do seu negócio você pretende automatizar com este sistema:</label>
			    <textarea type='text' class='form-control' name='procsistema' id='pwd' rows='5' required></textarea>
			  </div>

			  <div class='form-group'>
			    <label for='negocio'>Há algum sistema que se assemelha com o que você quer? Caso sim coloque abaixo.</label>
			    <input type='text' class='form-control' name='semelhancasistema' id='negocio'>
			  </div>


			  <!-- ./Sistemas -->
			  	";
			  }

			 

			  if($aplicativo == true){
			  		echo "
			  	<!-- Aplicativos -->

			  <div class='form-group'>
				  <label for='sel1'>Qual tipo de aplicativo que você quer elaborar conosco?</label>
				  <select class='form-control' name='tipoaplicativo' id='sel1'>
				    <option>Outro</option>
				  </select>
			  </div>

			  <div class='form-group'>
				  <label for='sel1'>Quantas pessoas terão acesso ao aplicativo?</label>
				  <select class='form-control' name='qtdpessoasapp' id='sel1'>
				    <option>Apenas eu</option>
				    <option>Até 5</option>
				    <option>Até 10</option>
				    <option>Até 15</option>
				    <option>Até 30</option>
				    <option>Mais de 30</option>
				    <option>Muitas pessoas</option>
				  </select>
			  </div>

			  <div class='form-group'>
			    <label for='textarea'>Descreva, minuciosamente, as funcionalidades do seu aplicativo:</label>
			    <textarea type='text' class='form-control' name='descfuncapp' id='pwd' rows='5' required></textarea>
			  </div>


			  <div class='form-group'>
			    <label for='negocio'>Há algum aplicativo que se assemelha com o que você quer? Caso sim coloque abaixo.</label>
			    <input type='text' class='form-control' name='appsemelhante' id='negocio'>
			  </div>

			  <!-- ./Aplicativos -->
			  		";
			  }

			 

			  if($survey == true){
			  	echo "
			  	<!-- Site Survey -->

			  <div class='form-group'>
			    <label for='negocio'>Qual a extensão (em metros quadrados) do seu domicílio/empresa?</label>
			    <input type='text' class='form-control' name='extensao' id='negocio'>
			  </div>

			  <div class='form-group'>
			    <label for='negocio'>Quais os problemas atuais de conexão enfrentados por você?</label>
			    <input type='text' class='form-control' name='problemaconexao' id='negocio'>
			  </div>

			  <div class='form-group'>
			    <label for='negocio'>Qual o seu provedor de internet e a velocidade da mesma?</label>
			    <input type='text' class='form-control' name='provedor' id='negocio'>
			  </div>

			  <div class='form-group'>
			    <label for='negocio'>Quantos roteadores você tem disponível hoje na sua rede?</label>
			    <input type='text' class='form-control' name='qtdroteador' id='negocio'>
			  </div>

			  <div class='form-group'>
			    <label for='negocio'>Qual a quantidade usual de usuários a sua rede atende?</label>
			    <input type='text' class='form-control' name='qtdusuarios' id='negocio'>
			  </div>

			  <div class='form-group'>
			    <label for='negocio'>Qual o endereço da sua empresa ou domicílio?</label>
			    <input type='text' class='form-control' name='endereco' id='negocio'>
			  </div>

			   <!-- ./Site Survey -->
			  	";
			  }

			  

			   if($hotspot == true){
			   		echo "

			   	<!-- Hostspot -->

			   <div class='form-group'>
			    <label for='negocio'>Qual a extensão (em metros quadrados) do seu domicílio/empresa?</label>
			    <input type='text' class='form-control' id='negocio'>
			  </div>

			  <div class='form-group'>
			    <label for='negocio'>Qual o seu provedor de internet e a velocidade da mesma?</label>
			    <input type='text' class='form-control' id='negocio'>
			  </div>

			  <div class='form-group'>
			    <label for='negocio'>Quantos roteadores você tem disponível hoje na sua rede?</label>
			    <input type='text' class='form-control' id='negocio'>
			  </div>

			  <div class='form-group'>
			    <label for='negocio'>Qual a quantidade usual de usuários a sua rede atende?</label>
			    <input type='text' class='form-control' id='negocio'>
			  </div>

			  <div class='form-group'>
			    <label for='negocio'>Qual o endereço da sua empresa ou domicílio?</label>
			    <input type='text' class='form-control' id='negocio'>
			  </div>

			   <div class='form-group'>
			    <label for='negocio'>Descreva o seu negócio e a quem se destina as contas da rede.</label>
			    <input type='text' class='form-control' name='contasrede' id='negocio'>
			  </div>

			  <div class='form-group'>
			    <label for='negocio'>Qual o horário de pico de uso da sua rede?</label>
			    <input type='text' class='form-control' name='horariopico' id='negocio'>
			  </div>

			    <!-- ./Hotspot -->
			   		";
			   }

			   

			    ?>

			  <div class='form-group'>
				  <label for='sel1'>Observações:</label>
				  <textarea type='text' class='form-control' name='obs' id='pwd' rows='2'></textarea>
			  </div>

			  <div class='text-center'>
			  	<button type='submit' class='btn btn-primary'>Enviar</button>
			  </div>

			</form>
			</div>

		</div>


		</div>

		</section>

	</section>

	<script src='../../../system/plugins/mask/src/jquery.mask.js'></script>
	<script type='text/javascript'>

		$(document).ready(function(){
		  $('.telefone').mask('(00) 00000-0000');
		});
				
	</script>

</body>

</html>