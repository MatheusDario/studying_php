<?php 
  session_start();
  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
    header('Location: index.php?login=erro2'); //se não for autenciado é direcionado para a index
  }
?>