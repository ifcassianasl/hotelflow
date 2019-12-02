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

<main class="carousel carousel-slider center">
  <section class="carousel-item c-carousel-one indigo lighten-1" id="turma">
    <a class="white-text left-align breadcrumb" href="./perfil.php">
      <i class="material-icons left">arrow_back</i>
      Perfil
    </a>

    <h4><?php echo $turma -> getNome(); ?></h4>
    <div class="divider"></div>
    <div id="dados">
      <form action="./controllers/novo-aviso.php?idAviso=<?php if($idAviso) echo $idAviso?>" method="post">
        <div class="input-field col s12">
          <label for="aviso">Adicionar aviso</label>
          <input id="aviso" name="aviso" type="text" class="validate" value="<?php if($idAviso) echo $aviso -> getConteudo(); ?>">
        </div>
        <input type="hidden" id="idTurma" name="idTurma" value="<?php echo $id;?>">
        <button class="btn btn-smart" type="submit">Enviar</button>
      </form>
    </div>
    <div class="divider"></div>
    <article class="center">
      <?php require_once('./avisos.php'); ?>
    </article>
  </section>
</main>

<?php include_once('../front/footer.php'); ?>