<?php
set_time_limit(0);
//ini_set('memory_limit', '2000M');
ini_set('memory_limit', '-1');

require_once "bootstrap.php";

//$pessoa = $entityManager->getRepository('Pessoa')->findOneBy(array('idpessoa' => 40));
$pessoa = $entityManager->getRepository('ContaReceberDados')->fetchAllContasReceber();

//print_r($pessoa->getReceberPessoa());
//echo $pessoa->getDatavencimento();
//echo $pessoa->getIdcontareceber()->getValor();
print_r($pessoa->getPessoaConta());
//$pessoa->getPessoaConta()[0]