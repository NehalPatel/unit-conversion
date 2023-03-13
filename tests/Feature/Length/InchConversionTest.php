<?php

use NehalPatel\UnitConversion\Length\Inch;

it('can convert Inch to Meter', function () {
    $yard = new Inch(12);
    expect(round($yard->toMeter()->convert(), 4))->toEqual(0.3048);
});

it('can convert Inch to Kilometer', function () {
    $yard = new Inch(12);
    expect(round($yard->toKilometer()->convert(), 4))->toEqual(0.0003);
});

it('can convert Inch to Centimeter', function () {
    $yard = new Inch(12);
    expect(round($yard->toCentimeter()->convert(), 4))->toEqual(30.48);
});

it('can convert Inch to Millimeter', function () {
    $yard = new Inch(12);
    expect(round($yard->toMillimeter()->convert(), 4))->toEqual(304.8);
});

it('can convert Inch to Mile', function () {
    $yard = new Inch(12);
    expect(round($yard->toMile()->convert(), 4))->toEqual(0.0002);
});

it('can convert Inch to Yard', function () {
    $yard = new Inch(12);
    expect(round($yard->toYard()->convert(), 4))->toEqual(0.3333);
});

it('can convert Inch to Foot', function () {
    $yard = new Inch(12);
    expect(round($yard->toFoot()->convert(), 4))->toEqual(1);
});
