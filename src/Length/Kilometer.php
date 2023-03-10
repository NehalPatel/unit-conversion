<?php

namespace NehalPatel\UnitConversion\Length;

use NehalPatel\UnitConversion\Convertable;
use NehalPatel\UnitConversion\Exceptions\MissingConversionUnitException;

class Kilometer extends LengthConverter implements Convertable
{
    private float $kilometer;

    public function __construct(float $kilometer)
    {
        $this->kilometer = $kilometer;
    }

    public static function from(float $kilometer): Kilometer
    {
        return new self($kilometer);
    }

    /**
     * Convert from Kilometer to Meter
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMeter(): self
    {
        if (! isset($this->kilometer)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->kilometer * 1000;

        return $this;
    }

    /**
     * Convert from Kilometer to Centimeter
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toCentimeter(): self
    {
        if (! isset($this->kilometer)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->kilometer * 100000;

        return $this;
    }

    /**
     * Convert from Kilometer to Millimeter
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMillimeter(): self
    {
        if (! isset($this->kilometer)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->kilometer * 1000000;

        return $this;
    }

    /**
     * Convert from Kilometer to Mile
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMile(): self
    {
        if (! isset($this->kilometer)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->kilometer / 1.60934;

        return $this;
    }

    /**
     * Convert from Kilometer to Yard
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toYard(): self
    {
        if (! isset($this->kilometer)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->kilometer * 1093.61;

        return $this;
    }

    /**
     * Convert from Kilometer to Foot
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toFoot(): self
    {
        if (! isset($this->kilometer)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->kilometer * 3280.84;

        return $this;
    }

    /**
     * Convert from Kilometer to Inch
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toInch(): self
    {
        if (! isset($this->kilometer)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->kilometer * 39370.1;

        return $this;
    }
}
