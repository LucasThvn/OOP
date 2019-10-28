<?php

namespace App;

final class PedestrianWay extends HighWay
{
    protected $nbLane = 1;

    protected $maxSpeed = 10;

    public function addVehiclule(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bike || $vehicle instanceof Skateboard){
            $this->currentVehicle += $vehicle;
        }
    }
}