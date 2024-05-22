<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processando os dados </title>
</head>
<body>
    <h1>Processamento dos dados vindos do formulário</h1>
    <hr>

    <?php
/* Capturando os dados provenientes do formulário
usando o array superglobal $_POST[] se form usar método get, então usaríamos $_GET[]. */

$nome = $_POST['nome'];
$email = $_POST['email'];
$nascimento = $_POST['nascimento'];
$mensagem = $_POST['mensagem'];

// Operador (||) siginifica OU

if( empty ($nome) || empty($email) ){
    ?>
    <p>Campos obrigatórios <b>nome</b> e <b>e-mail!</b></p>
    <?php
} else {
?>


<h2>Dados Recebidos</h2>
<ul>
    <li>Nome: <?=$nome?> </li>
    <li>E-mail: <?=$email?> </li>

    <!-- OPERADOR !(NÃO/NEGAÇÃO) SE NÃO ESTIVER VAZIO (EMPTY) -->
    <?php if (!empty($nascimento) ){ ?>
    <li>Data de Nascimento: <?=$nascimento?> </li>
    <?php }?>

    <?php if (!empty($mensagem) ){ ?>
    <li>Mensagem: <?=$mensagem?> </li>
    <?php }?>

</ul>
<?php } ?>
</body>
</html>