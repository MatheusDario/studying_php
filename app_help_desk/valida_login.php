<?php 

    //iniciando a sessao 
    session_start();
   
    //variavel que verifica se a autenticacao foi realizada
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    //Array de perfis 
    $perfis = array(1 => 'Administrativo', 2 => 'Usuário');

    //usuarios do sistema
    $usuarios_app = array(
        array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '1234', 'perfil_id' => 1 ),
        array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '1234', 'perfil_id' => 1 ),
        array('id' => 3, 'email' => 'jose@teste.com.br', 'senha' => '1234', 'perfil_id' => 2 ),
        array('id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '1234', 'perfil_id' => 2 ),
    );
   
    foreach($usuarios_app as $user) {
        
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
            $usuario_id = $user['id']; //idenficando o id p/ cada usuario
            $usuario_perfil_id = $user['perfil_id']; //identificando o perfil de cada usuario cadastrado
        }
    }

    if($usuario_autenticado) {
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM'; //se for autenticado continua na pagina
        $_SESSION['id'] = $usuario_id; //id disponivel no escopo global da aplicação através do session
        $_SESSION['perfil_id'] = $usuario_perfil_id; //Perfil id disponivel no escopo global
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