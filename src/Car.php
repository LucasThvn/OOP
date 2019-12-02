<?php

namespace App;

use Exception;

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

private $hasParkBrake = true;

private $start = false;

const ALLOWED_ENERGIES = [
  'fuel',
  'electric',
];

public function switchOn(): bool
{
    return true;
}

public function switchOff(): bool
{
    return false;
}

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

public function start()
{
    if ($this->hasParkBrake === true) {
        try {
            throw new Exception('Ma voiture roule comme un donut');
        } catch(Exception $e){
            $this->setParkBrake(false);
            echo $e;
        } finally {
            $this->start = true;
        }
    }
}



public function getEnergyLevel(): int
{
return $this->energyLevel;
}

public function setEnergyLevel(int $energyLevel): void
{
$this->energyLevel = $energyLevel;
}

public function setParkBrake(bool $hasParkBrake): void
{
    $this->hasParkBrake = $hasParkBrake;
}

/**
 * @return bool
 */
public function isStart()
{
    return $this->start;
}

/**
 * @param bool $start
 */
public function setStart(bool $start) :void
{
    $this->start = $start;
}


}