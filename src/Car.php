<?php

namespace App;

class Car extends Vehicle
{
/**
* @var string
*/
private $energy;

/**
* @var int
*/
private $energyLevel;

const ALLOWED_ENERGIES = [
  'fuel',
  'electric',
];

public function setEnergy (string $energy)
{
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
    }
    return $this;
}


public function __construct(string $color, int $nbSeats, string $energy)
{
parent::__construct($color, $nbSeats);
$this->setEnergy($energy);
}

public function getEnergy(): string
{
return $this->energy;
}

public function getEnergyLevel(): int
{
return $this->energyLevel;
}

public function setEnergyLevel(int $energyLevel): void
{
$this->energyLevel = $energyLevel;
}
}