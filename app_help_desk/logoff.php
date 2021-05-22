<?php
    session_start();

    session_destroy();
    header('Location: index.php');
    /*
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    //remover índices do array de sessão
    //unset() << remover índices de qualquer array 
    unset($_SESSION['x']); //Remover o indice apenas se existir

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    //destruir a varável de sessão
    //session_destroy()
    session_destroy(); //será destrída após um novo redirecionamento, por isso é preciso forçar

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    */
?>