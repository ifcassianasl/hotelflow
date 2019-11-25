<?php 
  include_once('../../classes/turmaDAO.php');
  include_once('../../classes/turma.php');
?>

<div class="turmas">
  <h6>Minhas turmas</h6>
  <a href="./create-class.php" class="btn btn-smart">Criar turma</a>
  <ul class="collection" id="my-classes">
    <?php
      $turmaDAO = new TurmaDAO();
      $listTurma = $turmaDAO -> lista();
      foreach($listTurma as $turma) {
        echo '<li> <a href="#" class="collection-item transparent waves-effect waves-light white-text">'. 
          $turma->getNome() .'</a></li>
        <div class="divider"></div>';
      }
    ?>
  </ul>
</div>