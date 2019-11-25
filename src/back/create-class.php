<?php include_once('./header.php'); ?>

<main class="carousel carousel-slider center">
  <section class="carousel-item c-carousel-one indigo lighten-1" id="create-class">
    <a class="white-text left-align" href="./perfil.php">
      <i class="material-icons left">arrow_back</i>
      Perfil
    </a>
    <!-- <br> -->
    <div>
      <h6>Crie já sua turma</h6>
      <div class="row">
        <div class="input-field col s12">
          <label for="nome-turma">Nome da turma</label>
          <input id="nome-turma" type="text" class="validate">
        </div>
        <div class="input-field col s12 l12">
          <label for="area">Área</label>
          <input id="area" type="text" class="validate">
        </div>
        <div class="input-field col s12">
          <label for="sala-turma">Sala</label>
          <input id="sala-turma" type="number" class="validate">
        </div>
      </div>
      <a href="#" class="btn btn-smart">Finalizar</a>
    </div>
  </section>
</main>

<?php include_once('../front/footer.php'); ?>