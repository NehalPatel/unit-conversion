<?php

//Ounce Test Cases

use NehalPatel\UnitConversion\Weight\Ounce;

it('can convert Ounce to Kilogram', function () {
    $pound = new Ounce(1000);
    expect(round($pound->toKilogram()->convert(), 4))->toEqual(28.3495);
});

it('can convert Ounce to Gram', function () {
    $pound = new Ounce(1000);
    expect(round($pound->toGram()->convert(), 4))->toEqual(28349.5);
});

it('can convert Ounce to Milligram', function () {
    $pound = new Ounce(1000);
    expect(round($pound->toMilligram()->convert(), 4))->toEqual(28349500);
});

it('can convert Ounce to Matric Ton', function () {
    $pound = new Ounce(1000);
    expect(round($pound->toMatricTon()->convert(), 4))->toEqual(0.0283);
});

it('can convert Ounce to Long Ton', function () {
    $pound = new Ounce(1000);
    expect(round($pound->toLongTon()->convert(), 4))->toEqual(0.0279);
});

it('can convert Ounce to Short Ton', function () {
    $pound = new Ounce(1000);
    expect(round($pound->toShortTon()->convert(), 4))->toEqual(0.0313);
});

it('can convert Ounce to Pound', function () {
    $pound = new Ounce(1000);
    expect(round($pound->toPound()->convert(), 4))->toEqual(62.5);
});
