<?php

//ShortTon Test Cases

use NehalPatel\UnitConversion\Weight\ShortTon;

it('can convert ShortTon to Kilogram', function () {
    $matric_ton = new ShortTon(1);
    expect(round($matric_ton->toKilogram()->convert(), 4))->toEqual(907.1847);
});

it('can convert ShortTon to Gram', function () {
    $matric_ton = new ShortTon(1);
    expect(round($matric_ton->toGram()->convert(), 4))->toEqual(907184.74);
});

it('can convert ShortTon to Milligram', function () {
    $matric_ton = new ShortTon(1);
    expect(round($matric_ton->toMilligram()->convert(), 4))->toEqual(907184740);
});

it('can convert ShortTon to Matric Ton', function () {
    $matric_ton = new ShortTon(1);
    expect(round($matric_ton->toMatricTon()->convert(), 4))->toEqual(0.9074);
});

it('can convert ShortTon to Long Ton', function () {
    $matric_ton = new ShortTon(1);
    expect(round($matric_ton->toLongTon()->convert(), 4))->toEqual(0.8929);
});

it('can convert ShortTon to Pound', function () {
    $matric_ton = new ShortTon(1);
    expect(round($matric_ton->toPound()->convert(), 4))->toEqual(2000);
});

it('can convert ShortTon to Ounce', function () {
    $matric_ton = new ShortTon(1);
    expect(round($matric_ton->toOunce()->convert(), 4))->toEqual(32000);
});
