<?php
  class Turma {
    private $sala;
    private $area;
    private $nome;
    private $id;

    public function __construct ($nome, $sala, $area) {
      $this -> nome = $nome;
      $this -> sala = $sala;
      $this -> area = $area;
    }

    // GETTERS

    public function getNome() {
      return $this -> nome;
    }

    public function getSala() {
      return $this -> sala;
    }

    public function getArea() {
      return $this -> area;
    }


    public function getID() {
      return $this -> id;
    }

    // SETTERS

    public function setNome($nome) {
      $this -> nome = $nome;
    }

    public function setSala($sala) {
      $this -> sala = $sala;
    }

    public function setArea($area) {
      $this -> area = $area;
    }

    public function setID($id) {
      $this -> id = $id;
    }
  }
?>