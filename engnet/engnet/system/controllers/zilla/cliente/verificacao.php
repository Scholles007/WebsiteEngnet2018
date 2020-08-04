<?php


if(!isset($_SESSION['usuario'])){
  header('Location: ../../index.php?critico=1');
}

if(!isset($_SESSION['id_usuario'])){
  header('Location: ../../index.php?critico=1');
}

if(!isset($_SESSION['privilegio'])){
  header('Location: ../../index.php?critico=1');
}

if($_SESSION['privilegio'] != 00){
  unset($_SESSION['usuario']);
  unset($_SESSION['id_usuario']);
  unset($_SESSION['senha']);
  unset($_SESSION['privilegio']);
  session_destroy();
  header('Location: ../../index.php?critico=1');
}

require_once('../../../system/controllers/zilla/db.class.php');

$objDb = new db();
$link = $objDb->conecta_mysql();

$id_usuario = $_SESSION['id_usuario'];
$privilegio = $_SESSION['privilegio'];

$verificar = "SELECT * FROM usuario_dados WHERE id_usuario = '$id_usuario' AND privilegio = '$privilegio'";

$resultado_id = mysqli_query($link, $verificar);

if($resultado_id){
  $seguranca = mysqli_fetch_array($resultado_id);

  if(isset($seguranca['privilegio'])){

    if($seguranca['privilegio'] != 00){
      unset($_SESSION['usuario']);
      unset($_SESSION['id_usuario']);
      unset($_SESSION['senha']);
      unset($_SESSION['privilegio']);
      session_destroy();
      header('Location: ../../index.php?critico=1');
    }

  } else {
    unset($_SESSION['usuario']);
    unset($_SESSION['id_usuario']);
    unset($_SESSION['senha']);
    unset($_SESSION['privilegio']);
    session_destroy();
    header('Location: ../../index.php?critico=1');
  }
} else {
  unset($_SESSION['usuario']);
  unset($_SESSION['id_usuario']);
  unset($_SESSION['senha']);
  session_destroy();
  header('Location: ../../index.php?critico=1');
}
//FINAL DA VERIFICAÇÃO

?>
