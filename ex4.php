<?php

require_once "bootstrap.php";

$pessoa = $entityManager->getRepository('Pessoa')->findOneBy(array('idpessoa' => 40));

//print_r($pessoa->getReceberPessoa());
//echo $pessoa->getDatavencimento();
//echo $pessoa->getIdcontareceber()->getValor();
print_r($pessoa->getPessoaConta()[0]->getContaLocal()->getDescricaolocalcobranca());
//$pessoa->getPessoaConta()[0]