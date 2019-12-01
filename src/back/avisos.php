<?php 
  require_once('../../classes/aviso.php');
  require_once('../../classes/avisoDAO.php');

  $id = isset($_GET['id']);
  
  if($id){
    $id = $_GET['id'];
    $tdao = new TurmaDAO();
  }

  $avisoDAO = new AvisoDAO();

  $avisos = $avisoDAO -> lista();
?>

<div class="avisos">
  <h5>Seus avisos</h5>
  <ul class="collection" id="avisos">
  <?php
    $count = 0;
    foreach($avisos as $aviso) {
      if(intval($id) === $aviso -> getTurma()) {
        $count++;
    ?>
      <li>
        <div class="collection-item transparent"> 
          <?php echo $aviso -> getConteudo() ?>
          <br>
          <span class="align-right">
            <a href="create-class.php?id=<?php echo $id?>&idAviso=<?php echo $aviso->getID(); ?>" class="white-text">
              <i class="material-icons">edit</i>
            </a>
            <a href="./controllers/excluir-aviso.php?id=<?php echo $id?>&idAviso=<?php echo $aviso->getID(); ?>" class="white-text">
              <i class="material-icons">delete</i>
            </a>
          </span>
        </div>
      </li>
      <div class="divider"></div>
  <?php  }
    } 
    if ($count === 0) { ?>
      <div class="aviso">
        <h5>Essa turma ainda não possui avisos!</h5>
      </div>
    <?php } ?>
  </ul>
</div>