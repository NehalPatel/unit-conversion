<?php

namespace NehalPatel\UnitConversion\Weight;

use NehalPatel\UnitConversion\Convertable;
use NehalPatel\UnitConversion\Exceptions\MissingConversionUnitException;

class MatricTon extends WeightConverter implements Convertable
{
    private float $matric_ton;

    public function __construct(float $matric_ton)
    {
        $this->matric_ton = $matric_ton;
    }

    public static function from(float $matric_ton): MatricTon
    {
        return new self($matric_ton);
    }

    /**
     * Convert from MatricTon to Kilogram
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toKilogram(): self
    {
        if (! isset($this->matric_ton)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->matric_ton * 1000;

        return $this;
    }

    /**
     * Convert from MatricTon to Gram
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toGram(): self
    {
        if (! isset($this->matric_ton)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->matric_ton * 1000000;

        return $this;
    }

    /**
     * Convert from MatricTon to Milligram
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMilligram(): self
    {
        if (! isset($this->matric_ton)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->matric_ton * 1000000000;

        return $this;
    }

    /**
     * Convert from MatricTon to Long Ton
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toLongTon(): self
    {
        if (! isset($this->matric_ton)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->matric_ton * 0.9842065276;

        return $this;
    }

    /**
     * Convert from MatricTon to Short Ton
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toShortTon(): self
    {
        if (! isset($this->matric_ton)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->matric_ton * 1.10231131;

        return $this;
    }

    /**
     * Convert from MatricTon to Pound
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toPound(): self
    {
        if (! isset($this->matric_ton)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->matric_ton * 2204.62262;

        return $this;
    }

    /**
     * Convert from MatricTon to Ounce
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toOunce(): self
    {
        if (! isset($this->matric_ton)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->matric_ton * 35273.9619;

        return $this;
    }
}
