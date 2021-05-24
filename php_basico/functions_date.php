<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php 
            //
            echo date('d/F/o H:i');
            echo '<br/>';
            echo date_default_timezone_get();
            //echo date_default_timezone_set('America/Sao_Paulo');
            echo '<br/>';
            echo date('d/F/o H:i');
            echo '<br/>';

            $data_inicial = '2021-04-18 ';
            $data_final = '2021-09-18 ';

            $time_inicial = strtotime($data_inicial);
            echo $data_inicial. ' - ' .$time_inicial;
            echo '<br/>';
            $time_final = strtotime($data_final);
            echo $data_final. ' - ' .$time_final;
            echo '<br/>';
            $resultado = ($time_final - $time_inicial);
            echo '<br/>';
            $segundos_dia = 24 * 60 * 60;
            echo 'Um dia possui ' . $segundos_dia . ' segundos';
            $diferença =  $resultado / $segundos_dia;
            echo '<br/>';
            echo $diferença;

       ?>

    </body>
</html>