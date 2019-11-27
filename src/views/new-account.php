<?php 
  require_once('../front/header.php');?>

<main class="carousel carousel-slider center">
  <section class="carousel-item indigo lighten-1 white-text">
    <h4>Criar Conta</h4>
    <form action="#" id="form-login">
      <div class="row">
        <div class="input-field col s12">
          <label for="name">Nome</label>
          <input id="name" type="text" class="validate">
          </div>
        <div class="input-field col s12 l12">
          <label for="email">Email</label>
          <input id="email" type="email" class="validate">
        </div>
        <div class="input-field col s12">
          <label for="password">Senha</label>
          <input id="password" type="password" class="validate">
        </div>
        <div class="input-field col s12">
          <label for="confirm-password">Confirmar senha</label>
          <input id="confirm-password" type="password" class="validate">
        </div>
      </div>
      <a class="btn waves-effect waves-light" href="../back/perfil.php">Confirmar
        <i class="material-icons right">send</i>
      </a>        
    </form>
  </section>
</main>

<?php include_once('../front/footer.php'); ?>