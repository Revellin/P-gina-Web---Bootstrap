<?php

require_once("pessoa.php");

class Teste {
    private $pessoa;

    public function __construct(){
    $pessoa = new Pessoa();
    $pessoa->setNome($_POST['nome']);
    echo "Nome é: " . $pessoa->getNome() . "<br>";

    $pessoa->setTelefone($_POST['telefone']);
    echo "Telefone é: " . $pessoa->getTelefone() . "<br>";

    $pessoa->setOrigem($_POST['origem']);
    echo "Origem é: " . $pessoa->getOrigem() . "<br>";
    $pessoa->setObservação($_POST['observação']);
    echo "Observação é: " . $pessoa->getObservação() . "<br>";
}
}new Teste ();

?>
