<?php
require_once('../../../classes/turmaDAO.php');    
require_once('../../../classes/turma.php');    
$id = isset($_POST['id']);
$turma = new Turma($_POST['nome'],$_POST['sala'],$_POST['area']);
$tdao = new TurmaDAO();

if($id){
    $turma -> setID(intval($_POST['id']));
    $tdao -> altera($turma);
}
else{
    $tdao -> inserir($turma);
}

header("Location: ../perfil.php");

?>