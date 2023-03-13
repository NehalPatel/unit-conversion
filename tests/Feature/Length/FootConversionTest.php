<?php

use NehalPatel\UnitConversion\Length\Foot;

it('can convert Foot to Meter', function () {
    $yard = new Foot(9);
    expect(round($yard->toMeter()->convert(), 4))->toEqual(2.7432);
});

it('can convert Foot to Kilometer', function () {
    $yard = new Foot(9);
    expect(round($yard->toKilometer()->convert(), 4))->toEqual(0.0027);
});

it('can convert Foot to Centimeter', function () {
    $yard = new Foot(9);
    expect(round($yard->toCentimeter()->convert(), 4))->toEqual(274.32);
});

it('can convert Foot to Millimeter', function () {
    $yard = new Foot(9);
    expect(round($yard->toMillimeter()->convert(), 4))->toEqual(2743.2);
});

it('can convert Foot to Mile', function () {
    $yard = new Foot(9);
    expect(round($yard->toMile()->convert(), 4))->toEqual(0.0017);
});

it('can convert Foot to Yard', function () {
    $yard = new Foot(9);
    expect(round($yard->toYard()->convert(), 4))->toEqual(3);
});

it('can convert Foot to Inch', function () {
    $yard = new Foot(9);
    expect(round($yard->toInch()->convert(), 4))->toEqual(108);
});
