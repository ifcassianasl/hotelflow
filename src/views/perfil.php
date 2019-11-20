<?php include_once('../front/header.php'); ?>

<main class="carousel carousel-slider center">
  <section class="carousel-item c-carousel-one indigo lighten-1" id="perfil">
    <article class="center">
      <div class="center foto-perfil">
        <img src="http://via.placeholder.com/60x60" alt="foto de perfil" class="materialboxed responsive-img circle">
        <h6>Nome do usuário</h6>
        <span>email@email.com</span>
        <br>
        <a class="btn btn-small waves-effect waves-light" href="#editar-perfil">Editar perfil</a>
      </div>
    </article>
    <br>
    <div class="divider"></div>
    <article class="center">
      <h6>Turma</h6>
      <div class="center" id="perfil-turmas">
        <a id="#criar-turma" class="btn btn-small waves-effect waves-light">Criar turma</a>
        <br>
        <br>
        <a class="btn btn-small waves-effect waves-light" href="#minhas-turmas">Ver minhas turmas</a>
      </div>
    </article>
    <a href="#">Excluir conta</a>
  </section>
  <section class="carousel-item c-carousel-two p-carousel-page cyan darken-2" id="editar-perfil">
    <div class="row center">
      <img src="http://via.placeholder.com/60x60" alt="foto de perfil" class="responsive-img circle">
      <a href="#">Adicionar foto</a>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <label for="name">Nome</label>
        <input id="name" type="text" class="validate">
        </div>
      <div class="input-field col s12 l12">
        <label for="email">Email</label>
        <input id="email" type="email" class="validate">
      </div>
    </div>
    <div>
      <a href="#mudar-senha" class="btn btn-small waves-effect waves-light">Mudar senha</a>
      <br>
      <br>
      <a href="#perfil" class="btn btn-small waves-effect waves-light">Salvar alterações</a>
    </div>
    <a href="#">Excluir conta</a>
  </section>
  <section class="carousel-item c-carousel-thre indigo darken-1" id="mudar-senha">
    <div class="row">
      <div class="input-field col s12">
          <label for="password">Senha atual</label>
          <input id="password" type="password" class="validate">
        </div>
    </div>
    <div class="divider"></div>
    <div class="row">
      <div class="input-field col s12">
          <label for="new-password">Nova senha</label>
          <input id="new-password" type="password" class="validate">
        </div>
        <div class="input-field col s12">
          <label for="confirm-password">Repita a nova senha</label>
          <input id="confirm-password" type="password" class="validate">
        </div>
    </div>
    <div>
      <a href="#perfil" class="btn btn-small waves-effect waves-light">Salvar alterações</a>
    </div>
  </section>
  <section class="carousel-item c-carousel-four blue-grey" id="minhas-turmas">
    <article class="center">
      <div class="center foto-perfil">
        <img src="http://via.placeholder.com/60x60" alt="foto de perfil" class="materialboxed responsive-img circle">
        <h6>Nome do usuário</h6>
        <span>email@email.com</span>
      </div>
    </article>
    <div class="turmas">
      <h6>Minhas turmas</h6>
      <a href="#criar-turma" class="btn btn-smart">Criar turma</a>
      <ul class="collection with-header sou-professor">
        <li class="collection-header"><h4>Sou professor</h4></li>
        <li class="collection-item">Turma 1</li>
        <li class="collection-item">Turma 2</li>
        <li class="collection-item">Turma 3</li>
      </ul>
      <ul class="collection with-header sou-aluno">
        <li class="collection-header"><h4>Sou aluno</h4></li>
        <li class="collection-item">Turma 1</li>
        <li class="collection-item">Turma 2</li>
        <li class="collection-item">Turma 3</li>
      </ul>
    </div>
  </section>
  <section class="carousel-item c-carousel-four deep-purple lighten-1" id="criar-turma">
    <h6>Crie já sua turma</h6>
    <div class="row">
      <div class="input-field col s12">
          <label for="nome-turma">Nome da turma</label>
          <input id="nome-turma" type="text" class="validate">
          </div>
        <div class="input-field col s12 l12">
          <label for="area">Área *</label>
          <input id="area" type="text" class="validate">
        </div>
        <div class="input-field col s12">
          <label for="sala-turma">Sala *</label>
          <input id="sala-turma" type="number" class="validate">
        </div>
    </div>
    <a href="#" class="btn btn-smart">Finalizar</a>
    <br>
    <span>* opcional</span>
  </section>
</main>

<?php include_once('../front/footer.php'); ?>