<?php

namespace NehalPatel\UnitConversion\Length;

use NehalPatel\UnitConversion\Convertable;
use NehalPatel\UnitConversion\Exceptions\MissingConversionUnitException;

class Mile extends LengthConverter implements Convertable
{
    private float $mile;

    public function __construct(float $mile)
    {
        $this->mile = $mile;
    }

    public static function from(float $mile): Mile
    {
        return new self($mile);
    }

    /**
     * Convert from Mile to Kilometer
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toKilometer(): self
    {
        if (! isset($this->mile)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->mile * 1.60934;

        return $this;
    }

    /**
     * Convert from Mile to Meter
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMeter(): self
    {
        if (! isset($this->mile)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->mile * 1609.34;

        return $this;
    }

    /**
     * Convert from Mile to Centimeter
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toCentimeter(): self
    {
        if (! isset($this->mile)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->mile * 160934;

        return $this;
    }

    /**
     * Convert from Mile to Millimeter
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMilliMeter(): self
    {
        if (! isset($this->mile)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->mile * 1609344;

        return $this;
    }

    /**
     * Convert from Mile to Yard
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toYard(): self
    {
        if (! isset($this->mile)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->mile * 1760;

        return $this;
    }

    /**
     * Convert from Mile to Foot
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toFoot(): self
    {
        if (! isset($this->mile)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->mile * 5280;

        return $this;
    }

    /**
     * Convert from Mile to Inch
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toInch(): self
    {
        if (! isset($this->mile)) {
            throw new MissingConversionUnitException();
        }

        $this->length = $this->mile * 63360;

        return $this;
    }
}
