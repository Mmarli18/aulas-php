<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
<h1>Variáveis e Constantes</h1>
<hr>

<?php
// Variáveis 
$curso = "Programador Web";
$ano = "2024";
$area = "Back-End";

// Estamos no Programador web em 2024

// Saída interpolada (Tem que ser com aspas duplas)
echo "<p>Estamos no $curso em $ano.</p>";

// Com aspas simples não funciona
echo '<p>Estamos no $curso em $ano.</p>';


// Constantes (primeira parametro, segundo valor)
// Abaixo duas maneiras de declarar constante (define ou const)
define("AUTOR", "MARLI MORAIS");
const EMPRESA = "ABC TECNOLOGIA"; 

// Marli trabalha na empresa ABC Tecnologia

echo "<p>" .AUTOR . " trabalha na empresa " .EMPRESA. "</p>";

?>


</div>    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>