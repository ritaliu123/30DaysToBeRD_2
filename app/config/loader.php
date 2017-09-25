<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs(
    [
        $config->application->controllersDir, 
        $config->application->modelsDir
    ]
)->register();

$loader->registerNamespaces(
    [
     "Rita\Controllers"   => APP_PATH . "/controllers",
     "Rita\Model\ORM"     => APP_PATH . "/models/orm",
     "Rita\Model\Dao"     => APP_PATH . "/models/dao",
     "Rita\Model\Service" => APP_PATH . "/models/service",
    ]
)->register();