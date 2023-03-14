<?php

require_once("pessoa.class.php");

class Teste {
    private $pessoa;

    public function __construct(){
    $pessoa = new Pessoa();
    $pessoa->setNome($_POST['nome']);
    echo $pessoa->getNome();
}
^}

class Teste {
    private $pessoa;

    public function __construct(){
    $pessoa = new Pessoa();
    $pessoa->setTelefone($_POST['telefone']);
    echo $pessoa->getTelefone();
}
}

class Teste {
    private $pessoa;

    public function __construct(){
    $pessoa = new Pessoa();
    $pessoa->setOrigem($_POST['origem']);
    echo $pessoa->getOrigem();
}
}

class Teste {
    private $pessoa;

    public function __construct(){
    $pessoa = new Pessoa();
    $pessoa->setObservação($_POST['observação']);
    echo $pessoa->getObservação();
}


}new Teste ();

?>