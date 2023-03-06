<?php

namespace NehalPatel\UnitConversion\Temperature;

use NehalPatel\UnitConversion\Convertable;
use NehalPatel\UnitConversion\Exceptions\MissingConversionUnitException;

class Fahrenheit extends TemperatureConverter implements Convertable
{
    private float $fahrenheit;

    public function __construct(float $fahrenheit)
    {
        $this->fahrenheit = $fahrenheit;
    }

    /**
     * Convert from Fahrenheit to Celsius
     * @return $this
     * @throws MissingConversionUnitException
     */
    public function toCelsius(): self
    {
        if (!isset($this->fahrenheit))
            throw new MissingConversionUnitException();

        $this->temperature = ($this->fahrenheit - 32) / 1.8;
        return $this;
    }

    /**
     * Convert from Fahrenheit to Kelvin
     * @return $this
     * @throws MissingConversionUnitException
     */
    public function toKelvin(): self
    {
        if (!isset($this->fahrenheit))
            throw new MissingConversionUnitException();

        $this->temperature = ($this->fahrenheit + 459.67) * 5 / 9;
        return $this;
    }
}
