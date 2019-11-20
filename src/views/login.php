<?php include_once('../front/header.php'); ?>

<main class="carousel carousel-slider center">
  <section class="carousel-item indigo lighten-1 white-text">
    <h4>Acessar Conta</h4>
    <form action="#" id="form-login">
      <div class="row">
        <div class="input-field col s12 l12">
          <label for="email">Email</label>
          <input id="email" type="email" class="validate">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <label for="password">Password</label>
          <input id="password" type="password" class="validate">
        </div>
      </div>
      <a class="btn waves-effect waves-light" href="./perfil.php">Entrar</a>
      <div class="links">
        <a href="#">Esqueci a senha</a>
        <a href="#">Não sou cadastrado</a>
      </div>
    </form>
  </section>
</main>

<?php include_once('../front/footer.php'); ?>