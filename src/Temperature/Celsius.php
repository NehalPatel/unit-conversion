<?php

namespace NehalPatel\UnitConversion\Temperature;

use NehalPatel\UnitConversion\Convertable;
use NehalPatel\UnitConversion\Exceptions\MissingConversionUnitException;

class Celsius extends TemperatureConverter implements Convertable
{
    private float $celsius;

    public function __construct(float $celsius)
    {
        $this->celsius = $celsius;
    }

    /**
     * Convert from Celsius to Fahrenheit
     * @return $this
     * @throws MissingConversionUnitException
     */
    public function toFahrenheit(): self
    {
        if (!isset($this->celsius))
            throw new MissingConversionUnitException();

        $this->temperature = ($this->celsius * 1.8) + 32;
         return $this;
    }

    /**
     * Convert from Celsius to Kelvin
     * @return $this
     * @throws MissingConversionUnitException
     */
    public function toKelvin(): self
    {
        if (!isset($this->celsius))
            throw new MissingConversionUnitException();

        $this->temperature = $this->celsius + 273.15;
        return $this;
    }
}
