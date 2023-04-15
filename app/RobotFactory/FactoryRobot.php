<?php

namespace App\RobotFactory;

class FactoryRobot
{

    private array $types = [];

    public function addType($object): void
    {

        $className = get_class($object);
        $className = substr($className, strrpos($className, '\\') + 1); // вирішив наповнювати массив типів роботів по ключу з ім'ям класу

        $this->types[$className] = $object;

    }

    public function createRobot1(int $count = 1): array
    {
        for($i = 0; $i < $count; $i++) $return[] = $this->types['Robot1']; // створення роботу по ключу класу для зручності
        return $return;
    }

    public function createRobot2(int $count = 1): array
    {
        for($i = 0; $i < $count; $i++) $return[] = $this->types['Robot2'];
        return $return;
    }

}