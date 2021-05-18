<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php
        	//Array (sequenciais) 
           $lista_frutas = array('Banna', 'Morango', 'Uva');
           $lista_frutas[] = 'Abacaxi'; 

           echo '<pre>';
           		var_dump($lista_frutas);
           echo '</pre>';
           echo '<hr/>';
           echo '<pre>';
           		print_r($lista_frutas);
           echo '</pre>';
           echo '<hr/>';

           //Array assosciativos
           $lista_frutas2 = ['a' => 'Pera', 'b' => 'Abacate'];
           echo '<pre>';
           		var_dump($lista_frutas2);
           echo '</pre>';
           echo '<hr/>';
           echo '<pre>';
           		print_r($lista_frutas2);
           echo '</pre>';
           echo '<hr/>';

           //Array multidimensional
           $lista_coisas = [];
           $lista_coisas['frutas'] = [1=> 'Banana', 'Maçã', 'Morango', 'Uva'];
           $lista_coisas['Pessoas'] = [1 =>'Pedro', 'Jessica', 'Leticia'];
           echo '<pre>';
           		var_dump($lista_coisas);
           echo '</pre>';
            echo '<hr/>';
           echo '<pre>';
           		print_r($lista_coisas);
           echo '</pre>';
           echo '<hr/>';

          //percorrendo Array funções => in_array() -> retorna true or false
          $existe = in_array('Banana', $lista_coisas['frutas']); 
          if($existe) {
          	echo 'Existe';
          }else {
          	echo 'Não existe';
          }
          echo '<hr/>';
          //array_search() -> Retorna o indice do valor pesquisado
          echo array_search('Morango', $lista_coisas['frutas']);
          echo '<hr/>';
          

          /*
			Principais Funções do Array:
			is_array(var) -> verifica true/false se é um array
			array_keys() -> retorna todas as chves de um array
			sort() -> Ordena o array em ordem alfabetica
			asort() -> Ordena o array porem mantem os indices
			count() - > Conta a quantidade de elementos do array 
			array_merge() -> funde um ou mais arrays
			explode() -> Divide uma string baseada em um delimitador
			impolode() -> Junta elementos de um array em uma string
          */
		echo is_array($lista_coisas);
		echo '<hr/>';
		print_r(array_keys($lista_coisas));
		echo '<hr/>';
		print_r($lista_frutas);
		sort($lista_frutas);
		echo '<hr/>';
		print_r($lista_frutas);
		echo '<hr/>';
		print_r(count($lista_frutas));
		$novo_array = array_merge($lista_frutas, $lista_frutas2);
		print_r($novo_array);
		echo '<hr/>';
		$x = '26/04/2018';
		$x_retorno = explode('/', $x);
		echo $x;
		echo '</br>';
		print_r($x_retorno);
		echo '<hr/>';
		$x_retorno2 = implode('.', $x_retorno);
		print_r($x_retorno2);
       ?>

    </body>
</html>