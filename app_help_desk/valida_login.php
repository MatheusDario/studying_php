<?php 

    //iniciando a sessao 
    session_start();
   
    //variavel que verifica se a autenticacao foi realizada
    $usuario_autenticado = false;

    //usuarios do sistema
    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '123456' ),
        array('email' => 'user@teste.com.br', 'senha' => 'abcd' ),
    );
   
    foreach($usuarios_app as $user) {
        
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado) {
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM'; //se for autenticado continua na pagina
        header('Location: home.php'); // direcionando para a página home
    } else {
        $_SESSION['autenticado'] = 'NÃO';
        header('Location: index.php?login=erro'); // se não é direcionado para a index
    }

    /*
    print_r($_GET);
    echo '<br/>';
    
    echo $_GET['email'];
    echo '<br/>';
    echo $_GET['senha'];
    
    
    print_r($_POST);
    echo '<br/>';
    
    echo $_POST['email'];
    echo '<br/>';
    echo $_POST['senha'];
    */

?>