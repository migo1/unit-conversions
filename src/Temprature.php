<?php

namespace Migo\UnitConversions;

class Temprature
{
    private float $celsius;

    public static function fromCelcius(float $celsius): self
    {
        return new static($celsius);
    }

    public function __construct(float $celsius)
    {
        $this->celsius = $celsius;
    }

    public function toFahrenheit(): float
    {
        return ($this->celsius * 1.8) + 32;
    }
}
