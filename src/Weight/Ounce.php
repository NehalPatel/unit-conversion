<?php

namespace NehalPatel\UnitConversion\Weight;

use NehalPatel\UnitConversion\Convertable;
use NehalPatel\UnitConversion\Exceptions\MissingConversionUnitException;

class Ounce extends WeightConverter implements Convertable
{
    private float $ounce;

    public function __construct(float $ounce)
    {
        $this->ounce = $ounce;
    }

    public static function from(float $ounce): Pound
    {
        return new self($ounce);
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
        if (! isset($this->ounce)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->ounce / 35.274;

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
        if (! isset($this->ounce)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->ounce * 28.3495;

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
        if (! isset($this->ounce)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->ounce * 28349.5;

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
        if (! isset($this->ounce)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->ounce / 32000;

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
        if (! isset($this->ounce)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->ounce / 35840;

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
        if (! isset($this->ounce)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->ounce / 35273.962;

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
        if (! isset($this->ounce)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->ounce / 16;

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
        if (! isset($this->ounce)) {
            throw new MissingConversionUnitException();
        }

        $this->weight = $this->ounce * 16;

        return $this;
    }
}
