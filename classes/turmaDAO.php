<?php
  class TurmaDAO {
    private function getConexao () {
      $stringConnection = 'pgsql:host=localhost;dbname="Classon";port=5432';
      $con = new PDO($stringConnection, "postgres", "postgres");
      return $con;
    }

    public function inserir ($turma) {
      $con = $this -> getConexao();

      $sql ='INSERT INTO "Turma" ("nome", "area", "sala") 
        VALUES (?,?,?) RETURNING "id"';

      $stm = $con->prepare($sql);
      $stm -> bindValue(1, $turma -> getNome());
      $stm -> bindValue(2, $turma -> getArea());
      $stm -> bindValue(3, $turma -> getSala());


      $res = $stm -> execute();

      if($res){	
        $linha = $stm -> fetch(PDO::FETCH_ASSOC);
        $turma -> setID(intval($linha['id']));
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
      $sql = 'DELETE FROM "Turma" WHERE "id" = ?';
      
      $stm = $con->prepare($sql);
      $stm -> bindValue(1,$id);
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

    public function buscar ($id){
      $con = $this -> getConexao();
      $sql = 'SELECT * FROM "Turma" WHERE "id" = ?';
      $stm = $con -> prepare($sql);
      $stm -> bindValue(1, $id);

      $res = $stm -> execute();

      if($res){	
        $linha = $stm -> fetch(PDO::FETCH_ASSOC);
        $turma = new Turma($linha['nome'],$linha['sala'],$linha['area']);
        $turma -> setID(intval($linha['id']));
      }
      else{
        $turma = $res;
        echo $stm -> queryString;
        var_dump($stm -> errorInfo());
      }
      $stm -> closeCursor();
      $stm = NULL;
      $con = NULL;
      return $curso;
    }

    public function lista ($limit, $offset){
      $con = $this -> getConexao();
      $sql = 'SELECT * FROM "Turma" LIMIT ? OFFSET ?';
      $stm = $con -> prepare($sql);
      $stm -> bindValue(1, $limit);
      $stm -> bindValue(2, $offset);

      $res= $stm -> execute();
      $listTurma = array();
      if($res){	
        while($linha = $stm->fetch(PDO::FETCH_ASSOC)){
          $turma = new Turma($linha['nome'],$linha['sala'],$linha['area']);
          $turma -> setID(intval($linha['id']));
          array_push($listTurma, $turma);
        }
      }
      $stm -> closeCursor();
      $stm = NULL;
      $con = NULL;
      return $listCurso;
    }

    public function altera ($turma){
      $con = $this -> getConexao();
      $sql='UPDATE "Turma" SET "nome" = ?, "sala" = ?, "area" = ? WHERE "id" = ? ';
      $stm = $con -> prepare($sql);
      $stm -> bindValue(1, $turma -> getNome());
      $stm -> bindValue(2, $turma -> getSala());
      $stm -> bindValue(3, $turma -> getArea());
      $stm -> bindValue(4, $turma -> getID(), PDO::PARAM_INT);
      
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
  }
?>
