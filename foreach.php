<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>
        <h3>FOREACH - Percorrer Arrays e obejtos</h3>

        <?php

       $numeros = [];
       while(count($numeros) <= 2) {
        $num = rand(1, 60);
            if(!in_array($num, $numeros)) {
                $numeros[] = $num;
            }
       }
       
       print_r($numeros);

          /*
          $itens = array(
            ['nome' => 'sofa ', 'valor' => '500', 'disponibilidade' => 'Disponnivel'], 
            ['nome' => ' cama ', 'valor' => '3000'], 
            ['nome' => ' mesa ', 'valor' => '2000'],
            ['nome' => ' banho', 'valor' => '50']);

          echo '<pre>';
          print_r($itens);
          echo '</pre>';
          
            foreach($itens as $idx => $produto) {
                foreach($produto as $idx2 => $valor2 ) {
                    echo "$idx2 - $valor2 <br />"; 
                }
                echo '<hr />';
            }
            */


       ?>
    </body>
</html>