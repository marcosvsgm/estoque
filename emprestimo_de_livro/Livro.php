<?php
class Livro {
  // Properties
  public $Id_livro;
  public $Name;
  public $Autor;
  public $ANO;
  public $Preco;
  // Methods
  function __construct($Id_livro,$Name,$Autor,$ANO,$Preco){
    $this->id = $Id_livro;
    $this->name = $Name;
    $this->autor = $Autor;
    $this->ano = $ANO;
    $this->preco = $Preco;
  }
  function get_name() {
    return $this->name;
  }

  function get_autor() {
    return $this->autor;
  }

  function get_ano() {
    return $this->ano;
  }

  function get_preco() {
    return $this->preco;
  }

}


