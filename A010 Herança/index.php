<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>
<body>
    <pre>
        <?php
            require_once 'superclasse pessoa.php';
            require_once 'classe aluno.php';
            require_once 'classe professor.php';
            require_once 'classe funcionario.php';
            // programa pricipal

            $p1 = new Pessoa();
            $p2 = new Aluno();
            $p3 = new Professor();
            $p4 = new Funcionario();

            $p1->setNome("Pedro");
            $p2->setNome("Marcia");
            $p3->setNome("Claudio");
            $p4->setNome("Faniana");

            $p1->setSexo("M");
            $p2->setSexo("F");

            $p2->setCurso("informatica");
            $p3->setSalario(2500.75);
            $p4->setSetor("Estoque");


            $p3->receberAumento(550.20);
            $p4->mudarTrabalho();
            $p2->cancelarMatr();

            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);
        ?>
    </pre>
</body>
</html>