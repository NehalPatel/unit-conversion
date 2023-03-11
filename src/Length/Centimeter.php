<?php

namespace NehalPatel\UnitConversion\Length;

use NehalPatel\UnitConversion\Convertable;
use NehalPatel\UnitConversion\Exceptions\MissingConversionUnitException;

class Centimeter extends LengthConverter implements Convertable
{
    private float $centimeter;

    public function __construct(float $centimeter)
    {
        $this->centimeter = $centimeter;
    }

    public static function from(float $centimeter): Centimeter
    {
        return new self($centimeter);
    }

    /**
     * Convert from Centimeter to Kilometer
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toKilometer(): self
    {
        if (! isset($this->centimeter)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->centimeter / 100000;

        return $this;
    }

    /**
     * Convert from Centimeter to Meter
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMeter(): self
    {
        if (! isset($this->centimeter)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->centimeter / 100;

        return $this;
    }

    /**
     * Convert from Centimeter to Millimeter
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMillimeter(): self
    {
        if (! isset($this->centimeter)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->centimeter * 10;

        return $this;
    }

    /**
     * Convert from Centimeter to Mile
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMile(): self
    {
        if (! isset($this->centimeter)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->centimeter / 160934.4;

        return $this;
    }

    /**
     * Convert from Centimeter to Yard
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toYard(): self
    {
        if (! isset($this->centimeter)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->centimeter / 91.44;

        return $this;
    }

    /**
     * Convert from Centimeter to Foot
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toFoot(): self
    {
        if (! isset($this->centimeter)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->centimeter / 30.48;

        return $this;
    }

    /**
     * Convert from Centimeter to Inch
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toInch(): self
    {
        if (! isset($this->centimeter)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->centimeter / 2.54;

        return $this;
    }
}
