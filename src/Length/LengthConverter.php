<?php

namespace NehalPatel\UnitConversion\Length;

use NehalPatel\UnitConversion\Exceptions\MissingConversionUnitException;

class LengthConverter
{
    protected float $length;

    /**
     * @throws MissingConversionUnitException
     */
    public function convert(): float
    {
        if (empty($this->length)) {
            throw new MissingConversionUnitException();
        }

        return $this->length;
    }
}
