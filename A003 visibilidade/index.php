<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO php</title>
</head>
<body>
    <?php
        // instancia a classe caneta
        require_once 'classeCaneta.php'; // chamando o documento classe
        $c1 =  new Caneta; // recebe nova caneta
        $c1->modelo = "BIC cristal"; // definindo atributo
        $c1->cor = "Azul";
      //  $c1->ponta = 0.5; // privado não pode ser acessado dessa forma
      $c1->rabiscar(); // estou acessado um atributo protegido atravez de um metodo public porque esta na mesmas classe
      $c1->tampar(); // estou acessado um atributo protegido atravez de um metodo public porque esta na mesmas classe

    ?>
    <pre>
    <?php
        print_r($c1);
    ?>
    </pre>

</body>
</html>