<?php

require_once "bootstrap.php";

$dql = "SELECT b, e, r FROM Bug b JOIN b.engineer e JOIN b.reporter r ORDER BY b.created DESC";

$query = $entityManager->createQuery($dql);
$query->setMaxResults(30);
$bugs = $query->getResult();

foreach($bugs as $bug) {
	echo $bug->getDescription() . " - " . $bug->getCreated()->format('d.m.Y') . "\n";
	echo "	Relatado por: " . $bug->getReporter()->getName() . "\n";
	echo "	Atribuído para: " . $bug->getEngineer()->getName() . "\n";
	foreach($bug->getProducts() as $product) {
		echo "	Plataforma: " . $product->getName() . "\n";
	}
	echo "\n";
}