<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php 
            
            //gettype() => função que retorna o tipo da variável
            $valor = '10';
            $valor2 = (boolean) $valor; //float double real

            echo $valor. ' ' .gettype($valor);
            echo '</br>';
            echo $valor2. ' ' .gettype($valor2);
            echo '</br>';
            echo "$valor2" .gettype($valor2);
            echo '</hr>';
            echo '</br>';
            $x = 13;
            $y = 10;

            echo "A soma entre $x e $y é " .($x + $y);
       ?>

    </body>
</html>