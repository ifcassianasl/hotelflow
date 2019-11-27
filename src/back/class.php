<?php 
    require_once('./header.php');
    include_once('../../classes/turmaDAO.php');
    include_once('../../classes/turma.php');
?>
<main class="carousel carousel-slider center">
  <section class="carousel-item c-carousel-one indigo lighten-1" id="turma">
    <h4>Nome da turma</h4>
    <div class="divider"></div>
    <div class="dados">
      <form action="./controllers/novo-aviso.php" method="post">
        <div class="input-field col s12">
          <input id="aviso" name="aviso" type="text" class="validate" placeholder="Adicionar aviso">
        </div>
      </form>
    </div>
  </section>
</main>

<?php include_once('../front/footer.php'); ?>