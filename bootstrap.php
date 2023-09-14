<?php

require __DIR__ . '/vendor/autoload.php';

$builder = new \DI\ContainerBuilder();
$builder->addDefinitions('di.php');

$container = $builder->build();

