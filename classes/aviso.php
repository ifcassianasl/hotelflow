<?php
  class Aviso {
    private $id;
    private $conteudo;
    private $turma;

    public function __construct($conteudo, $turma) {
      $this -> conteudo = $conteudo;
      $this -> turma = $turma;
    }

    //GETTERS

    public function getConteudo() {
      return $this -> conteudo;
    }

    public function getID() {
      return $this -> id;
    }

    public function getTurma() {
      return $this -> turma;
    }

    // SETTERS 

    public function setConteudo($conteudo) {
      $this -> conteudo = $conteudo;
    }

    public function setID($id) {
      $this -> id = $id;
    }
  }
?>