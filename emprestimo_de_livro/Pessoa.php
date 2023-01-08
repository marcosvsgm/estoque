<?php
class pessoa {
  // Properties
  public $Id_pessoa;
  public $Name;
  public $CPF;
  public $Endereco;
  public $DateNasc;

  // Methods
  function set_name($Id_pessoa,$Name,$CPF,$Endereco,$DateNasc) {
    $this->Id = $Id_pessoa;
    $this->nome = $Name;
    $this->cpf = $CPF;
    $this->endereco = $Endereco;
    $this->datanasc = $DateNasc;
  }
  function get_name() {
    return $this->name;
  }
}
?>