<?php
require_once('../../../classes/turmaDAO.php');    
$id = $_GET['id'];
$tdao = new TurmaDAO();

if($id!==null) $tdao -> excluir($id);


//redireciona para o listar.php
header("Location: ../perfil.php");

?>