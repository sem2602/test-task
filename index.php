<?php

use App\RobotFactory\FactoryRobot;
use App\RobotFactory\MergeRobot;
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


$mergeRobot = new MergeRobot();
$mergeRobot ->addRobot(new Robot2(40, 160, 8));
$mergeRobot ->addRobot($factory->createRobot2(2));


//var_dump($mergeRobot);

$factory->addType($mergeRobot);
$res = $factory->createMergeRobot(1);
$res = reset($res);

//var_dump($res);
echo '<br>';
//Результатом роботи методу буде мінімальна швидкість з усіх об’єднаних роботів
echo $res->getSpeed();
echo '<br>';
// Результатом роботи методу буде сума всіх ваг об’єднаних роботів
echo $res->getWeight();
echo '<br>';
echo $res->getHeight();