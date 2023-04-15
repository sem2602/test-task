<?php


namespace App\RobotFactory;


class MergeRobot
{

    private float $weight = 0;
    private int $speed = 0;
    private float $height = 0;

    public function addRobot($object){

        if(is_object($object)){
            if($this->speed > $object->speed || $this->speed == 0){
                $this->speed = $object->speed;
            }
            $this->weight += $object->weight;
            $this->height += $object->height;
        } elseif(is_array($object)) {

            foreach ($object as $value){

                if($this->speed > $value->speed || $this->speed == 0){
                    $this->speed = $value->speed;
                }
                $this->weight += $value->weight;
                $this->height += $value->height;

            }
            //$this->robots[] = $object;
        }
        //parent::addType($object);

    }

    /**
     * @return float|int
     */
    public function getWeight(): float|int
    {
        return $this->weight;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @return float|int
     */
    public function getHeight(): float|int
    {
        return $this->height;
    }

}