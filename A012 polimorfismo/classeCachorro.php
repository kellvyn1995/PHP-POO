<?php
require_once 'classeMamifero.php';
//sobrepondo a função
class Cachorro extends Mamifero{
    public function emitirSom()
    {
        echo "<p>AU!AU!</p>";
    }
}
?>