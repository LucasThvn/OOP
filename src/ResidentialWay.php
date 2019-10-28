<?php

namespace App;

final class ResidentialWay extends HighWay
{
    protected $nbLane = 2;

    protected $maxSpeed = 50;

    public function addVehiclule(Vehicle $vehicle)
    {
        if ($vehicle instanceof Vehicle){
            $this->currentVehicle += [$vehicle];
        }
    }
}