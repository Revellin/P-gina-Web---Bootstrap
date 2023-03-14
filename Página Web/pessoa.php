<?php

//Classe
class Pessoa{
    //Atributos
    private $nome;
    private $telefone;
    private $origem;
    private $observação;
   

    //Método GET
    public function getNome (){
      return $this->nome;
    }
    
    //Metodo SET
    public function setNome ($nome) {
        $this -> nome = $nome;
    }

   //Método GET
   public function getTelefone (){
    return $this->getTelefone;
  }
  
  //Metodo SET
  public function setTelefone ($telefone) {
      $this -> telefone = $telefone;
  }

  //Método GET
  public function getOrigem (){
    return $this->getOrigem;
  }
  
  //Metodo SET
  public function setOrigem($origem) {
      $this -> origem = $origem;
  }

  //Método GET
  public function getObservação (){
    return $this->getObservação;
  }
  
  //Metodo SET
  public function setObservação ($observação) {
      $this -> observaçãp= $observação;
  }
}

?>