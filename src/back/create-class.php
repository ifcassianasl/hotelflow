<?php 
  require_once('./header.php');
  require_once('../../classes/turma.php');
  require_once('../../classes/turmaDAO.php');

  $id = isset($_GET['id']);

  if($id){
    $id = $_GET['id'];
    $tdao = new TurmaDAO();
    $turma = $tdao->buscar(intval($id));
  }
?>

<main class="carousel carousel-slider center">
  <section class="carousel-item c-carousel-one indigo lighten-1" id="create-class">
    <a class="white-text left-align" href="./perfil.php">
      <i class="material-icons left">arrow_back</i>
      Perfil
    </a>
    <!-- <br> -->
    <div>
      <h6>Crie já sua turma</h6>
      <form action="./controllers/new-class.php" method="post">
        <div class="row">
          <div class="input-field col s12">
            <label for="nome">Nome da turma</label>
            <input id="nome" name="nome" type="text" class="validate" value="<?php if($id) echo $turma -> getNome();?>">
          </div>
          <div class="input-field col s12 l12">
            <label for="area">Área</label>
            <input id="area" name="area" type="text" class="validate" value="<?php if($id) echo $turma -> getArea();?>">
          </div>
          <div class="input-field col s12">
            <label for="sala">Sala</label>
            <input id="sala" name="sala" type="text" class="validate" value="<?php if($id) echo $turma -> getSala();?>">
          </div>
          <?php if($id){ ?>
            <input type="hidden" name="id" value="<?php echo $turma->getID();?>">
          <?php } ?>
        </div>
        <button class="btn btn-smart" type="submit">Enviar</button>
      </form>
    </div>
  </section>
</main>

<?php require_once('../front/footer.php'); ?>