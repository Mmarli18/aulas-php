<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com PHP</title>
</head>

<body>
    <h1>Formulário e processamento juntos</h1>
    <hr>
<!-- Se o botão enviar foi acionado no formulario -->
    <?php
    if (isset($_POST['enviar'])) {
        $nome = $_POST["nome"];
        ?>
    <h2>Bem-vindo(a) <?=$nome?>!</h2>
    <hr>
    <?php    
} else {
    /* O formulário abaixo será exibido enquanto o botão enviar não for acionado, quando for acionado o formulário vai ser removido da pagina. */
    ?>

    <!-- Mantenha o action vazio para exibir resultado na mesma pagina -->
    <form autocomplete="off" action="" method="post"> <label for="nome">Nome:</label> <input required type="text" name="nome" id="nome"> <button type="submit" name="enviar">Enviar</button> </form>
    <?php } ?>

</body>

</html>