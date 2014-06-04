<?php

require_once "bootstrap.php";

$market = new Market("alguns de câmbio");
$stock1 = new Stock("AAPL", $market);
$stock2 = new Stock("GOOG", $market);

$entityManager->persist($market);
$entityManager->persist($stock1);
$entityManager->persist($stock2);

$entityManager->flush();