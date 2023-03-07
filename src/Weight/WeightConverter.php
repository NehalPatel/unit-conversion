<?php

namespace NehalPatel\UnitConversion\Weight;

use NehalPatel\UnitConversion\Exceptions\MissingConversionUnitException;

class WeightConverter
{
    protected float $weight;

    /**
     * @throws MissingConversionUnitException
     */
    public function convert(): float
    {
        if (empty($this->weight)) {
            throw new MissingConversionUnitException();
        }

        return $this->weight;
    }
}
