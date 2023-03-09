<?php

namespace NehalPatel\UnitConversion\Weight;

use NehalPatel\UnitConversion\Convertable;
use NehalPatel\UnitConversion\Exceptions\MissingConversionUnitException;

class Gram extends WeightConverter implements Convertable
{
    private float $gram;

    public function __construct(float $gram)
    {
        $this->gram = $gram;
    }

    public static function from(float $gram): Gram
    {
        return new self($gram);
    }

    /**
     * Convert from Gram to Kilogram
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toKilogram(): self
    {
        if (! isset($this->gram)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->gram / 1000;

        return $this;
    }

    /**
     * Convert from Gram to Milligram
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMilligram(): self
    {
        if (! isset($this->gram)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->gram * 1000;

        return $this;
    }

    /**
     * Convert from Gram to Matric Ton
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMatricTon(): self
    {
        if (! isset($this->gram)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->gram / 1000000;

        return $this;
    }

    /**
     * Convert from Gram to Long Ton
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toLongTon(): self
    {
        if (! isset($this->gram)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->gram / 1016046.91;

        return $this;
    }

    /**
     * Convert from Gram to Short Ton
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toShortTon(): self
    {
        if (! isset($this->gram)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->gram / 907184.74;

        return $this;
    }

    /**
     * Convert from Gram to Pound
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toPound(): self
    {
        if (! isset($this->gram)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->gram / 453.59237;

        return $this;
    }

    /**
     * Convert from Gram to Ounce
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toOunce(): self
    {
        if (! isset($this->gram)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->gram / 28.34952;

        return $this;
    }
}
