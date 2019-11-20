<?php
  class AvisoDAO {
    private function getConexao () {
      $stringConnection = 'pgsql:host=localhost;dbname="Classon";port=5432';
      $con = new PDO($stringConnection, "postgres", "postgres");
      return $con;
    }

    public function inserir ($aviso) {
      $con = $this -> getConexao();

      $sql ='INSERT INTO "Aviso" ("conteudo", "idTurma") 
        VALUES (?,?) RETURNING "id"';

      $stm = $con->prepare($sql);
      $stm -> bindValue(1, $aviso -> getConteudo());
      $stm -> bindValue(2, $aviso -> getTurma() -> getID());


      $res = $stm -> execute();

      if($res){	
        $linha = $stm -> fetch(PDO::FETCH_ASSOC);
        $aviso -> setID(intval($linha['id']));
      }
      else{
        echo $stm -> queryString;
        var_dump($stm -> errorInfo());
      }
      $stm -> closeCursor();
      $stm = NULL;
      $con = NULL;
      return $res;
    }

    public function excluir ($id){
      $con = $this -> getConexao();
      $sql = 'DELETE FROM "Aviso" WHERE "id" = ?';
      
      $stm = $con -> prepare($sql);
      $stm -> bindValue(1, $id);
      $res = $stm -> execute();

      if(!$res){
        echo $stm -> queryString;
        var_dump($stm -> errorInfo());
      }
      $stm -> closeCursor();
      $stm = NULL;
      $con = NULL;
      return $res;
    }

    public function buscar ($id){
      $con = $this -> getConexao();
      $sql = 'SELECT * FROM "Aviso" WHERE "id" = ?';
      $stm = $con -> prepare($sql);
      $stm -> bindValue(1, $id);

      $res = $stm -> execute();

      if($res){	
        $linha = $stm -> fetch(PDO::FETCH_ASSOC);
        $aviso = new Aviso($linha['conteudo']);
        //TODO: turma por id
        $aviso -> setID(intval($linha['id']));
      }
      else{
        $aviso = $res;
        echo $stm -> queryString;
        var_dump($stm -> errorInfo());
      }
      $stm -> closeCursor();
      $stm = NULL;
      $con = NULL;
      return $aviso;
    }

    public function lista ($limit, $offset){
      $con = $this -> getConexao();
      $sql = 'SELECT * FROM "Aviso" LIMIT ? OFFSET ?';
      $stm = $con -> prepare($sql);
      $stm -> bindValue(1, $limit);
      $stm -> bindValue(2, $offset);

      $res = $stm -> execute();
      $listAviso = array();

      if($res){	
        while($linha = $stm->fetch(PDO::FETCH_ASSOC)){
          $aviso = new Aviso($linha['conteudo']);
          //TODO: turma por id
          $aviso -> setID(intval($linha['id']));
          array_push($listAviso, $aviso);
        }
      }
      $stm -> closeCursor();
      $stm = NULL;
      $con = NULL;
      return $listAviso;
    }

    public function altera ($aviso){
      $con = $this -> getConexao();
      $sql='UPDATE "Aviso" SET "conteudo" = ? WHERE "id" = ? ';
      $stm = $con -> prepare($sql);
      $stm -> bindValue(1, $aviso -> getConteudo());
      $stm -> bindValue(2, $aviso -> getID(), PDO::PARAM_INT);
      
      $res = $stm->execute();
      
      if(!$res){
        echo $stm -> queryString;
        var_dump($stm -> errorInfo());
      }
      
      $stm -> closeCursor();
      $stm = NULL;
      $con = NULL;
      return $res;
    }
  }
?>
