<?php

require_once "bootstrap.php";

$id = $argv[1];
$newName = $argv[2];

$product = $entityManager->find('Product', $id);

if($product === null) {
	echo "Produtos $id não existe.\n";
	exit(1);
}

$product->setName($newName);

$entityManager->flush();