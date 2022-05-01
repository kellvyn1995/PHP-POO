<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO php</title>
</head>
<body>
    <pre>
    <?php
        require_once 'ClasseConta.php';
        $p1 = new ContaBanco(); // cliente 1
        $p2 = new ContaBanco(); // clienet 2

        $p1->abrirConta("CC");
        $p1->setNumConta(1111);
        $p1->setDono("jose");
        $p2->abrirConta("CP");
        $p2->setNumconta(2222);
        $p2->setDono("Creuza");

        $p1->depositar(300);
        $p2->depositar(500);

        $p1->pagarMensal();
        $p2->pagarMensal();
        
        print_r($p1);
        print_r($p2);
    ?>
    </pre>
</body>
</html>