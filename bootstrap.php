<?php





require "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

//Criar uma configuração simples "default" Doutrina ORM para Anotações
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/src"), $isDevMode);

//parâmetros de configuração de banco de dados
$conn = array(
	'driver' => 'pdo_mysql',
	'user' => 'root',
	'password' => '',
	//'dbname' => 'app'
	'dbname' => 'conadmin'
);

//obtenção do gerenciador de entidade
$entityManager = EntityManager::create($conn, $config);

/** @var $em \Doctrine\ORM\EntityManager */
$platform = $entityManager->getConnection()->getDatabasePlatform();
$platform->registerDoctrineTypeMapping('enum', 'string');

