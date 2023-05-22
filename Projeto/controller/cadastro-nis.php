<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/model/NomeNis.php';

$retorno["sucesso"] = true;
$objNomeNis = new NomeNis();

$dados = array();
parse_str($_POST['dados'], $dados);

$length = 11;
do {
    $dados["nis"] = mt_rand(pow(10,($length-1)),pow(10,$length)-1);

    $retorno["nis"] =  $dados["nis"];

    $existe = $objNomeNis->getByNis($dados["nis"]);

} while ($existe != 0);

$objNomeNis->inserirNis($dados);

echo json_encode($retorno);

     