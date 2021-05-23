<? require_once "validador_acesso.php" ?>

<?php 
  //Iniciando o array de chamados vazio
  $chamados = array();

  //abrir o arquivo.hd
  $arquivo = fopen('arquivo.hd','r'); //abrindo o arquivo e efetuando apenas a leitura
  
  //percorrer o arquivo enquanto houver registros 
  while(!feof($arquivo)) { //procura o fim do arquivo aonde não existir nenhum arquivo
    $registro = fgets($arquivo, ); //recupera as informações
    $chamados[] = $registro; //populando o array com as informações 
  }

  //fechar o arquivo aberto
  fclose($arquivo);

?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="home.php">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <ul class="navbar-nav"><!-- Inicio do link de logoff -->
        <li class="nav-item">
          <a class="nav-link" href="logoff.php">SAIR</a>
        </li>
      </ul><!-- Fim do link de logoff -->
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
            
              <? foreach($chamados as $chamado) {  ?><!--Inicio do php percerrendo o array -->

                <?php 
                  $chamado_dados = explode('#', $chamado); //faz o tratamento da '#'

                  //desconsidera o último indice vazio
                  if(count($chamado_dados) < 3) {
                    continue;
                  }
                ?>
                <!--Atribui informações de maneira dinamica pelos indicies-->
                <div class="card mb-3 bg-light">
                  <div class="card-body">
                    <h5 class="card-title"><?=$chamado_dados[0]?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?=$chamado_dados[1]?></h6>
                    <p class="card-text"><?=$chamado_dados[2]?></p>

                  </div>
                </div>
              <? } ?><!--Fim do php percerrendo o array -->  
              
              <div class="row mt-5">
                <div class="col-6">
                    <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>