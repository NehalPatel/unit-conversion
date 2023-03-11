<?php

use NehalPatel\UnitConversion\Length\Kilometer;

it('can convert Kilometer to Meter', function () {
    $kilometer = new Kilometer(10);
    expect(round($kilometer->toMeter()->convert(), 4))->toEqual(10000);
});

it('can convert Kilometer to Centimeter', function () {
    $kilometer = new Kilometer(10);
    expect(round($kilometer->toCentimeter()->convert(), 4))->toEqual(1000000);
});

it('can convert Kilometer to Millimeter', function () {
    $kilometer = new Kilometer(10);
    expect(round($kilometer->toMillimeter()->convert(), 4))->toEqual(10000000);
});

it('can convert Kilometer to Mile', function () {
    $kilometer = new Kilometer(10);
    expect(round($kilometer->toMile()->convert(), 4))->toEqual(6.2137);
});

it('can convert Kilometer to Yard', function () {
    $kilometer = new Kilometer(10);
    expect(round($kilometer->toYard()->convert(), 4))->toEqual(10936.1);
});

it('can convert Kilometer to Foot', function () {
    $kilometer = new Kilometer(10);
    expect(round($kilometer->toFoot()->convert(), 4))->toEqual(32808.4);
});

it('can convert Kilometer to Inch', function () {
    $kilometer = new Kilometer(10);
    expect(round($kilometer->toInch()->convert(), 4))->toEqual(393701);
});
