<?php

require_once "bootstrap.php";

$marketId = 1;
$symbol = "AAPL";

$market = $entityManager->find('Market', $marketId);
$stock = $market->getStock($symbol);

echo $stock->getSymbol();