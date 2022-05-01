<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projeto controle remoto</title>
</head>
<body>
    <pre>
    <?php
        require_once 'controleRemoto.php';
        $c = new ControleRemoto();
        $c->ligar();
        $c->maisVolume();
        $c->maisVolume();
        $c->abrirMenu();

    ?>
    </pre>
</body>
</html>