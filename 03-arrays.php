<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <div class="container">
<h1>Arrays</h1>
<hr>
<H2>Arrays numéricos/indexados</H2>
<?php

// Declarando arrays

$bandas = ["Rush", "Slayer", "Nightwish"];
$cursos = array("HTML5", "PHP", "Design", "JS");

define("UNIDADES_SESC", ["BELENZINHO", "BERTIOGA"]);
const UNIDADES_SENAC = ["Penha", "São Miguel", "Itaquera"];

?>

<h3>Acesso e saída de dados</h3>

<p>Curto a banda <?=$bandas[1]?>.</p>
<p>Já estudei <?=$cursos[3]?></p>
<p>Gostaria de conhecer o Sesc <?=UNIDADES_SESC[1]?></p>
<p>Estamos no Senac <?=UNIDADES_SENAC[0]?></p>

<hr>

<h2>Arrays associativos</h2>

<?php

$filme = [
    // Chave associativa
    "titulo" => "Deadpool",
    "ano" => 2016,
    "genero" => "Ação",
    "personagens" => ["Wade Wilson", "Fanático"]
];

$livro = array(
    "titulo" => "Senhor dos Anéis",
    "autor" => "Tolkien"

);
?>

<h3>Acesso a saída de dados</h3>
<p>O filme <?=$filme["titulo"]?> foi lançado em 
<?=$filme["ano"] ?> </p>

<p><?=$livro["titulo"]?> é um ótimo livro. </p>

<hr>

<h2>Comandos úteis para análise/depuração de arrays</h2>

<h3><code>print_r()</code> e <code>var_dump()</code></h3>

<!-- Tag Pre faz uma pré formatação -->
<pre><?=print_r($bandas)?></pre>


<pre><?=var_dump($bandas)?></pre>

</div>
</body>
</html>