<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once 'classeMamifero.php';
    require_once 'classeAve.php';
    require_once 'classePeixe.php';
    require_once 'classeReptil.php';
    require_once 'classeCachorro.php';

    $m = new Mamifero();
    $a = new Ave();
    $r = new Reptil();
    $c = new Cachorro();

    $m->setPeso(33.5);
    $m->locomover();
    $a->locomover();
    $r->locomover();
    $c->locomover();
    $c->emitirSom();

    ?>
</body>
</html>