<?php

namespace App;

abstract class HighWay
{
    protected $currentVehicle = [];

    protected $nbLane;

    protected $maxSpeed;

    abstract public function addVehiclule(Vehicle $vehicle);

    /**
     * @return mixed
     */
    public function getCurrentVehicle()
    {
        return $this->currentVehicle;
    }

    /**
     * @param mixed $currentVehicle
     */
    public function setCurrentVehicle($currentVehicle)
    {
        $this->currentVehicle = $currentVehicle;
    }

    /**
     * @return mixed
     */
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * @param mixed $nbLane
     */
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;
    }

    /**
     * @return mixed
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * @param mixed $maxSpeed
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }


}