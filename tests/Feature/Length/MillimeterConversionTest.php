<?php

use NehalPatel\UnitConversion\Length\Millimeter;

it('can convert Millimeter to Kilometer', function () {
    $millimeter = new Millimeter(1000000);
    expect(round($millimeter->toKilometer()->convert(), 4))->toEqual(1);
});

it('can convert Millimeter to Meter', function () {
    $millimeter = new Millimeter(1000000);
    expect(round($millimeter->toMeter()->convert(), 4))->toEqual(1000);
});

it('can convert Millimeter to Centimeter', function () {
    $millimeter = new Millimeter(1000000);
    expect(round($millimeter->toCentimeter()->convert(), 4))->toEqual(100000);
});

it('can convert Millimeter to Mile', function () {
    $millimeter = new Millimeter(1000000);
    expect(round($millimeter->toMile()->convert(), 4))->toEqual(0.6214);
});

it('can convert Millimeter to Yard', function () {
    $millimeter = new Millimeter(1000000);
    expect(round($millimeter->toYard()->convert(), 4))->toEqual(1093.6133);
});

it('can convert Millimeter to Foot', function () {
    $millimeter = new Millimeter(1000000);
    expect(round($millimeter->toFoot()->convert(), 4))->toEqual(3280.8399);
});

it('can convert Millimeter to Inch', function () {
    $millimeter = new Millimeter(1000000);
    expect(round($millimeter->toInch()->convert(), 4))->toEqual(39370.0787);
});
