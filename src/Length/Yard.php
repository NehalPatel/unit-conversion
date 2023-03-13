<?php

namespace NehalPatel\UnitConversion\Length;

use NehalPatel\UnitConversion\Convertable;
use NehalPatel\UnitConversion\Exceptions\MissingConversionUnitException;

class Yard extends LengthConverter implements Convertable
{
    private float $yard;

    public function __construct(float $yard)
    {
        $this->yard = $yard;
    }

    public static function from(float $yard): Yard
    {
        return new self($yard);
    }

    /**
     * Convert from Yard to Meter
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMeter(): self
    {
        if (! isset($this->yard)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->yard * 0.9144;

        return $this;
    }

    /**
     * Convert from Yard to Kilometer
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toKilometer(): self
    {
        if (! isset($this->yard)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->yard * 0.0009144;

        return $this;
    }

    /**
     * Convert from Yard to Centimeter
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toCentimeter(): self
    {
        if (! isset($this->yard)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->yard * 91.44;

        return $this;
    }

    /**
     * Convert from Yard to Millimeter
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMillimeter(): self
    {
        if (! isset($this->yard)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->yard * 914.4;

        return $this;
    }

    /**
     * Convert from Yard to Mile
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMile(): self
    {
        if (! isset($this->yard)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->yard * 0.0005681797;

        return $this;
    }

    /**
     * Convert from Yard to Foot
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toFoot(): self
    {
        if (! isset($this->yard)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->yard * 3;

        return $this;
    }

    /**
     * Convert from Yard to Inch
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toInch(): self
    {
        if (! isset($this->yard)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->yard * 36;

        return $this;
    }
}
