<?php

use App\RobotFactory\FactoryRobot;
use App\RobotFactory\Robot1;
use App\RobotFactory\Robot2;

require_once 'vendor/autoload.php';

$factory = new FactoryRobot();

$factory->addType(new Robot1(20, 120, 6)); // створив конструктор для встановлення характеристик роботу
$factory->addType(new Robot2(30, 140, 10));

echo '<pre>';
//var_dump($factory);

var_dump($factory->createRobot1(5));
var_dump($factory->createRobot2(2));
