<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php 
            
            //XOR => uma expressão verdadeira e outra falsa
           if(!(3 === 3 XOR 10 > 3)) {
               echo 'Verdadeiro';
           } else {
               echo 'Falso';
           }

           $usuario_possui_cartao_loja = true;
           $valor_compra = 110;
           $valor_frete = 50;
           $recebeu_desconto_frete = false;

           if($usuario_possui_cartao_loja == true && $valor_compra >= 400) {
               $valor_frete = 0;
               $recebeu_desconto_frete = true;
           }else if($usuario_possui_cartao_loja == true && $valor_compra >= 300) {
                $valor_frete = 10;
                $recebeu_desconto_frete = true;
           }else if($usuario_possui_cartao_loja == true && $valor_compra >= 100) {
                $valor_frete = 25;
                $recebeu_desconto_frete = true;
           }
        ?>

        <h1>Detalhes do Pedido</h1>
        <P>Possui cartão da loja?
           <?php 
                if($usuario_possui_cartao_loja == true) {
                    echo 'SIM';
                } else {
                    echo 'NÃO';
                }
           ?>
        </p>

        <p>Valor da compra: <?= $valor_compra ?> </p>

        <P>Recebeu desconto no frete?
           <?php 
                if($recebeu_desconto_frete == true) {
                    echo 'SIM';
                } else {
                    echo 'NÃO';
                }
           ?>
        </p>

        <p>Valor do frete: <?= $valor_frete ?> </p>
       
    </body>
</html>