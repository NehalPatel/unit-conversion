<?php

//MatricTon Test Cases

use NehalPatel\UnitConversion\Weight\MatricTon;

it('can convert MatricTon to Kilogram', function () {
    $matric_ton = new MatricTon(1);
    expect($matric_ton->toKilogram()->convert())->toEqual(1000);
});

it('can convert MatricTon to Gram', function () {
    $matric_ton = new MatricTon(1);
    expect($matric_ton->toGram()->convert())->toEqual(1000000);
});

it('can convert MatricTon to Milligram', function () {
    $matric_ton = new MatricTon(1);
    expect(round($matric_ton->toMilligram()->convert(), 4))->toEqual(1000000000.0);
});

it('can convert MatricTon to Long Ton', function () {
    $matric_ton = new MatricTon(1);
    expect(round($matric_ton->toLongTon()->convert(), 4))->toEqual(0.9842);
});

it('can convert MatricTon to Short Ton', function () {
    $matric_ton = new MatricTon(1);
    expect(round($matric_ton->toShortTon()->convert(), 4))->toEqual(1.1023);
});

it('can convert MatricTon to Pound', function () {
    $matric_ton = new MatricTon(1);
    expect(round($matric_ton->toPound()->convert(), 4))->toEqual(2204.6226);
});

it('can convert MatricTon to Ounce', function () {
    $matric_ton = new MatricTon(1);
    expect(round($matric_ton->toOunce()->convert(), 4))->toEqual(35273.9619);
});
