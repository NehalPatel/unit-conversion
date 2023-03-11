<?php

use NehalPatel\UnitConversion\Length\Centimeter;

it('can convert Centimeter to Kilometer', function () {
    $centimeter = new Centimeter(1000);
    expect(round($centimeter->toKilometer()->convert(), 4))->toEqual(0.01);
});

it('can convert Centimeter to Meter', function () {
    $centimeter = new Centimeter(1000);
    expect(round($centimeter->toMeter()->convert(), 4))->toEqual(10);
});

it('can convert Centimeter to Millimeter', function () {
    $centimeter = new Centimeter(1000);
    expect(round($centimeter->toMillimeter()->convert(), 4))->toEqual(10000);
});

it('can convert Centimeter to Mile', function () {
    $centimeter = new Centimeter(1000);
    expect(round($centimeter->toMile()->convert(), 4))->toEqual(0.0062);
});

it('can convert Centimeter to Yard', function () {
    $centimeter = new Centimeter(1000);
    expect(round($centimeter->toYard()->convert(), 4))->toEqual(10.9361);
});

it('can convert Centimeter to Foot', function () {
    $centimeter = new Centimeter(1000);
    expect(round($centimeter->toFoot()->convert(), 4))->toEqual(32.8084);
});

it('can convert Centimeter to Inch', function () {
    $centimeter = new Centimeter(1000);
    expect(round($centimeter->toInch()->convert(), 4))->toEqual(393.7008);
});
