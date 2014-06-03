<?php

require_once "bootstrap.php";

//$pessoa = $entityManager->getRepository('Pessoa')->findOneBy(array('idpessoa' => 40));
$pessoa = $entityManager->getRepository('ContaReceberDados')->fetchAllContasReceber();

//print_r($pessoa->getReceberPessoa());
//echo $pessoa->getDatavencimento();
//echo $pessoa->getIdcontareceber()->getValor();
print_r($pessoa->getPessoaConta());
//$pessoa->getPessoaConta()[0]