<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO php</title>
</head>
<body>
    <?php
        // instacia a classe caneta
        require_once 'classeCaneta.php'; // chamando o documento classe
        $c1 =  new Caneta; // recebe nova caneta
        $c1->cor = "Azul"; // colocando os atributos 
        $c1->ponta = 0.5; // colocando os atributos 
        $c1->tampada = false; // colocando os atributos 
        $c1->tampar(); // chamada pro metodo tampar caneta

        var_dump($c1); // vai mostra o estado atual do objeto c1
        print_r($c1);
    ?>
    <br>
    <?php
        $c1->rabiscar(); //chamndo o metodo rabiscar
    ?>
</body>
</html>