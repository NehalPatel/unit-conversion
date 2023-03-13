<?php

namespace NehalPatel\UnitConversion\Length;

use NehalPatel\UnitConversion\Convertable;
use NehalPatel\UnitConversion\Exceptions\MissingConversionUnitException;

class Foot extends LengthConverter implements Convertable
{
    private float $foot;

    public function __construct(float $foot)
    {
        $this->foot = $foot;
    }

    public static function from(float $foot): Foot
    {
        return new self($foot);
    }

    /**
     * Convert from Foot to Meter
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMeter(): self
    {
        if (! isset($this->foot)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->foot * 0.3048;

        return $this;
    }

    /**
     * Convert from Foot to Kilometer
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toKilometer(): self
    {
        if (! isset($this->foot)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->foot * 0.0003;

        return $this;
    }

    /**
     * Convert from Foot to Centimeter
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toCentimeter(): self
    {
        if (! isset($this->foot)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->foot * 30.48;

        return $this;
    }

    /**
     * Convert from Foot to Millimeter
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMillimeter(): self
    {
        if (! isset($this->foot)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->foot * 304.8;

        return $this;
    }

    /**
     * Convert from Foot to Mile
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMile(): self
    {
        if (! isset($this->foot)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->foot / 5280;

        return $this;
    }

    /**
     * Convert from Foot to Yard
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toYard(): self
    {
        if (! isset($this->foot)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->foot / 3;

        return $this;
    }

    /**
     * Convert from Foot to Inch
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toInch(): self
    {
        if (! isset($this->foot)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->foot * 12;

        return $this;
    }
}
