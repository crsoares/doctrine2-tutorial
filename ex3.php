<?php

require_once "bootstrap.php";

$marketId = 1;
$symbol = "AAPL";

$dql = "SELECT m, s FROM Market m JOIN m.stocks s WHERE m.id = ?1";
$market = $entityManager->createQuery($dql)
						->setParameter(1, $marketId)
						->getSingleResult();

$stock = $market->getStock($symbol);
echo $stock->getSymbol();