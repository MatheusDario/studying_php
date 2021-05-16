<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php 
            //string
            $nome = "Matheus Dario";

            //int
            $idade = 23;

            //float
            $peso = 95.50;

            //boolean
            $fumante_sn = false;

            //..logica..//
            $idade = 24;
        ?>
        <h1>Ficha Cadastral</h1>
        <br/>
        <p>Nome: <?=$nome ?></p>
        <p>Idade: <?=$idade ?></p>
        <p>Peso: <?=$peso ?></p>
        <p>Fumante: <?=$fumante_sn ?></p>
       
    </body>
</html>