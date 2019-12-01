<?php
require_once('../../../classes/avisoDAO.php');    
$idTurma = $_GET['id'];
$idAviso = $_GET['idAviso'];
$adao = new AvisoDAO();

if($idAviso !== null) $adao -> excluir($idAviso);

header("Location: ../class.php?id=".$idTurma."");
?>