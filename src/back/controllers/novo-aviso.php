<?php
  require_once('../../../classes/aviso.php');
  require_once('../../../classes/avisoDAO.php');
  require_once('../../../classes/turmaDAO.php');
  require_once('../../../classes/turma.php');

  $turmaDAO = new TurmaDAO();
  $turma = $turmaDAO -> buscar(intval($_POST['idTurma']));

  $idAviso = isset($_POST['idAviso']);
  $aviso = new Aviso($_POST['aviso'], $turma);
  $adao = new avisoDAO();

  if($idAviso){
    $aviso -> setID(intval($_POST['idAviso']));
    $adao -> altera($aviso);
  }
  else{
    $adao -> inserir($aviso);
  }

  header("Location: ../class.php?id=".$_POST['idTurma']."");
?>