<?php 
    //formatando o array e tratando o '#' caso o usuário insira 
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    //concatenando as informações com '#' e inserindo uma quebra de linha no final 
    $texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    //abertura do arquivo
    $arquivo = fopen('arquivo.hd','a'); //função nativa do php p/ abertura

    //escrevendo o texto
    fwrite($arquivo, $texto); //função p/ escrita do arquivo

    //fechando o arquivo
    fclose($arquivo); //função que encerra a abertura

    header('Location: abrir_chamado.php?enviar=sucesso');
    
?>