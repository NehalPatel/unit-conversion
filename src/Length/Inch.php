<?php

namespace NehalPatel\UnitConversion\Length;

use NehalPatel\UnitConversion\Convertable;
use NehalPatel\UnitConversion\Exceptions\MissingConversionUnitException;

class Inch extends LengthConverter implements Convertable
{
    private float $inch;

    public function __construct(float $inch)
    {
        $this->inch = $inch;
    }

    public static function from(float $inch): Inch
    {
        return new self($inch);
    }

    /**
     * Convert from Inch to Meter
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMeter(): self
    {
        if (! isset($this->inch)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->inch * 0.0254;

        return $this;
    }

    /**
     * Convert from Inch to Kilometer
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toKilometer(): self
    {
        if (! isset($this->inch)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->inch * 0.0000254;

        return $this;
    }

    /**
     * Convert from Inch to Centimeter
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toCentimeter(): self
    {
        if (! isset($this->inch)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->inch * 2.54;

        return $this;
    }

    /**
     * Convert from Inch to Millimeter
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMillimeter(): self
    {
        if (! isset($this->inch)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->inch * 25.4;

        return $this;
    }

    /**
     * Convert from Inch to Mile
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMile(): self
    {
        if (! isset($this->inch)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->inch * 0.0000157828;

        return $this;
    }

    /**
     * Convert from Inch to Yard
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toYard(): self
    {
        if (! isset($this->inch)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->inch * 0.0277777778;

        return $this;
    }

    /**
     * Convert from Inch to Foot
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toFoot(): self
    {
        if (! isset($this->inch)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->inch * 0.0833333333;

        return $this;
    }
}
