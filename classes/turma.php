<?php
  class Turma {
    private $sala;
    private $area;
    private $nome;
    private $id;
    private $avisos;

    public function __construct ($nome, $sala, $area) {
      $this -> nome = $nome;
      $this -> sala = $sala;
      $this -> area = $area;
      $this -> avisos = [];
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

    public function getAvisos() {
      return $this -> avisos;
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

    public function setAvisos($avisos) {
      $this -> avisos = $avisos;
    }

    //FUNCTIONS

    public function addAviso($aviso) {
      array_push($this -> $avisos, $aviso);
    }
  }
?>