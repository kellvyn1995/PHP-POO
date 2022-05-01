<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lutas</title>
</head>
<body>
    <pre>
    <?php
    require_once 'classeLutador.php';
    require_once 'classeLuta.php';
    $l1 = array();
    $l1[0] = new Lutador("kellvyn","Brasil",     26, 1.70, 64, 11, 2, 1);
    $l1[1] = new Lutador("MONOEL","França",   32, 1.70, 63, 8, 3,  2);
    $l1[2] = new Lutador("DANIEL 2","EUA",      29, 1.79, 78, 15, 1, 2);
    $l1[3] = new Lutador("DIEGO 3","Portugal", 34, 1.90, 95, 11, 2, 1);
    $l1[4] = new Lutador("CARLOS 4","Mexico",   28, 1.78, 87, 11, 2, 1);

    $UEC01 = new Luta();
    $UEC01->marcarLuta($l1[0],$l1[1]);
    $UEC01->lutar();

    $l1[0]->status();
    $l1[1]->status();


    ?>
    </pre>
</body>
</html>