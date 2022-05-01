<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livro</title>
</head>
<body>
    <pre>
        <?php
            require_once 'classePessoa.php';
            require_once 'classeLivro.php';
            $p[0] = new Pessoa("Kellvyn", 26,"M");
            $p[1] = new Pessoa("Karen", 19, "F");

            $l[0] = new Livro("PHP Básico", "josé da silva", 300, $p[0]);
            $l[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[0]);
            $l[2] = new Livro("PHP Avançado", "Ana Paulo", 800, $p[1]);

            // print_r($l[0]);
            $l[0]->abrir();
            $l[0]->folhar(80);
            $l[0]->detalhes();

        ?>
    </pre>
</body>
</html>