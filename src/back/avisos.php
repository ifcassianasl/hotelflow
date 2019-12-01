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
      foreach($avisos as $aviso) {
        if(intval($id) === $aviso -> getTurma()) {
    ?>
      <li> 
        <div class="collection-item transparent waves-effect waves-light"> 
          <?php echo $aviso -> getConteudo() ?>
          <span>
            <a href="create-class.php?id=<?php echo $aviso->getID(); ?>" class="white-text">
              <i class="material-icons">edit</i>
            </a>
            <a href="./controllers/excluir.php?id=<?php echo $aviso->getID(); ?>" class="white-text">
              <i class="material-icons">delete</i>
            </a>
          </span>
        </div>
      </li>
      <div class="divider"></div>
    <?php  }
      } ?>
  </ul>
</div>