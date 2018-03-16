<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src/models"), $isDevMode);

// database configuration parameters
$conn = array(
    'dbname' => 'postgres',
    'user' => 'postgres',
    'password' => 'admin',
    'host' => 'localhost',
    'driver' => 'pdo_pgsql'
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);