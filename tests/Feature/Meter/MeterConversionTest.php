<?php

use NehalPatel\UnitConversion\Length\Meter;

it('can convert Meter to Kilometer', function () {
    $meter = new Meter(1000);
    expect(round($meter->toKilometer()->convert(), 4))->toEqual(1);
});

it('can convert Meter to Centimeter', function () {
    $meter = new Meter(1000);
    expect(round($meter->toCentimeter()->convert(), 4))->toEqual(100000);
});

it('can convert Meter to Millimeter', function () {
    $meter = new Meter(1000);
    expect(round($meter->toMillimeter()->convert(), 4))->toEqual(1000000);
});

it('can convert Meter to Mile', function () {
    $meter = new Meter(1000);
    expect(round($meter->toMile()->convert(), 4))->toEqual(0.6214);
});

it('can convert Meter to Yard', function () {
    $meter = new Meter(1000);
    expect(round($meter->toYard()->convert(), 4))->toEqual(1093.61);
});

it('can convert Meter to Foot', function () {
    $meter = new Meter(1000);
    expect(round($meter->toFoot()->convert(), 4))->toEqual(3280.84);
});

it('can convert Meter to Inch', function () {
    $meter = new Meter(1000);
    expect(round($meter->toInch()->convert(), 4))->toEqual(39370.1);
});
