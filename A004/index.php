<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
        require_once 'ClasseCaneta.php';
        $c1 = new Caneta();
        $c1->setModelo("BIC"); // ou pode ser feito assim '$c1->modelo = "BIC"' o mesmo não funciona para ponta da caneta já que o atributo é privado
        $c1->setPonta(0.5);
        print_r($c1);
        echo "<br>";
        print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
        echo "<br>";

        $c2 = new CanetaPronta("NIC","VERMELHA",0.7);
        print_r($c2);
    ?>
    </pre>
</body>
</html>