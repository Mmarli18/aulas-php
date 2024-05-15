<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
</head>
<body>
    <h1>Exercício 02</h1>
    <hr>
    <p>Faça um array (numérico OU associativo) chamado dados contendo as seguintes informações:</p>
<p>
Nome de usuário (exemplo: chapolin.colorado)
Senha (exemplo: 123teste)
Idade (exemplo: 30)
Cidade (exemplo: São Paulo)
Telefones (exemplo: 11-2135-0300 e 11-91234-5678)
Em seguida, mostre somente os valores de nome de usuário, idade, cidade e um dos telefones em uma lista ordenada HTML.</p>

<hr>

    <?php
    $dados = array(
        "usuario" => "taylor",
        "senha" => "123teste",
        "idade" => 35,
        "cidade" => "São Paulo",
        "telefones" => ["11-2135-0000", "11-3050-1000"]
    );
    ?>

    <ol>
    <li>Login: <?=$dados["usuario"]?></li>
    <li>Idade: <?=$dados["idade"]?> anos </li>
    <li>Cidade: <?=$dados["cidade"]?></li>
    <li>telefone: <?=$dados["telefones"][1]?></li>
    </ol>



</body>
</html>