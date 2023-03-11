<?php

use NehalPatel\UnitConversion\Length\Mile;

it('can convert Mile to Kilometer', function () {
    $mile = new Mile(1);
    expect(round($mile->toKilometer()->convert(), 4))->toEqual(1.6093);
});

it('can convert Mile to Meter', function () {
    $mile = new Mile(1);
    expect(round($mile->toMeter()->convert(), 4))->toEqual(1609.34);
});

it('can convert Mile to Centimeter', function () {
    $mile = new Mile(1);
    expect(round($mile->toCentimeter()->convert(), 4))->toEqual(160934);
});

it('can convert Mile to Millimeter', function () {
    $mile = new Mile(1);
    expect(round($mile->toMillimeter()->convert(), 4))->toEqual(1609344);
});

it('can convert Mile to Yard', function () {
    $mile = new Mile(1);
    expect(round($mile->toYard()->convert(), 4))->toEqual(1760);
});

it('can convert Mile to Foot', function () {
    $mile = new Mile(1);
    expect(round($mile->toFoot()->convert(), 4))->toEqual(5280);
});

it('can convert Mile to Inch', function () {
    $mile = new Mile(1);
    expect(round($mile->toInch()->convert(), 4))->toEqual(63360);
});
