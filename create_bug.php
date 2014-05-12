<?php

require_once "bootstrap.php";

$theReporterId = $argv[1];
$theDefaultEngineerId = $argv[2];
$productIds = explode(",", $argv[3]);
//print_r($productIds);die;

$reporter = $entityManager->find('User', $theReporterId);
$engineer = $entityManager->find('User', $theDefaultEngineerId);
if(!$reporter || !$engineer) {
	echo "Nenhum repórter e / ou engenheiro encontrado para a entrada.";
	exit(1);
}

$bug = new Bug();
$bug->setDescription("Algo não funciona!");
$bug->setCreated(new DateTime("now"));
$bug->setStatus("OPEN");


foreach($productIds as $productId) {
	$product = $entityManager->find('Product', $productId);
	$bug->assignToProduct($product);
}

$bug->setReporter($reporter);
$bug->setEngineer($engineer);

$entityManager->persist($bug);
$entityManager->flush();

echo "Seu novo Id Bug: " . $bug->getId();