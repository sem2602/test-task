<?php

namespace App\RobotFactory;

class Robot
{

    public float $weight;
    public int $speed;
    public float $height;

    public function __construct($weight, $speed, $height)
    {

        $this->weight = $weight;
        $this->speed = $speed;
        $this->height = $height;

    }

}