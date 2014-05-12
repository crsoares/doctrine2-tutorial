<?php

require_once "bootstrap.php";

$id = $argv[1];
$product = $entityManager->find('Product', $id);

if($product === null) {
	echo "Nenhum produto encontrado.";
	exit(1);
}

echo sprintf("-%s\n", $product->getName());