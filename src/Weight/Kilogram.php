<?php

namespace NehalPatel\UnitConversion\Weight;

use NehalPatel\UnitConversion\Convertable;
use NehalPatel\UnitConversion\Exceptions\MissingConversionUnitException;

class Kilogram extends WeightConverter implements Convertable
{
    private float $kilogram;

    public function __construct(float $kilogram)
    {
        $this->kilogram = $kilogram;
    }

    public static function from(float $kilogram): Kilogram
    {
        return new self($kilogram);
    }

    /**
     * Convert from Kilogram to Gram
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toGram(): self
    {
        if (! isset($this->kilogram)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->kilogram * 1000;

        return $this;
    }

    /**
     * Convert from Kilogram to Milligram
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMilligram(): self
    {
        if (! isset($this->kilogram)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->kilogram * 1000000;

        return $this;
    }

    /**
     * Convert from Kilogram to Matric Ton
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMatricTon(): self
    {
        if (! isset($this->kilogram)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->kilogram / 1000;

        return $this;
    }

    /**
     * Convert from Kilogram to Long Ton
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toLongTon(): self
    {
        if (! isset($this->kilogram)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->kilogram / 1016.04691;

        return $this;
    }

    /**
     * Convert from Kilogram to Short Ton
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toShortTon(): self
    {
        if (! isset($this->kilogram)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->kilogram / 907.185;

        return $this;
    }

    /**
     * Convert from Kilogram to Pound
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toPound(): self
    {
        if (! isset($this->kilogram)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->kilogram * 2.20462;

        return $this;
    }

    /**
     * Convert from Kilogram to Ounce
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toOunce(): self
    {
        if (! isset($this->kilogram)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->kilogram * 35.27396;

        return $this;
    }
}
