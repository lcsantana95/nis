<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/model/NomeNis.php';

$retorno["sucesso"] = false;
$objNomeNis = new NomeNis();

$dados = array();
parse_str($_POST['dados'], $dados);

$nome_nis = $objNomeNis->getName($dados["nis-number"]);
if ($nome_nis){
    $retorno["nome"] = $nome_nis["nome"];
    $retorno["sucesso"] = true;
}

echo json_encode($retorno);
