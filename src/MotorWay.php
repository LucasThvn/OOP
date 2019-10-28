<?php

namespace App;

final class MotorWay extends HighWay
{
    protected $nbLane = 4;

    protected $maxSpeed = 130;

    public function addVehiclule(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car){
            $this->currentVehicle += [$vehicle];
        }
    }
}