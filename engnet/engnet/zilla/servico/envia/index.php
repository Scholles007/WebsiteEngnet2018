<?php

//  	Formulário
// =================================================== //

// campos

$data               = date("d/m/Y - H:i");
//$nome            	= $_POST['nome'];
//$email            	= $_POST['email'];
//$info           	= $_POST['pwd'];




//  	Email que chega até você
// =================================================== //


$para       	= "danielsprado12@gmail.com";
$assunto    	= "Solicitação de Projeto :: $nome";
$header     	= "
<b>Nome:</b>	                                            $nome <br>
<b>Email:</b>                                               $email<br>
<b>Celular:</b>                                             $telefone<br>
<b>Nome da Empresa/Negócio:</b>	                            $negocio <br>
<b>Necessidade do projeto:</b>                              $ProjNecessario<br>
<b>Objetivos:</b>	                                        $ObjProj<br>
<b>Urgência:</b>                                            $email<br>
<b>Disponibilidade:</b>	                                    $disponibilidade <br>
<b>Funcionalidades do Site:</b>                             $sitedescricao<br>
<b>Semelhança com algum site?:</b>                          $sitesemelhante<br>
<b>Páginas do site:</b>                                     $sitenumeropagina<br>
<b>Quer ter controle/alterar site, quais partes?:</b>       $sitecontrole<br>
<b>Existe outro empresa responsável pelo design:</b>        $sitedesign<br>




<b>Tipo de sistema a ser elaborado:</b>   $tiposistema<br>
<b>Quantas pessoas terão acesso:</b>   $pessoaacessosistema<br>
<b>Funcionalidades do sistema:</b>   $funcsistema<br>
<b>Quais processos a serem automatizados:</b>   $procsistema<br>
<b>Se assemelha com algum outro sistema:</b>   $semelhancasistema<br>





<b>Tipo de aplicativo:</b>   $tipoaplicativo<br>
<b>Funcionalidades do aplicativo:</b>   $funcapp<br>
<b>Quantidade de pessoas que terão acesso ao aplicativo:</b>   $qtdpessoasapp<br>
<b>Descreve minunsciosamente o seu app:</b>   $descfuncapp<br>
<b>Se assemelha com algum outro aplicativo:</b>   $appsemelhante<br>


<b>Extensão em m²:</b>   $extensao<br>
<b>Problemas atuais de conexão:</b>   $problemaconexao<br>
<b>Provedor de internet e velocidade:</b>   $provedor<br>
<b>Roteadores disponíveis:</b>   $qtdroteador<br>
<b>Quantidade de usuários antendidos pela rede:</b>   $qtdusuarios<br>
<b>Endereço da empresa/domicílio:</b>   $endereco<br>
<b>Descrição do negócio e a quem se destina as contas da rede:</b>   $contasrede<br>
<b>Horário de pico da rede:</b>   $horariopico<br>
<b>Observações:</b>   $obs<br>

<br><br>
<b>Informações:</b><br>
$info
<br><br>

==============================================<br>
    	$data <br>
==============================================<br>
";

// Função HTML :)
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html;charset=iso-8859-1\r\n";
$headers .= "From: $nome <$email>\r\n";




//  	Resposta que vai ao Cliente/Visitante
// =================================================== //

$resp_assunto           = "EngNet Consultoria";
$header2            	= "
Olá <b>$nome</b>,
<br><br>
Obrigado pelo seu contato.<br>
Recebemos sua solicitação e brevemente entraremos em contato.
<br><br><br>

==============================================<br>
    	Atenciosamente,<br>
    	Diretoria de Projetos - EngNet Consultoria<br>
==============================================<br>
";

// Função HTML
$headers2 .= "MIME-Version: 1.0\r\n";
$headers2 .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers2 .= "From: Agência <agencia@andrebastos.com.br>\r\n";





// Envia para você
mail($para, $assunto, $header, $headers);



// Envia para quem preencheu o form
mail($email, $resp_assunto, $header2,$headers2);




echo "<script>window.location='../obrigado/index.php'</script>";
