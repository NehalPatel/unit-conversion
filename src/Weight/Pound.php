<?php

namespace NehalPatel\UnitConversion\Weight;

use NehalPatel\UnitConversion\Convertable;
use NehalPatel\UnitConversion\Exceptions\MissingConversionUnitException;

class Pound extends WeightConverter implements Convertable
{
    private float $pound;

    public function __construct(float $pound)
    {
        $this->pound = $pound;
    }

    public static function from(float $pound): Pound
    {
        return new self($pound);
    }

    /**
     * Convert from Pound to Kilogram
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toKilogram(): self
    {
        if (! isset($this->pound)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->pound / 2.205;

        return $this;
    }

    /**
     * Convert from Pound to Gram
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toGram(): self
    {
        if (! isset($this->pound)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->pound * 453.59237;

        return $this;
    }

    /**
     * Convert from Pound to Milligram
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMilligram(): self
    {
        if (! isset($this->pound)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->pound * 453592.37;

        return $this;
    }

    /**
     * Convert from Pound to Short Ton
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toShortTon(): self
    {
        if (! isset($this->pound)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->pound / 2240;

        return $this;
    }

    /**
     * Convert from Pound to Long Ton
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toLongTon(): self
    {
        if (! isset($this->pound)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->pound / 2240;

        return $this;
    }

    /**
     * Convert from Pound to Matric Ton
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toMatricTon(): self
    {
        if (! isset($this->pound)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->pound / 2204.62;

        return $this;
    }

    /**
     * Convert from Pound to Pound
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toPound(): self
    {
        if (! isset($this->pound)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->pound / 2000;

        return $this;
    }

    /**
     * Convert from Pound to Ounce
     *
     * @return $this
     *
     * @throws MissingConversionUnitException
     */
    public function toOunce(): self
    {
        if (! isset($this->pound)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->pound * 16;

        return $this;
    }
}
