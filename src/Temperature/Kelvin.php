<?php

namespace NehalPatel\UnitConversion\Temperature;

use NehalPatel\UnitConversion\Convertable;
use NehalPatel\UnitConversion\Exceptions\MissingConversionUnitException;

class Kelvin extends TemperatureConverter implements Convertable
{
    private float $kelvin;

    public function __construct(float $kelvin)
    {
        $this->kelvin = $kelvin;
    }

    /**
     * Convert from Kelvin to Celsius
     * @return $this
     * @throws MissingConversionUnitException
     */
    public function toCelsius(): self
    {
        if (!isset($this->kelvin))
            throw new MissingConversionUnitException();

        $this->temperature = $this->kelvin - 273.15;
        return $this;
    }

    /**
     * Convert from Kelvin to Fahrenheit
     * @return $this
     * @throws MissingConversionUnitException
     */
    public function toFahrenheit(): self
    {
        if (!isset($this->kelvin))
            throw new MissingConversionUnitException();

        $this->temperature = ($this->kelvin - 273.15) * 9/5 + 32;
        return $this;
    }
}
