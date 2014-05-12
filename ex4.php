<?php

require_once "bootstrap.php";

$pessoa = $entityManager->getRepository('ContaReceber')->findOneBy(array('idpessoa' => 1));

//print_r($pessoa->getIdcontareceber());
//echo $pessoa->getIdcontareceber()->getValor();
foreach($pessoa->getIdcontareceber() as $teste)
{
	echo $teste;die;
}