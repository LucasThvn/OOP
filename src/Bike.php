<?php

namespace App;

class Bike extends Vehicle
{
    public function switchOn(): bool
    {
        if ($this->getCurrentSpeed() > 10) {
            return true;
        }
    }

    public function switchOff(): bool
    {
        return false;
    }
}