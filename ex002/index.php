<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo PHP</title>
</head>
<body>
    <h1>Exemplo PHP</h1>
    <?php
        // configurando timezone local
        date_default_timezone_set("America/Sao_Paulo");
        // exibindo dados locais
        echo "Hoje é dia! " . date("d/M/Y");
        echo " e a hora é " . date("G:i:s T");
    ?>
</body>
</html>