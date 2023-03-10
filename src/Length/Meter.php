<?php

namespace NehalPatel\UnitConversion\Length;

use NehalPatel\UnitConversion\Convertable;
use NehalPatel\UnitConversion\Exceptions\MissingConversionUnitException;

class Meter extends LengthConverter implements Convertable
{
    private float $meter;

    public function __construct(float $meter)
    {
        $this->meter = $meter;
    }

    public static function from(float $meter): Meter
    {
        return new self($meter);
    }

    /**
     * Convert from Meter to Kilometer
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toKilometer(): self
    {
        if (! isset($this->meter)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->meter / 1000;

        return $this;
    }

    /**
     * Convert from Meter to Centimeter
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toCentimeter(): self
    {
        if (! isset($this->meter)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->meter * 100;

        return $this;
    }

    /**
     * Convert from Meter to Millimeter
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMillimeter(): self
    {
        if (! isset($this->meter)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->meter * 1000;

        return $this;
    }

    /**
     * Convert from Meter to Mile
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMile(): self
    {
        if (! isset($this->meter)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->meter / 1609.344;

        return $this;
    }

    /**
     * Convert from Meter to Yard
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toYard(): self
    {
        if (! isset($this->meter)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->meter * 1.09361;

        return $this;
    }

    /**
     * Convert from Meter to Foot
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toFoot(): self
    {
        if (! isset($this->meter)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->meter * 3.28084;

        return $this;
    }

    /**
     * Convert from Meter to Inch
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toInch(): self
    {
        if (! isset($this->meter)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->meter * 39.3701;

        return $this;
    }
}
