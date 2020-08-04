<?php

//  	Formulário
// =================================================== //

// campos

$data               = date("d/m/Y - H:i");
$nome            	= $_POST['nome'];
$email            	= $_POST['email'];

//Nome email assunto mensagem




//  	Email que chega até você
// =================================================== //


$para       	= "danielsprado12@gmail.com";
$assunto    	= "Dúvida :: $nome";
$header     	= "
<b>Nome:</b>	                              $nome <br>
<b>Email:</b>                                 $email<br>
<b>Assunto:</b>                               $assunto <br>
<b>Mensagem:</b>                              $mensagem<br>


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
<br>
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

//CRIAR  UM ALERT PARA DIZER SE TUDO OCORREU BEM OU NÃO E MANTER NA MESMO PÁGINA