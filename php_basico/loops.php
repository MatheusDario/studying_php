<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php 
           $x = 10;
           //operadores de comparação | operadores lógicos
           while ($x < 100) {
                 $x += 10; //criterio de parada
                 if($x >= 100) {
                    break;
                 }
                echo "$x </br>";
                echo '<hr/>';

              
           };
        echo 'FIM';
        echo "</br>";
        echo '<hr/>';
           
           //A diferença de do-while p/ while que vai ser executado pelo menos uma vez
            $y= 2;
           do {

                echo "$y </br>";
                echo '<hr/>';
                $y++;

           } while($y > 1 && $y <= 10); 

            echo 'FIM 2';
            echo "</br>";
            echo '<hr/>';

            /*
            for(variavel; condicao; incremento) {
            ESTRUTURA DO LAÇO FOR
            }
            */
            for($z = 10; $z < 40; $z+=10) {
                echo "$z </br>";
                echo '<hr/>';
            }

            echo 'FIM3';
            echo "</br>";
            echo '<hr/>';

            $registros = [ ['titulo' => 'Titulo Noticia 1', 'conteudo' => 'Conteudo Noticia 1'], 
                        ['titulo' => 'Titulo Noticia 2', 'conteudo' => 'Conteudo Noticia 2'],
                        ['titulo' => 'Titulo Noticia 3', 'conteudo' => 'Conteudo Noticia 3'], 
                        ['titulo' => 'Titulo Noticia 4', 'conteudo' => 'Conteudo Noticia 4']];


            $count = 0;
            while($count < count($registros)) {
                print_r('<h3>' . $registros[$count]['titulo'] . '</h3>');
                echo '<p>' . $registros[$count]['conteudo'] . '</p>';
                //print_r($registros[$count]['conteudo']);
                echo '<hr/>';

                $count++;
            }

           

       ?>

    </body>
</html>