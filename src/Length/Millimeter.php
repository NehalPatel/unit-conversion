<?php

namespace NehalPatel\UnitConversion\Length;

use NehalPatel\UnitConversion\Convertable;
use NehalPatel\UnitConversion\Exceptions\MissingConversionUnitException;

class Millimeter extends LengthConverter implements Convertable
{
    private float $millimeter;

    public function __construct(float $millimeter)
    {
        $this->millimeter = $millimeter;
    }

    public static function from(float $millimeter): Millimeter
    {
        return new self($millimeter);
    }

    /**
     * Convert from Millimeter to Kilometer
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toKilometer(): self
    {
        if (! isset($this->millimeter)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->millimeter / 1000000;

        return $this;
    }

    /**
     * Convert from Millimeter to Meter
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMeter(): self
    {
        if (! isset($this->millimeter)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->millimeter / 1000;

        return $this;
    }

    /**
     * Convert from Millimeter to Centimeter
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toCentimeter(): self
    {
        if (! isset($this->millimeter)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->millimeter / 10;

        return $this;
    }

    /**
     * Convert from Millimeter to Mile
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMile(): self
    {
        if (! isset($this->millimeter)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->millimeter / 1609344;

        return $this;
    }

    /**
     * Convert from Millimeter to Yard
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toYard(): self
    {
        if (! isset($this->millimeter)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->millimeter / 914.4;

        return $this;
    }

    /**
     * Convert from Millimeter to Foot
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toFoot(): self
    {
        if (! isset($this->millimeter)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->millimeter / 304.8;

        return $this;
    }

    /**
     * Convert from Millimeter to Inch
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toInch(): self
    {
        if (! isset($this->millimeter)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->millimeter / 25.4;

        return $this;
    }
}
