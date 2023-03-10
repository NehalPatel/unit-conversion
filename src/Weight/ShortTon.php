<?php

namespace NehalPatel\UnitConversion\Weight;

use NehalPatel\UnitConversion\Convertable;
use NehalPatel\UnitConversion\Exceptions\MissingConversionUnitException;

class ShortTon extends WeightConverter implements Convertable
{
    private float $short_ton;

    public function __construct(float $short_ton)
    {
        $this->short_ton = $short_ton;
    }

    public static function from(float $short_ton): ShortTon
    {
        return new self($short_ton);
    }

    /**
     * Convert from ShortTon to Kilogram
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toKilogram(): self
    {
        if (! isset($this->short_ton)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->short_ton * 907.18474;

        return $this;
    }

    /**
     * Convert from ShortTon to Gram
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toGram(): self
    {
        if (! isset($this->short_ton)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->short_ton * 907184.74;

        return $this;
    }

    /**
     * Convert from ShortTon to Milligram
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMilligram(): self
    {
        if (! isset($this->short_ton)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->short_ton * 907184740;

        return $this;
    }

    /**
     * Convert from ShortTon to Long Ton
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toLongTon(): self
    {
        if (! isset($this->short_ton)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->short_ton / 1.12;

        return $this;
    }

    /**
     * Convert from ShortTon to Matric Ton
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMatricTon(): self
    {
        if (! isset($this->short_ton)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->short_ton / 1.102;

        return $this;
    }

    /**
     * Convert from ShortTon to Pound
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toPound(): self
    {
        if (! isset($this->short_ton)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->short_ton * 2000;

        return $this;
    }

    /**
     * Convert from ShortTon to Ounce
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toOunce(): self
    {
        if (! isset($this->short_ton)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->short_ton * 32000;

        return $this;
    }
}
