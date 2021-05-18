<h1>Doação de Sangue</h1>

<?php 
    $idade = 15;
    $peso = 51;
    $doar_sangue = false;

    if($idade >= 16 && $idade <= 69 && $peso > 50) {
        $doar_sangue = true;
    }else {
        $doar_sangue = false;
    }
?>

<p>Posso doar sangue?</p>
<?=$doar_sangue ? 'Atende os requisitos' : 'NÃO atende os requisitos' ?>