<?php

require_once "bootstrap.php";

$bugs = $entityManager->getRepository('Bug')->getRecentBugs();

foreach($bugs as $bug) {
	echo $bug->getDescription() . " - " . $bug->getCreated()->format('d.m.Y') . "\n";
	echo "	Relatado por: " . $bug->getReporter()->getName() . "\n";
	echo "	Atribuído a: " . $bug->getEngineer()->getName() . "\n";
	foreach($bug->getProducts() as $product) {
		echo "	Plataforma: " . $product->getName() . "\n";
	}
	echo "\n";
}