<?php

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    //tratando exptions 
    try {
        $conexao = new PDO($dsn, $usuario , $senha);
        
        $query = '
            select * from tb_usuarios 
        ';
        
        //$stmt = $conexao->query($query);
        foreach($conexao->query($query) as $key => $value) {
            print_r($value['nome']);
            echo '<hr>';
        }
        
        //$lista_usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC); //Indices associativos/ FETCH_NUM/ FETCH_OBJ Indices objetos 
        
        //echo '<pre>';
        //print_r($lista_usuarios);
        //echo '</pre>';
        /*
        foreach($lista_usuarios as $key => $value) {
            echo($value['nome']);
            echo '<hr>';
        }
        */

    } catch(PDOException $e) {
        echo 'Erro: '.$e->getCode(). ' Mensagem: ' .$e->getMessage();
    }
   
?>