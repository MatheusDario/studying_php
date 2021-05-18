<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php 
           
           //void -> sem retorno
           function exbirBoasVindas() {
            echo 'Seja bem-vindo!<hr/>';
           }
           exbirBoasVindas();
           

           //return - com retorno
           function calcularAreaTerreno($largura, $comprimento) {
            $area = $largura * $comprimento;
            return $area;
           }
           echo'O resultado do calculo é : ' .calcularAreaTerreno(5, 25);

           echo'<hr/>';

           //exercicios - criar uma função que calcula o imposto de renda com base em um salário passado por um parâmentro. 

           function calcularImpostoRenda($salario) {
            $imposto = 0;

            if($salario <= 1903.98) {
                $imposto = 0;
                echo'O valor do imposto é: ' .$imposto;
            }else if($salario >= 1903.99 && $salario <= 2826.65) {
                $imposto = ($salario * 7.5) / 100;
                echo 'Paga 7,5% imposto e  valor do imposto é:' .$imposto;;
            }else if($salario >= 2826.66 && $salario <= 3751.05 ) {
                $imposto = ($salario * 15) / 100;
                echo 'Paga 15% imposto e o valor do imposto é:' .$imposto;;   
           }else if($salario >= 3751.06 && $salario <= 4664.68) {
            $imposto = ($salario * 22.5) / 100;
            echo 'Paga 22,5% imposto e o valor do imposto é:' .$imposto;;
           }else {
            $imposto = ($salario * 27.5) / 100;
            echo 'Paga 27,5% imposto e o valor do imposto é:' .$imposto;;
           }

        }

            echo calcularImpostoRenda(4700);
       ?>

    </body>
</html>