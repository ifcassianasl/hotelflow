<?php 
  include_once('../../classes/turmaDAO.php');
  include_once('../../classes/turma.php');
?>

<div class="turmas white-text">
  <h6>Minhas turmas</h6>
  <a href="./create-class.php" class="btn btn-smart">Criar turma</a>
  <ul class="collection" id="my-classes">
    <?php
      $turmaDAO = new TurmaDAO();
      $listTurma = $turmaDAO -> lista();
      foreach($listTurma as $turma) {
    ?>
      <li class="collection-item"> 
        <div> 
          <a href="class.php?id=<?php echo $turma->getID(); ?>"  class="white-text">
            <?php echo $turma -> getNome() ?>
          </a>
          <span>
            <a href="create-class.php?id=<?php echo $turma->getID(); ?>" class="light-green-text">
              <i class="material-icons">edit</i>
            </a>
            <a href="./controllers/excluir.php?id=<?php echo $turma->getID(); ?>" class="red-text">
              <i class="material-icons">delete</i>
            </a>
          </span>
        </div>
      </li>
      <div class="divider"></div>
    <?php  } ?>
  </ul>
</div>