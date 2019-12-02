<?php 
  require_once('./header.php');
  require_once('../../classes/turmaDAO.php');
  require_once('../../classes/turma.php');
  require_once('../../classes/aviso.php');
  require_once('../../classes/avisoDAO.php');


  $id = isset($_GET['id']);
  $idAviso = isset($_GET['idAviso']);
  
  if($id){
    $id = $_GET['id'];
    $tdao = new TurmaDAO();
  }
  
  if($idAviso){
    $idAviso = $_GET['idAviso'];
    $adao = new AvisoDAO();
    $aviso = $adao -> buscar(intval($idAviso));
  }

  $turma = $tdao->buscar(intval($id));
?>

<div class="perfil">
  <a class="white-text left-align breadcrumb" href="./perfil.php">
    <i class="material-icons left">arrow_back</i>
    Perfil
  </a>

  <h4 class="white-text center"><?php echo $turma -> getNome(); ?></h4>
  <div id="dados">
    <div class="divider div-class center"></div>
    <form action="./controllers/novo-aviso.php<?php if($idAviso) { ?>?idAviso= <?php echo $idAviso;}?>" method="post">
      <div class="input-field col s12">
        <label for="aviso">Adicionar aviso</label>
        <input id="aviso" name="aviso" type="text" class="validate" value="<?php if($idAviso) echo $aviso -> getConteudo(); ?>">
      </div>
      <input type="hidden" id="idTurma" name="idTurma" value="<?php echo $id;?>">
      <button class="btn btn-smart" type="submit">Enviar</button>
    </form>
    <div class="divider div-class center"></div>
  </div>
  <article class="center">
    <?php require_once('./avisos.php'); ?>
  </article>
</div>

<?php include_once('../front/footer.php'); ?>