<?php

namespace NehalPatel\UnitConversion\Weight;

use NehalPatel\UnitConversion\Convertable;
use NehalPatel\UnitConversion\Exceptions\MissingConversionUnitException;

class Milligram extends WeightConverter implements Convertable
{
    private float $milligram;

    public function __construct(float $milligram)
    {
        $this->milligram = $milligram;
    }

    public static function from(float $milligram): Milligram
    {
        return new self($milligram);
    }

    /**
     * Convert from Milligram to Kilogram
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toKilogram(): self
    {
        if (! isset($this->milligram)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->milligram / 1000000;

        return $this;
    }

    /**
     * Convert from Milligram to Milligram
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toGram(): self
    {
        if (! isset($this->milligram)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->milligram / 1000;

        return $this;
    }

    /**
     * Convert from Milligram to Matric Ton
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMatricTon(): self
    {
        if (! isset($this->milligram)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->milligram / 1000000000;

        return $this;
    }

    /**
     * Convert from Milligram to Long Ton
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toLongTon(): self
    {
        if (! isset($this->milligram)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->milligram / 1016046908.8;

        return $this;
    }

    /**
     * Convert from Milligram to Short Ton
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toShortTon(): self
    {
        if (! isset($this->milligram)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->milligram / 907184740;

        return $this;
    }

    /**
     * Convert from Milligram to Pound
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toPound(): self
    {
        if (! isset($this->milligram)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->milligram / 453592.37;

        return $this;
    }

    /**
     * Convert from Milligram to Ounce
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toOunce(): self
    {
        if (! isset($this->milligram)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->milligram / 28349.523125;

        return $this;
    }
}
