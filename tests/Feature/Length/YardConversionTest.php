<?php

use NehalPatel\UnitConversion\Length\Yard;

it('can convert Yard to Meter', function () {
    $yard = new Yard(9);
    expect(round($yard->toMeter()->convert(), 4))->toEqual(8.2296);
});

it('can convert Yard to Kilometer', function () {
    $yard = new Yard(9);
    expect(round($yard->toKilometer()->convert(), 4))->toEqual(0.0082);
});

it('can convert Yard to Centimeter', function () {
    $yard = new Yard(9);
    expect(round($yard->toCentimeter()->convert(), 4))->toEqual(822.96);
});

it('can convert Yard to Millimeter', function () {
    $yard = new Yard(9);
    expect(round($yard->toMillimeter()->convert(), 4))->toEqual(8229.6);
});

it('can convert Yard to Mile', function () {
    $yard = new Yard(9);
    expect(round($yard->toMile()->convert(), 4))->toEqual(0.0051);
});

it('can convert Yard to Foot', function () {
    $yard = new Yard(9);
    expect(round($yard->toFoot()->convert(), 4))->toEqual(27);
});

it('can convert Yard to Inch', function () {
    $yard = new Yard(9);
    expect(round($yard->toInch()->convert(), 4))->toEqual(324);
});
