<?php

require_once "bootstrap.php";

$dql = "SELECT b, e, r, p FROM Bug b JOIN b.engineer e 
		JOIN b.reporter r  JOIN b.products p  ORDER BY b.created DESC";

$query = $entityManager->createQuery($dql);
$bugs = $query->getArrayResult();

foreach($bugs as $bug) {
	echo $bug['description'] . " - " .$bug['created']->format('d.m.Y') . "\n";
	echo "	Relatado por: " . $bug['reporter']['name'] . "\n";
	echo "	Atribuído para: " . $bug['engineer']['name'] . "\n";

	foreach($bug['products'] as $product) {
		echo "	Plataforma: " . $product['name'] . "\n";
	}
	echo "\n";
}