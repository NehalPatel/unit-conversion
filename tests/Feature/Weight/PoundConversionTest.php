<?php

//Pound Test Cases

use NehalPatel\UnitConversion\Weight\Pound;

it('can convert Pound to Kilogram', function () {
    $pound = new Pound(1);
    expect(round($pound->toKilogram()->convert(), 4))->toEqual(0.4535);
});

it('can convert Pound to Gram', function () {
    $pound = new Pound(1);
    expect(round($pound->toGram()->convert(), 4))->toEqual(453.5924);
});

it('can convert Pound to Milligram', function () {
    $pound = new Pound(1);
    expect(round($pound->toMilligram()->convert(), 4))->toEqual(453592.37);
});

it('can convert Pound to Matric Ton', function () {
    $pound = new Pound(1);
    expect(round($pound->toMatricTon()->convert(), 4))->toEqual(0.0005);
});

it('can convert Pound to Long Ton', function () {
    $pound = new Pound(1);
    expect(round($pound->toLongTon()->convert(), 4))->toEqual(0.0004);
});

it('can convert Pound to Short Ton', function () {
    $pound = new Pound(1);
    expect(round($pound->toShortTon()->convert(), 4))->toEqual(0.0004);
});

it('can convert Pound to Ounce', function () {
    $pound = new Pound(1);
    expect(round($pound->toOunce()->convert(), 4))->toEqual(16);
});
