<?php

namespace NehalPatel\UnitConversion\Temperature;

use NehalPatel\UnitConversion\Exceptions\MissingConversionUnitException;

class TemperatureConverter
{
    protected float $temperature;

    /**
     * @throws MissingConversionUnitException
     */
    public function convert(): float
    {
        if (empty($this->temperature)) {
            throw new MissingConversionUnitException();
        }

        return $this->temperature;
    }
}
