<?php

namespace App;

use App\Vehicle;

class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn(): bool
    {
        if ($this->currentSpeed > 10)
            return true;
        return false;
    }

    public function switchOff(): bool
    {
        return false;
    }
}
