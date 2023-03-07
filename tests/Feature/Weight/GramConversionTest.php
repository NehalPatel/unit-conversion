<?php

//Gram Test Cases

use NehalPatel\UnitConversion\Weight\Gram;

//10Kg to 10000G
it('can convert Gram to Kilogram', function () {
    $gram = new Gram(1000);
    expect($gram->toKilogram()->convert())->toEqual(1);
});

//10Kg to 10000000MG
it('can convert Gram to Milligram', function () {
    $gram = new Gram(1000);
    expect($gram->toMilligram()->convert())->toEqual(1000000);
});

it('can convert Gram to Matric Ton', function () {
    $gram = new Gram(1000);
    expect(round($gram->toMatricTon()->convert(), 4))->toEqual(0.001);
});

it('can convert Gram to Long Ton', function () {
    $gram = new Gram(1000);
    expect(round($gram->toLongTon()->convert(), 4))->toEqual(0.001);
});

it('can convert Gram to Short Ton', function () {
    $gram = new Gram(1000);
    expect(round($gram->toShortTon()->convert(), 4))->toEqual(0.0011);
});

it('can convert Gram to Pound', function () {
    $gram = new Gram(1000);
    expect(round($gram->toPound()->convert(), 4))->toEqual(2.2046);
});

it('can convert Gram to Ounce', function () {
    $gram = new Gram(1000);
    expect(round($gram->toOunce()->convert(), 4))->toEqual(35.274);
});
