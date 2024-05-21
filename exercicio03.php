<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style> 
.list-group-item:nth-child(odd){
    background-color: lightblue;
}
</style>
</head>

<body>
    <div class="container">
        <h1>Exercício de PHP</h1>
        <hr>
        <p>Crie um array contendo o nome dos 12 meses do ano.</p>

        Monte uma lista ordenada exibindo o nome de cada mês em um item.

        DESAFIO: formate a listade uma forma que os meses apareçam com cores alternadas. Exemplo: janeiro/março em azul, fevereiro/abril em vermelho etc.</p>

        <?php
        $meses =  [ 
        "Janeiro",
        "Fevereiro",
        "Março",
        "Abril",
        "Maio",
        "Junho",
        "Julho",
        "Agosto",
        "Setembro",
        "Outubro",
        "Novembro",
        "Dezembro"
    ];
        ?>
        <!-- OL tem que ser colocado fora do foreach -->
    <ol class="list-group list-group-numbered">
<?php
    foreach( $meses as $mes){  
        ?>
            <li class="list-group-item"> <?=($mes)?></li>
        
        <?php } ?>
        </ol>
    </div>

</body>

</html>
