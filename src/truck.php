<?php

namespace App;

require_once 'Vehicle.php';

class Truck extends Vehicle
{

    /**
     * @var int
     */
    private $cargo = 0;

    /**
     * @var int
     */
    private $capacity;

    public function __construct(string $color, int $nbSeats, int $capacity)
    {
        parent::__construct($color, $nbSeats);
        $this->capacity = $capacity;
    }

    /**
     * @return string
     */

    public function cargoProgress (): string
    {
        if ($this->cargo === $this->capacity){
            $sentence = 'Full';
        }else {
            $sentence = 'In filling';
        }
        return $sentence;
    }

    /**
     * @param int $cargo
     */
    public function setCargo($cargo)
    {
        if ($cargo > $this->capacity) {
            $this->cargo = $this->capacity;
        }elseif ($cargo < 0){
            $this->cargo = 0;
        }else {
            $this->cargo = $cargo;
        }
    }

    /**
     * @return int
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * @param int $capacity
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

    /**
     * @return int
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

}